<?php


namespace app\lib;


class sanitise
{
    static function username($username){

        $username = trim($username);
        if (empty($username)) return $username;
        if($username[0] === '@'){
            return  $username;
        }else{
         return  '@'.$username;
        }
    }
    static function fullName($fullName){

     return   trim(preg_replace("@\s{2,}@",' ',$fullName));
    }
}