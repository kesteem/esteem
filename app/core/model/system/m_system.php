<?php

namespace app\core\model\system;

use app\config\app;
use app\config\setup;
use app\core\model;
use app\lib\request;
use app\lib\token;
use app\lib\validator;
use app\object\user;
use app\resources\cookie_names;
use Error;
use Exception;

class m_system extends model
{
    private $setupKeyFilename = 'app/setup.txt';
    private $userFilename = 'app/core/files/users.json';
    private $dataArr = [];

    public function __construct()
    {
        $this->initFileJsonToArr();

    }
    function initSetupKey()
    {

        if (!file_exists($this->getSetupKeyFilename())) {

            file_put_contents($this->getSetupKeyFilename(), '');
        }
        $fileTime = filemtime($this->getSetupKeyFilename());
        if (empty(trim($fileTime)) || (time() - $fileTime) > 356) {

            file_put_contents($this->getSetupKeyFilename(), token::generateHash(rand(200, 500)));
        }
        return $this;
    }

    function logout(){

        return setcookie(cookie_names::sysAdminLogin, null, -99999, '/',app::domain);
    }

    private function initFileJsonToArr()
    {
        $this->dataArr = json_decode(file_get_contents($this->userFilename), true);
        if (empty($this->dataArr)) $this->dataArr = [];
    }

    public function getSetupKeyFilename(): string
    {
        return $this->setupKeyFilename;
    }

    function createUser($username, $password, $setupKey)
    {

        $username = trim($username);
        $password = trim($password);
        $setupKey = trim($setupKey);
        if (empty($username)) $this->setReport('username', 'Enter username', 1);
        if (empty($setupKey)) $this->setReport('setupKey', 'Enter setup key', 1);
        if (empty($password)) $this->setReport('password', 'Enter new password', 1);
        if ($this->isFlag()) return false;

        if (!validator::username($username)) {

            $this->setReport('username', validator::getInfo(), 1);
        }

        if (!validator::password($password)) $this->setReport('password', validator::getInfo(), 1);

        $username = strtolower($username);
        if ($this->usernameExist($username)) {

            $this->setReport('username', 'username already exist', 1);
        }

        $setupKeyFile = trim(file_get_contents($this->getSetupKeyFilename()));
        if ($setupKey !== $setupKeyFile) {

            $this->setReport('username', 'Incorrect setup Key is correct', 1);
        }
        if ($this->isFlag()) return false;
        $data = ['username' => $username, 'password' => password_hash($password, PASSWORD_DEFAULT)];
        array_push($this->dataArr, $data);
        return (bool)file_put_contents($this->userFilename, json_encode($this->dataArr));
    }


    function login($username, $password)
    {

        $username = trim(strtolower($username));
        if (!validator::username($username)) {
            $this->setReport('username', validator::getInfo(), 1);
            return false;
        }

        if (empty($this->dataArr)) return false;
        $foundAccount = false;
        $index = $sPassword = '';
        foreach ($this->dataArr as $index => $user) {

            $sPassword = !empty($user['password']) ? $user['password'] : '';
            $sUsername = !empty($user['username']) ? $user['username'] : '';
            if ($username === $sUsername) $foundAccount = true;
        }
        if (!$foundAccount) {

            $this->setReport('info', 'Account not found', 1);
            return false;
        }

        if (!password_verify($password, $sPassword)) {

            $this->setReport('password', 'incorrect password', 1);
            return false;
        }
        return $this->setLoginCookie($index, $username);
    }

    function getUsernameByIndex($index)
    {

        return isset($this->dataArr[$index]['username']) ? $this->dataArr[$index]['username'] : '';
    }

    private function setLoginCookie($index, $username)
    {

        $token = token::generateHash(6);
        $hash = password_hash($token . $username, PASSWORD_DEFAULT);
        $https = request::isHTTPS() ? true : false;
        return setcookie(cookie_names::sysAdminLogin, "$index;$token;$hash", time() + 99123, '/', app::domain, $https, true);
    }

    function loginWithSetupKey($setUpKey)
    {
        if (user::$admin) return true;
        $setupKeyFile = trim(file_get_contents($this->getSetupKeyFilename()));
        if (empty(trim($setupKeyFile))) {

            $this->setReport('info', 'Oops! an error occurred', 1);
            return false;
        } elseif (empty(trim($setUpKey))) {
            $this->setReport('setupKey', 'Enter setup key', 1);
        } elseif ($setUpKey !== $setupKeyFile) {
            $this->setReport('setupKey', 'incorrect setup key', 1);
            return false;
        }
        $len = rand(10, 40);
        $token = substr($setupKeyFile, -$len);
        $hash = password_hash($token . $len, PASSWORD_DEFAULT);
        $this->setLoginWithKeyCookie($len,$hash);
    }

    private function setLoginWithKeyCookie($len,$hash){

        return setcookie(cookie_names::sysAdminLogin, "$len,$hash", time() + 99999, '/', app::domain, request::isHTTPS(), true);

    }
    private function isLoginWithSetUpKey($cookie)
    {
        // return < 0 stop validating further is login
        if (empty($cookie)) return -1;
        $arr = explode(',', $cookie);
        if (count($arr) < 2) return 0;
        $len = !empty($arr[0]) ? $arr[0] : '';
        $hash = !empty($arr[1]) ? $arr[1] : '';
        $setupKeyFile = trim(file_get_contents($this->getSetupKeyFilename()));
        if (empty(trim($setupKeyFile))) return 0;
        $token = substr($setupKeyFile, -$len);
      if(password_verify($token.$len, $hash)){

       return  $this->setLoginWithKeyCookie($len,$hash);
      }return false;
    }

    function isLogin()
    {
        $cookie = isset($_COOKIE[cookie_names::sysAdminLogin]) ? urldecode(trim($_COOKIE[cookie_names::sysAdminLogin]) ): '';
        $isLoginWithKey = $this->isLoginWithSetUpKey($cookie);
        if ($isLoginWithKey < 0) return false;
        if ($isLoginWithKey ) return true;
        if (empty(trim($cookie))) return false;
        $arr = explode(';', $cookie);
        $index = !empty($arr[0]) ? $arr[0] : 0;
        $token = !empty($arr[1]) ? $arr[1] : '';
        $hash = !empty($arr[2]) ? $arr[2] : '';
        $username = $this->getUsernameByIndex($index);
       return password_verify($token . $username, $hash)?$this->setLoginCookie($index,$username):'';
    }

    function usernameExist($username)
    {
        $username = strtolower($username);
        if (empty($this->dataArr)) return false;
        foreach ($this->dataArr as $value) {
            $strUsername = empty($value['username']) ? '' : $value['username'];
            if ($username === $strUsername) return true;
        }
        return false;
    }

    function setup($mode = 1){

        $setup =$mode==1?setup::update:setup::downdate;
        if (empty($setup)) {

            $this->setReport('info', 'No script for update ',1);
        } else {

            $info = '';
            foreach ($setup as $update) {

                try {

                    try {
                        $class = $update['class'];
                        $method = $update['method'];
                        $obj = new $class();
                        $obj->$method();
                    } catch ( Error $e) {
                        $info = (string)$e;
                    }

                } catch (Exception $e){
                    $info = (string)$e;
                }

                if (!empty($info)){
                  $this->setReport('info',$info,1);
                    return false;
                }
            }return true;
        }
    }

}