<?php


namespace app\controllers\home;

use app\core\web_view;
use app\web_view_components\template\header;
use app\web_view_components\template\templates;

class v_home  extends web_view
{

 function index(){



 echo $this->setBodyAttr('style="margin:0"; class="icn home"')
 ->renderWeb(
"<div>


<div style='text-align:center; font-weight:bolder; 
font-size: 35px;
transform: translate(-50%,-50%);
position:absolute;
left:50%;
 top:50%'>
 Esteem 1.0
 <div style='color:#0aa0ff; font-weight:lighter;margin:10px 0; font-size: 18px;'>Fast, secure, dynamic...</div>
 
 </div>
</div>"   

 );

}


}