<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\lib;
use Exception;

/**
 * Description of token
 *@name generateID
 * @param 
 * @author toshiha
 *
 */
class token {
    //put your code here
    

  static  function generateId($givenLen = 8){
      $str = "aqzwsxcderfvbgtyhnmjuiklop1234567890";
     $len = strlen($str);
     if ($givenLen > $len) throw new Exception('Given length must not exceed '.$len);
     $i = 0;
     $id = '';
     for (;$i < $givenLen; $i++){
         $index = rand(0,($len-1));
         $id .= $str[$index];

     }
     return $id;
    }


    
    public static function generateRandInt($min=10000,$max=999999)
    {
        return rand($min,$max);
    }
    
    static  function generateHash($len = ''){
      
        if($len =='')$len = 20;
      return substr(bin2hex(openssl_random_pseudo_bytes($len)),1,$len);    
    }

    static function generateTwoWayId($string,$string2){

        if (strtolower($string) == strtolower($string2)) return null;
        return sha1($string.$string2);
    }
    static function generateOneWayId($string,$string2){

        $string =strtolower($string);
        $string2 =strtolower($string2);
        if ($string == $string2) return null;
        $id = $string > $string2?$string.$string2:$string2.$string;
        return sha1($id);
    }

    static  function generateTimestampRandInt(){
        $time = time::getDateTime().token::generateRandInt(1274,9431);
        $timestamp1 = preg_replace('/-/','',$time);
        $timestamp2 = preg_replace('/:/','',$timestamp1);
      return  $timestamp3 = preg_replace('/ /','',$timestamp2);

    }



    
}
