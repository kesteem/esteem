<?php

namespace app\web_view_components\template;

use app\config\app;
use app\config\config;

class web_link
{

   static function render(){

        $appIcon = app::icon;
      
        $baseUrl = \app\core\app::getConfig('baseUrl');
        return "<a href='$baseUrl'>
             <img src='".$appIcon."' style='width: 50px'>
</a>";
    }
}