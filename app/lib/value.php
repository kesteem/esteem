<?php


namespace app\lib;


class value
{

    static function int($val):?int{

        if ($val=== 0){


        }elseif (strlen($val) < 1){
            return null;
        }else{
            $val= (int)$val;
        }
        return $val;
    }

    static function float($val):?float{

        if ($val == 0){
            $val =  (float)$val;
        }elseif ((float)$val == 0){

            return null;
        }
        return $val;
    }

    static function bool($val):?string{

      return ($val == null)? null:(bool) $val;
    }

    static function string($val):?string{

        $val = $val==null? null:(string) $val;
        return $val;
    }


    static function array(?array $val):?array{

        $val = $val==null? null:(array) $val;
        return $val;
    }


    static function getObject(?object $val):?object{

        $val = $val==null? null:(object) $val;
        return $val;
    }

}