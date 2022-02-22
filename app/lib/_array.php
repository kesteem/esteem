<?php


namespace app\lib;


class _array
{

    static function toString(array $array){

        $json = json_encode($array);

        $r = preg_replace('/\":\"/','"=>"',$json);
        $r = preg_replace('/\{"/','["',$r);
        $r = preg_replace('/\"}/','"]',$r);
        $r = preg_replace('/\",/','",',$r);

      return $r;
    }



}