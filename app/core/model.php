<?php

namespace app\core;

use app\object\pdo;

class model
{
    protected $flag = false;
    protected $info = [];
    protected  $tableName;
    protected $pdoToBroker;

    public function __construct()
    {
        $this->pdoToBroker = new pdo();
    }

    public function getTableName(){


        return $this->tableName;
    }

    protected function setReport($name, $info, $flag, $value=''){

        $this->flag = (bool) $flag;
       $data = ['message'=>$info,'flag'=>$flag];
        empty(trim($value))?'':($data['value']=$value);
        $this->info[$name] = $data;
    }

    protected function setUnflagInfo($name,$info,$value,$flag=0){
        $this->setReport($name,$info,1,$value);
    }

    protected function setFlagInfo($name,$info,$value,$flag=1){
        $this->setReport($name,$info,1,$value);
    }

    public function getReports()
    {
        return $this->info;
    }

    function isFlag(){
       return $this->flag;
    }

    public function setTableName($dbName,$tableName){

        $this->tableName = "$dbName.$tableName";
    }
}