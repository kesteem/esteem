<?php


namespace app\lib;


class age_calc
{

    static function calc(int $year,$mon,$day){

        if ($year < 1940){
            return false;
        }elseif ($year > time::getYear()){
            return  false;
        }elseif ($mon > 12){
            return  false;
        }elseif ($mon < 1){
            return  false;
        }elseif ($day >  31  or $day < 1 ){
            return  false;
        }
        return date_diff(date_create("$day-$mon-$year"),date_create('now'))->y;
    }
}