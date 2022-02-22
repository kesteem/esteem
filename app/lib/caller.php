<?php


namespace app\lib;


use Exception;

class caller
{

    static function callMethod($className,$methodName,$params=[]){

        if (class_exists($className)){
            $obj = new $className;
            if(method_exists($obj,$methodName)){

                return call_user_func_array([$obj,$methodName],$params);
            }else{
                throw new Exception('Class not found');
            }
        }else{
            throw new Exception('Class not found');
        }
    }
}