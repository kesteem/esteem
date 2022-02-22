<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\lib;

/**
 * Description of time
 *
 * @author toshiha
 */
class time {
    //put your code here


   static function getDateTime(){
        return date('Y-m-d H:i:s');
    }

    static function getYear(){
        return date('Y');
    }
    static function getDate(){
        return date('Y-m-d');
    }
    static function getTime(){
        return date('h:i:s');
    }


    static function timeAgo(int $times,$includeAgo = true){

    $td =    time()  - $times;
    if ($td < 60) return $td.'s';
    if ( $td > 59 and $td < 3600) return round(($td/60 )).'m'.($includeAgo?' ago':'');
        if ( $td > 59 and $td < 86400) return round($td/3600 ).'h'.($includeAgo?' ago':'');
        if ( $td > 59 and $td < 2592000) return round($td/86400 ).'d'.($includeAgo?' ago':'');

    }
}
