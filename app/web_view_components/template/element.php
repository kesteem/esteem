<?php

namespace app\web_view_components\template;

class element
{
    private
        $elementName = 'div',
        $elementAttr;

    function setAttr($attr){
        
        $this->elementAttr = $attr;
        return $this;
    }

    function setElementName($elementName){
        $this->elementName = $elementName;
        return $this;
    }

    function createSelfElement(){

        return "<".$this->elementName.' '.$this->elementAttr.' />';
    }

    function create($cont){

        return "<".$this->elementName.' '.$this->elementAttr.' />'.$cont."</".$this->elementName.'>';
    }


    static function render($cont, $attr ='',$elem = 'div',$single = false){


        if ($single) {

            return "<$elem $attr>";
        }return "<$elem $attr>$cont</$elem>";
    }
    static function closing($name,$attr,$con){

        return"<$name $attr>$con<$name/>";
    }
    static function single($name,$attr=null){

        return"<$name $attr/>";
    }

    static function box($attr,$con,$boxName='div'){

        return"<$boxName $attr>$con</$boxName>";
    }

    static function inlineBox($attr,$con){

        return"<span $attr>$con</span>";
    }
}