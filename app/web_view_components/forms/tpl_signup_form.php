<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\web_view_components\forms;

use app\web_view_components\buttons\btn;
use app\web_view_components\inputs\input;
use app\web_view_components\template\element;
use app\web_view_components\template\misc;


class tpl_signup_form {
  
    
    
    
    static function render($signUpData) {
        
      $element = new element();
  
        $email = $_POST['email']??'';
  return      $element->setElementName('form')
                ->setAttr("style='padding:5px;background:#fff' method='post'")
                ->create(
              
                
                        input::input_cx2("Email", '',$attr = "placeholder='Email' name='email' value='$email'"
                                ).
                        misc::break()
                                .$element::box('style="max-width: 180px"',
                                                btn::btnCtx2('', "Continue",'name="__find"')
                                        )
                        
                )
                ;        
        
    }
}
