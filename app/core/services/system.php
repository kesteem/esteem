<?php

namespace app\core\services;

use app\core\dispatcher;
use app\core\model\system\m_system;
use app\object\user;

class system
{
   static function handle(){

        $system = new m_system();
        if ($system->isLogin()){

            dispatcher::setUserData('systemAdmin',true);
            user::$systemAdmin = true;
        }else{

            user::$admin = false;
        }
    }
}