<?php

namespace app\controllers\error;

use app\core\web_view;
use app\resources\urls;

class v_error extends web_view
{

    function index(){

        $requestData = $this->getData('request')??[];
        $title = $requestData['title']??'Unknown error';
        $description = $requestData['description']??'Unknown error error occurred';
        $statusCode= $requestData['httpStatusCode']??'___';
        $others = $requestData['others']??'Unknown error';
        $home = urls::home;
        $back = "<a  href='$home'
style='display: block;color: #fff; padding: 5px 10px; border-radius: 7px;
 background-color: #0aa0ff'>Home</a>";
echo $this->setTitle($title)->renderWeb(


    "<div style='position: absolute;text-align: center; top: 50%; left: 50%; transform: translate(-50%, -50%)'>
    
    <div style='padding: 12px; font-size: 70px; font-weight: bolder'>$statusCode</div>
    <div style='padding: 5px 10px;font-weight: bold '>$title</div> 
    <div>$description</div>
    <br>
    $back
    
   
    
</div>
    "
);



    }


}