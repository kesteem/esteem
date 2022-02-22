<?php


namespace app\config;

use app\resources\urls;

class web
{

    const web_main_layout_width = '650px';

   const absoluteUrl = [

    '*'=>[
       '<meta name="viewport" content="width=device-width initial-scale=1">',
        '<link rel="icon" href="'. app::icon.'" type="image/favi">',
        '<link rel="stylesheet" href="'. urls::mainCss.'" type="text/css">',
          '<link rel="stylesheet" href="'. urls::inputStyle.'" type="text/css">',
         '<link rel="stylesheet" href="'. urls::iconStyle.'" type="text/css">',
         '<link rel="stylesheet" href="'. urls::linkStyle.'" type="text/css">',
         '<link rel="stylesheet" href="'. urls::btnStyle.'" type="text/css">'
        ]
    ];



}