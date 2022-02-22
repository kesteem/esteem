<?php

namespace app\core\controller;

use app\controllers\system\v_system;
use app\core\controller;
use app\core\model\system\m_system;
use app\lib\request;
use app\object\user;

class system extends controller
{
    function index()
    {
        $this->access(user::$systemAdmin);

        $this->setHtmlView(v_system::class,'index');
        $this->docAnyReq()->docReqReturnArr('systemInfo');
        $data = [
            'diskFreeSpace'=>disk_free_space(DIRECTORY_SEPARATOR),
            'diskTotalSpace'=>disk_total_space(DIRECTORY_SEPARATOR),
            'phpVersion' => phpversion()
        ];
        $this->setReturn('systemInfo',$data);
        $this->done();
    }

    function createUser()
    {


        $this->docPostReq()
            ->docReqParam('setupKey', true)
            ->docReqParam('password', true)
            ->docReqParam('username', true);

        $systemModel = new m_system();
        $systemModel->initSetupKey();
        if (request::isPost()) {

            $setupKey = request::getPostReqString('setupKey');
            $password = request::getPostReqString('password');
            $username = request::getPostReqString('username');

            $this->setReturn('userCreated', $accountCreated = $systemModel->createUser($username, $password, $setupKey));
            $this->setReports('userCreated', $systemModel->getReports());
            if ($accountCreated) {
                $this->setReturn('login', $systemModel->login($username, $password));
                $this->setReports('login', $systemModel->getReports());
            }
        }
        $this->done();
    }


    function login()
    {

        $this->setReturn('login', user::$systemAdmin);
        $this->docAnyReq()
            ->docReqReturnBool('login');

        $this->docPostReq()
            ->docReqParam('username', true)
            ->docReqReturnBool('info')
            ->docReqParam('password', true);

        $this->setHtmlView(v_system::class,'login');

        if (user::$systemAdmin){

        }elseif (request::isPost()) {

            $username = request::getPostReqString('username');
            $password = request::getPostReqString('password');
            $system = new m_system();
            $this->setReturn('login', $system->login($username, $password));
            $this->setReports('login', $system->getReports());
        }
        $this->done();
    }


    function update()
    {
        $this->access(user::$systemAdmin);
        $this->setHtmlView(v_system::class,'update');
        $this->docPostReq()
            ->docReqReturnBool('update');
        if (!user::$systemAdmin) {

            $this->setReports('Login', 'You need to login as admin to perform action');
        } elseif (request::isPost()) {

            $system = new m_system();
            $this->setReturn('update',$system->setup());
            $this->setReports('update',$system->getReports());
        }
        $this->done();
    }


    function loginWithSetupKey()
    {

        $this->setHtmlView(v_system::class,'setupKey');

        $this->docAnyReq()
            ->docReqReturnBool('login');

        $this->docPostReq()
            ->docReqParam('setupKey', true)
        ->docReqReport('login');
        $this->setReturn('login',user::$systemAdmin);

        if (!user::$systemAdmin and request::isPost()) {

            $system = new m_system();
            $setupKey = request::getPostReqString('setupKey');
            $this->setReturn('login', $system->loginWithSetupKey($setupKey));
            $this->setReports('login', $system->getReports());
        }
        $this->done();
    }

    function downdate()
    {
        $this->access(user::$systemAdmin);
        $this->docAnyReq()
            ->docReqReturnBool('login')
            ->docReqReturnType('info','string');

        $this->docPostReq()
            ->docReqReturnBool('status');

        $this->setReturn('login', user::$admin);
        if (!user::$admin) {

            $this->setReports('Login', 'You need to login as admin to perform action');
        } elseif (request::isPost()) {

            $system = new m_system();
            $this->setReturn('downdate',$system->setup(0));
            $this->setReports('downdate',$system->getReports());
        }
        $this->done();
    }

    function logout()
    {
        $this->docAnyReq()->docReqReturnBool('logout');
        $this->setReturn('logout', true);
        $this->setReturn('logout', user::$admin);
        if (request::isPost()) {

            $m = new m_system();
            $this->setReturn('logout', $m->logout());
        }
        $this->done();
    }

}