<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\web_view_components\template;

/**
 * Description of misc
 *
 * @author HP US
 */
class misc {
  
    
    static function break($numOfBreak = 1) {
         
       return str_repeat("<br/>", $numOfBreak);  
    }
    
    
    static function marginBox($margin = '2px'){
        return "<div style='margin:$margin'></div>";
    }

    static function error($text,$flag,$attr = ''){

        $className = $flag?' redColor ':' greenColor ';
        if (empty($text)){

            return null;
        }return "<div class='$className' $attr>$text</div>";
    }




}
