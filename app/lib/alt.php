<?php


namespace app\lib;


use app\ui_control\info;

class alt
{
 static  function isEmpty($value,$alt,$trim = true){

       $newValue = $trim? trim($value) :$value;
       return (empty($newValue))? $alt: $value;
   }

    static  function isSame($val1,$val2,$trueVal,$falseVal = false){

       return $val1 == $val2? $trueVal :$falseVal;
    }

}