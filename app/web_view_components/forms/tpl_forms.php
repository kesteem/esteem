<?php

namespace app\web_view_components\forms;

use app\lib\array_v;
use app\web_view_components\buttons\btn;
use app\web_view_components\inputs\input;
use app\web_view_components\template\form_container;
use app\web_view_components\template\misc;
use app\web_view_components\template\templates;

class tpl_forms
{



  static  function adminSignup($infos = ''){

      $username = array_v::string($_POST,'username');
      $email = array_v::string($_POST,'email');
      $setUpKey = array_v::string($_POST,'setupKey');
      $password = array_v::string($_POST,'password');
        return form_container::center(
            "<form method='post' style='background-color: #fff; padding: 5px;'>".
            templates::info($infos,'info').
            input::input_cx2('Setup Key','',"placeholder=\"get setup key from app/setup.txt\" name=\"setupKey\" required value=\"$setUpKey\"",templates::inputInfo($infos,'setupKey')).
            input::input_cx2('username','',"name=\"username\" required value=\"$username\"",templates::inputInfo($infos,'username')).
            input::input_cx2('email','',"name=\"email\" required value=\"$email\"",templates::inputInfo($infos,'email')).
            input::input_cx2('password','',"name=\"password\" type=\"password\" required value=\"$password\"",templates::inputInfo($infos,'password')).
            misc::break().
            btn::btnCtx2('','Login','type="submit"').
            "</form>"
        );
    }




  static  function adminLogin($infos){

        $means = array_v::string($_POST,'means');
        $password = array_v::string($_POST,'password');
        return form_container::center(
            "<form method='post' style='background-color: #fff; padding: 5px;'>".
            templates::info($infos,'info').
            input::input_cx2('Username or Email','',"placeholder=\"Username or email\" name=\"means\" required value=\"$means\"",templates::inputInfo($infos,'means')).
            input::input_cx2('password','',"name=\"password\" type=\"password\" required value=\"$password\"",templates::inputInfo($infos,'password')).
            misc::break().
            btn::btnCtx2('','Login','type="submit"').
            "</form>"
        );

    }



}