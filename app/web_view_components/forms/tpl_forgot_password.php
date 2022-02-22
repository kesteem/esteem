<?php  
namespace app\web_view_components\forms;

use app\web_view_components\buttons\btn;
use app\web_view_components\inputs\input;
use app\web_view_components\template\element;
use app\web_view_components\template\misc;

class tpl_forgot_password{


    static function render(){

        $element = new element();
     return
          
        $element->setElementName('form')
            ->create(

                input::input_cx2("Email or Username", '',$attr = "placeholder='username or email'"
                )
                . misc::break()
                .$element::box('style="max-width: 200px"',
                    btn::btnCtx2('', "Continue",'')
                )

            );



    }


}