<?php


namespace app\lib;


class formatter
{


    static function numberToCurrency($number,$type = 'int'){

        $number  = (int) $number;

        if ($number < 1000){
            return $number;
        }
        $numberToString = (string) $number;
        $numberLen = strlen($numberToString);
        $i = $numberLen - 1;
        $r = 1;
        $cont = '';
        for (; $i >= 0; $i--){

            $cont .= $numberToString[$i];
            if ($r == 3 and $i !=0){

                $cont .= ',';
                $r = 1;
            }else{
                ++$r;
            }
        }  return strrev($cont);





    }



}