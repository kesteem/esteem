<?php

namespace app\web_view_components\forms;

use app\resources\urls;
use app\web_view_components\buttons\btn;
use app\web_view_components\inputs\input;
use app\web_view_components\link\tpl_lnk_ctx1;
use app\web_view_components\template\element;
use app\web_view_components\template\misc;

class tpl_login_form
{

    static function render($loginData = null){
        $element = new element();
        $email = $_POST['means']??'';
        $password = $_POST['password']??'';
        $meansFlag =  $loginData['means']['flag']??'';
        $class = $meansFlag==1?'error':'';
        $meansMessage = misc::error(($loginData['means']['message']??''),$meansFlag);
        $passwordMessage = misc::error(($loginData['password']['message']??''),($loginData['password']['flag']??''));
     return    
        
        $element->setElementName('form')
                ->setAttr("style='padding:5px;background:#fff' method='post'")
                ->create(
              
               misc::break(2).
                         input::input_cx2(
                             "Username Or Email",
                                '', 
                                $attr = 'placeholder="Username Or Email" name="means" value="'.$email.'"',
                             $meansMessage
                                )

                        . misc::break().
                        input::input_cx2("Password", '',
                            $attr = "placeholder='Enter Password' type='password' name='password' value='$password'",$passwordMessage
                                )

                        .$element::box('',
                        misc::break().
                                tpl_lnk_ctx1::render('', "href='".urls::forgotPassword."'", "Forgot Password")
                                )
                        . misc::break()
                                .$element::box('style="max-width: 200px"',
                                                btn::btnCtx2('', "Login",'name="login"')
                                        )
                        
                )
                ;
    }
}