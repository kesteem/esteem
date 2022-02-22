<?php


namespace app\controllers\home;


use app\core\controller;

class c_home extends controller
{

    function index(){

        $this->setHtmlView(v_home::class,'index');
        $this->done();
    }
}