<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\core;

use app\config\web;
use app\lib\request;

/**
 * Description of web_view
 *
 * @author HP US
 */
class web_view  extends dispatcher{
  
    protected $title;
    protected $headContent;
    protected $bodyAttr;

    function setTitle($title){

        $this->title = $title;
        return $this;
    }


    function setBodyAttr($attr){
        $this->bodyAttr = $attr;
        return $this;
    }

    function setTohead($headContent){

        $this->headContent = $headContent;
    return $this;
    }



function renderWeb( $bodyContent) {


$important = isset(web::absoluteUrl['*'])?web::absoluteUrl['*']:'';
$controller = isset(web::absoluteUrl[strtolower(request::getUrlController())])?web::absoluteUrl[strtolower(request::getUrlController())]:'';
if (!empty($important)){

    $important = implode(' ',$important);
}
    $toAction = $toAllAction = '';
if (!empty($controller)){
$action = request::getUrlAction();
 $toAllAction = isset($controller['*'])?$controller['*']:'';
 $toAllAction = implode(' ',$toAllAction);
 $toAction =   isset($controller[$action])? implode(' ',$controller[$action]):'';
}

$heaContent = $this->headContent;
$title = $this->title;
$bodyAttr = $this->bodyAttr;
$cont = "<!DOCTYPE html>
 <html>    
<head>
$important
$toAllAction
$toAction
<title>$title</title>
$heaContent
</head>
<body $bodyAttr>
$bodyContent
".
    $this->popUp()
    . "
</body>
</html>";
return  $cont;
    }



     function popUp(){

       $pop = self::$dispactData['pop']??'';
      if (empty($pop)) return ;
      $text = $pop['text']??'';
      $url = $pop['url']??'';
      $urlName = $pop['urlName']??'';
      $flag = $pop['flag']??'';
      $cancelable = $pop['cancelable']??true;
      $iconClass = $flag?'icn-warning':'icn-checkmark';
      $color = $flag?'red':'green';
      $cancelable = $cancelable?
          "<div id='popxress12' class='icn icn-cross' style='padding: 7px; 
position: absolute; top: 0; right: 0;
display: inline-block'>
<script>document.getElementById('popxress12').onclick = function (){
    document.getElementById('popFrmergne232').style.display = 'none';
}

</script></div>"
          :'';

      return "<div id='popFrmergne232' style='
background: rgba(0,0,0,0.5);
 position: fixed;
  top: 0;
   left: 0;
    right: 0;
     bottom: 0;
      z-index: 4'>


<div style='position: absolute;
border-radius: 5px;
        left: 50%;
         top: 50%;
        text-align: center;
    transform: translate(-50%,-90%); background: #fff;
     width: 80%; max-width: 500px; padding: 10px'>
$cancelable
<div class='icn $iconClass' 
style='font-size: 40px;color: $color; display: inline-block; padding: 10px;
 background: #ccc; border-radius: 50%;'></div>

<div style='padding: 20px 0'>$text</div>

<a href='$url' style='text-decoration: none; color: #0aa0ff; padding: 5px 20px; border: solid 1px #0aa0ff; border-radius: 5px'>
    $urlName
</a>
</div>





</div>";
die;
    }


}
