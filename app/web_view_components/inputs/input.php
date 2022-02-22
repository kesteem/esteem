<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\web_view_components\inputs;

class input {
  
    
    static function input_cx1($labelName,$class,$attr) {
        
        return ""
        . "<label><div style='padding:5px 7px; text-align:center;"
                . " display: inline-block; margin: 5px 0; "
                . "font-size: 12px; background:#000; color:#fff'>$labelName</div><br/>"
                . "<input type='text' class='input_cx1 $class' $attr>"
                . "</label>";
        
    }

    static function input_cx2($labelName,$class,$attr,$append="") {
        
        $labelName = empty($labelName)?'':"<div class='cx2LabelName'>$labelName</div>";
        return "<label class='cx2Label'>"
                . $labelName
                . "<input  class='input_cx2 $class' $attr>
                  $append                 
                </label>";
        
    }
    
    
    
}
