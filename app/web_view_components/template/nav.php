<?php

namespace app\web_view_components\template;

use app\web_view_components\link\tpl_lnk_ctx1;

class nav{



static function list(){

    $element = new element();
return   $element->setElementName('nav')
->setAttr('id="navList"')
->create(
    tpl_lnk_ctx1::blockIconAndName('icn icn-home','home')
   . tpl_lnk_ctx1::blockIconAndName('icn icn-settings','Settings')
  );
}








}