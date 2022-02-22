<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\web_view_components\link;

/**
 * Description of tpl_lnk_ctx1
 *
 * @author HP US
 */
class tpl_lnk_ctx1 {
    
    
    static function render($class,$attr,$cont) {
        
        return "<a class='lnk_ctx1' $attr>$cont</a>";
        
    }



    static function blockIconAndName($iconName, $linkname) {
        
        return "<a class='llc1'>
                    <span class='$iconName llc1Icon' ></span>
                    <span class='llc1Name'>$linkname</span>
                    <span class='icn icn-chevron-right llc1ArrRight'></span>
        </a>";
        
    }


    
}
