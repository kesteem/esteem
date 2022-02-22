<?php

namespace app\web_view_components\template;

trait error
{


   static function report($info){

     return  isset($info['message'])?"<div style='color: #f01f7a; font-size: 0.8rem'>".$info['message']."</div>":'';
   }

}