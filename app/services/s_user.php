<?php


namespace app\services;



use app\core\dispatcher;
use app\model\account\m_account;
use app\model\logger\m_logger;
use app\object\user;

class s_user extends dispatcher
{

     function handle(){

         user::$admin = user::$systemAdmin;
         $logger = new m_logger();
         $logger->isLogin(new user());
         $account = new m_account();
         self::setUserData('id',user::$id);
         self::setUserData('isLogin',user::$isLogin);
         $account->initUserData(new user());
         self::setUserData('name',user::$name);
         self::setUserData('username',user::$username);
    }

}





