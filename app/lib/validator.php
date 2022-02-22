<?php

namespace app\lib;

use app\config\config;
use Exception;

class validator
{

     static $info = '';

    public static function getInfo()
    {
        return self::$info;
    }
    static function isStringSameIns($string1,$string2){

        return  strtolower($string1) === strtolower($string2);

    }


    static function fullName($name, $minLen = 2, $maxLen = 25, $title ='Name'){

        self::$info = '';
        $len = strlen($name );
        if ($len > $maxLen|| $len < $minLen){
            self::$info = "$title must be between $minLen to $maxLen characters or less ";
        }else{
            return true;
        }return  false;
    }


    static function distance(?int $distance,$title ='Distance'){

        if ($distance > config::max_distance){

            self::setStaticInfo("$title too long max limit is ".config::max_distance.'Km');
        }elseif ($distance < config::min_distance){

            self::setStaticInfo("$title too short min limit is ".config::min_distance.'Km');
        }else{
            return true;
        }return  false;
    }



    static function date($date)
    {
        self::$info = null;
      $arr =  explode('-',$date);
        self::$info =  "Invalid date format e.g Month-Day-Year | 12-25-1970";
        if (empty($date)){
            return  false;
        }
        $m = arrayGet($arr,0);
        $d = arrayGet($arr,1);
        $y = arrayGet($arr,2);
        if (!checkdate($m,$d,$y)){

            return  false;
        }
        self::$info ='';
        return  true;
    }


    static function float($title, $float, $min, $max)
    {
        self::$staticInfo = null;
        if (!is_float($title)) {
            throw new Exception("$title not float");
        } elseif ($float > $max) {
            self::setStaticInfo("$title is too big, max required is $max");
        } elseif ($float < $min) {
            self::setStaticInfo("$title is too smail, min required is $min");
        } else {
            return true;
        }
        return false;
    }

    static function int($title, ?int $int, ?int $min, ?int $max)
    {
        self::$staticInfo = null;
        if ($int > $max) {

            self::setStaticInfo("$title is too big, max required is $max");
        } elseif ($int < $min) {

            self::setStaticInfo("$title is too smail, min required is $min");
        } else {
            return true;
        }
        return false;

    }

    static function string($title, ?string $string, $maxLen, $minLen, $trim = true)
    {
        self::$staticInfo = null;
        $value = $trim ? trim($string) : $string;
        $stringLen = strlen($value);

        if ($maxLen !== null and $stringLen > $maxLen) {

            self::setStaticInfo($title . ' is too long ' . $maxLen.' characters allowed');
        } elseif ($minLen !== null and $stringLen < $minLen) {

            self::setStaticInfo($title . ' is shorter than ' . $minLen.' characters allowed');
        } else {
            self::setStaticInfo($title . ' is valid ');
            return true;
        }
        return false;
    }

   static  function username($username, $maxLen = 15, $minLen = 3,$title = 'Username')
    {

        self::$info = null;
         if (empty($username)) {

             self::$info = "$title not given";
             return false;
         }

         if ($username[0] ==='@'){
             $username[0] = ' ';
             $username = trim($username);
         }
         $len = strlen($username);
         if ($len < $minLen || $len > $maxLen){

             self::$info = "$title is between $minLen to $maxLen characters or less than $maxLen";
         } elseif (preg_match("/\W/", $username)) {

            self::$info = "Invalid character in " . $title;
        } else {
            return true;
        }return false;
    }


    static function isAnyEmpty(...$data):bool
    {
        foreach ($data as $datum){
            if (empty($datum)){
                return  true;
            }
        }
    return    false;
    }


    static function isEmpty($data, $zeroIsEmpty = true, $trim = true)
    {

        if ($data === null) {
            return true;
        } elseif ($zeroIsEmpty and $data == 0) {
            return false;
        } elseif (is_array($data)) {

            return empty($data);
        } else {

            $data = (string)$data;
            if ($trim){
                return  strlen(trim($data)) < 1;
            }
            return (strlen(trim($data)) < 1);
        }

    }

    static function password($value, $maxLen = 256, $minLen = 8)
    {
        self::$info ='';
        if (!empty($maxLen) && strlen($value) > $maxLen) {

            self::$info = 'Password too long, maximum character is ' . $maxLen;
        } elseif (!empty($minLen) && strlen($value) < $minLen) {

            self::$info ='Password too short, minimum character is ' . $minLen ;
        } elseif (!preg_match("/\D/", $value)) {

            self::$info ='Add letters to password';
        } else {

            self::$info ='Password is valid ';
            return true;
        }
        return false;
    }

    static function phoneNum(?string $phoneNumber, $title = 'Phone Number')
    {

        if ($phoneNumber === null) return false;
        if (!self::string($title, $phoneNumber, 20, 10)) {

            return false;
        } else {

            $arr = explode('+', $phoneNumber);
            $number = arrayV::val($arr, 1);
            echo $c = count($arr);

            if ($c > 2 || $c < 1) {
                self::setStaticInfo('Invalid internation dialing code format');
            } elseif (validator::isEmpty($number)) {

                self::setStaticInfo(' Enter a valid phone number with international dialling code');
            } elseif (preg_match('/\D/', $number)) {

                self::setStaticInfo('Invalid phone number, remove none digit character');
            } else {
                return true;
            }
        }
        return false;
    }

}
