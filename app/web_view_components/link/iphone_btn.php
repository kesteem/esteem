<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\web_view_components\link;

/**
 * Description of iphone_btn
 *
 * @author HP US
 */
class iphone_btn {
   
   static function render($backgroundColor = '#000', $color = "#fff", array $hrefs = [],array $ids = [],array $titles = [], $activeId = '',$width = '100px')
    {

        $borderRadius = '5px';
        $padding = '5px 20px';

        $activeStyle = "color:$backgroundColor; background-color: $color;";
        $nonActiveStyle = "color:$color; background-color: $backgroundColor;";

        $firstElemStyle = "border-radius: $borderRadius 0 0 $borderRadius;";
        $childrenStyle = "display: inline-block;  min-width: $width; padding: $padding; text-align: center; text-decoration:none;";
        $lastElement = " border-radius: 0 $borderRadius $borderRadius 0;";


        $c = count($hrefs);
        $i = 0;
        $elem = '';
        for (; $i < $c; $i++) {

            $href = $hrefs[$i];
            $title = $titles[$i];
            $id = $ids[$i];
            $styleAttr = $childrenStyle;

            if ($id == $activeId) {
                $styleAttr .= $activeStyle;
            }else{
                $styleAttr .=$nonActiveStyle;
            }
            if ($i == 0) {
                $styleAttr .= $firstElemStyle;
            } elseif ($c == ($i + 1)) {
                $styleAttr .= $lastElement;
            }
            $elem .= "<a id='$id' href='$href' style='$styleAttr'>$title</a>";
        }


        return "
<div style='border:solid 1px $backgroundColor; border-radius: 5px; padding: -1px;"
                . " display: inline-block; background-color: $color'>$elem
</div>";


    }
    
}
