<?php


namespace app\lib;


class array_v
{

    static $data;

    public static function setData($data): void
    {
        self::$data = $data;
    }
    static function unset(){
        self::$data = null;
    }

   static function filterKeyValue(array $array, $keyName){

            $list = [];
        foreach ($array as $value){
            $valueToList = $value[$keyName]??'';
            if (empty($valueToList)) continue;
            array_push($list,$valueToList);
        }
        return $list;
    }

  static  function getIndex($index){

        return self::$data[$index]??null;
    }



   static function val($array, $index, $defaultValue = null){

       if (is_object($array) || is_array($array) || is_string($array)){

            return isset($array[$index])?$array[$index]:$defaultValue;
    }
       return $defaultValue;

   }



    static function string($array, $index, $defaultValue = null){

        if (is_array($array) || is_string($array)){
            return isset($array[$index])? (string) $array[$index]:$defaultValue;
        }
        return $defaultValue;

    }



    static function int($array, $index, $defaultValue = null){

        if (is_array($array) || is_string($array)){

            $val = isset($array[$index])? $array[$index]:$defaultValue;
           return  value::int($val);
        }
        return $defaultValue;

    }



    static function float($array, $index, $defaultValue = null){

        if (is_array($array) || is_string($array)){

            return isset($array[$index])? (float) $array[$index]:$defaultValue;
        }
        return $defaultValue;
    }

}