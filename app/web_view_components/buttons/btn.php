<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\web_view_components\buttons;

/**
 * Description of btn
 *
 * @author HP US
 */
class btn {
    
    
    
    static function btnCtx1($class,$value,$attr ='') {
        
        return "<button class='btnCtx1' $attr>$value</button>";
    }
    
    
     static function btnCtx2($class,$value,$attr) {
        
        return "<button class='btnCtx2 $class' $attr>$value</button>";
    }
    
    
}
