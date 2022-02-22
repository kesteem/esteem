<?php

namespace app\web_view_components\template;

class form_container{


 static function center($form)
 { 
 

        return 
        element::box(
        'style="width:80%; max-width: 500px; margin: auto"',
        $form
        );
 }


}