<?php

namespace app\web_view_components\lib;



use app\web_view_components\template\templates;

class renderer
{

   static function investmentPlan($investmentPlans){


       $contents = '';
        if (empty($investmentPlans)){

            dnd('no investment plan');
        }else{


        foreach ($investmentPlans as $investmentPlan){

            $contents .= templates::investmentPlan($investmentPlan);
        }
        return $contents;
        }



    }


}