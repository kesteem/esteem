<?php

namespace app\core;

use app\config\setup as ConfigSetup;
use app\lib\token;

class setup
{
    private
        $infoForUpdate,
        $infoInit,
        $inforForEnd;

    function setInfoForUpdate($obj,$info,$flag){

        $this->infoForUpdate[$obj] = ['flag'=>$flag,'info'=>$info];
    }

    public function getInfoForUpdate(){

        return $this->infoForUpdate;
    }

    public function setInfoInit($obj,$info,$flag){

        $this->infoInit[$obj] = ['flag'=>$flag,'info'=>$info];
    }

    public function getInfoInit()
    {
        return $this->infoInit;
    }


    function iinitUpdate(){
        $hash = token::generateHash(20);
        $dire = "app".DIRECTORY_SEPARATOR.'.update';
        file_put_contents($dire, $hash);
        return $this;
    }

function update($updateToken){

    $dire = "app".DIRECTORY_SEPARATOR.'.update';
    $cont = file_get_contents($dire);
    if($updateToken !== $cont){

        return false;
    }

    $updates = ConfigSetup::update;
    
    if(empty($updates)){


        return true;
    }

 foreach($updates as $update){

        $obj = new $updates();
        $obj->update();
 }
        return true;
}






}