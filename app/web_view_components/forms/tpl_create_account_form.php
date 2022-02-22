<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\web_view_components\forms;

use app\web_view_components\buttons\btn;
use app\web_view_components\inputs\input;
use app\web_view_components\link\tpl_lnk_ctx1;
use app\web_view_components\template\element;
use app\web_view_components\template\misc;

/**
 * Description of tpl_create_account_form
 *
 * @author HP US
 */
class tpl_create_account_form {
   
    
    static function render($createAcountData = null) {
        

$element = new element();
        return 
  

                $element->setElementName('form')
                ->setAttr("method='post' style='width:500px; border-radius:7px; margin: auto; padding:50px;'")
                ->create(
                    $element::box('style="text-align:center; font-weight:bold; font-size: 30px"',"Create Account")
                    .$element::box('style="text-align:center; padding:7px;color:#808080; font-size: 16px"',"Already have an account? ".
                                        tpl_lnk_ctx1::render('','','Login')
                            )
                            . misc::break(2)
                     . input::input_cx2('Username','', "")
                             . misc::break()
                     . input::input_cx2('Name','', "")
                      . misc::break()
                     . input::input_cx2('Email','', "")
                        . misc::break()
                     . btn::btnCtx2('', "Sign Up",'')
                     . misc::break(2)
                        .$element::box('', "I have read and agreed to ". tpl_lnk_ctx1::render('', '', "Term of Services"))
                );


    }
    
    
    
}
