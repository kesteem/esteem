<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\lib;

use app\config\config;
use app\core\app;
use app\object_model\obj;
use app\object_model\trait_obj;
use app\resources\cookies_names;
use app\resources\strings\en;
use app\traits\statics;
use function Exception;


/**
 * Description of cookies
 *
 * @author toshiha
 */
class cookie {



    static function setLoginCookie($id,$loggerId,$token,$logout = 0){
        $data = $id . $loggerId . $token.$logout;
        $hash = hmac::hash($data);
        $cookieData = $id . 'slbqpz'. $loggerId . 'slbqpz' . $token .'slbqpz'. $hash.'slbqpz'.$logout;

        return  cookie::setCookie(cookies_names::loginId, $cookieData, 99999999999);
    }

    static function geLoginCookie(){

       $cookie = self::getCookies(cookies_names::loginId);

       if (validator::isEmpty($cookie)) return[];
       $arr = explode('slbqpz',$cookie);
       $id = arrayV::string($arr,0);
        $loggerId = arrayV::string($arr,1);
        $token = arrayV::string($arr,2);
        $hash = arrayV::string($arr,3);
        $logout = arrayV::string($arr,4);

        if (hmac::verify($id.$loggerId.$token.$logout,$hash)){

            return [
                'userId'=>$id,
                'loggerId'=>$loggerId,
                'token'=>$token,
                'logout'=>$logout,
            ];
        }return [];
    }





   static public function getCookies($cookieName)
    {
        return isset($_COOKIE[$cookieName])? urldecode($_COOKIE[$cookieName]):'';
    }



   static public function clear($cookieName,$domain = appDomain)
    {
       return self::setCookie($cookieName,null,-9200000);
    }



   static public function setCookie($name, $value, $expireSeconds,$domain, $secure = 0, $path='/', $httpOnly = 1):bool
    {
          return setcookie($name, urlencode($value),time()+$expireSeconds, $path,\app\config\app::domain, $secure, $httpOnly);
    }


}
