<?php


namespace app\core;


use app\controllers\error\pc_error;
use app\controllers\error\v_error;
use app\lib\request;
use app\object\user;
use app\resources\response_code;

class controller extends dispatcher
{


    static $dynamic = false;
    private $docRequestType;


    protected function access($hasAccess){

        if (!$hasAccess){

           $error = new pc_error();
           $error->handle("Access Denial",'Unauthorize access',403);
           $this->done(403);
        }

    }



    protected function onlyLogin(){



        if (!user::$isLogin) {

            $this->setReports('info', 'You are not login');
            $this->done();
        }
    }

    function onlySystemAdmin(){

        if (!user::$systemAdmin) {

            $this->setReports('info', 'Page not found');
            $this->done(404);
        }
    }

    protected function onlyAdmin(){

        if (!user::$admin) {

            $this->setReports('info', 'Admin only');
            $this->done(404);
        }
    }

    protected function onlyGuest(){

        if (user::$isLogin) {
            $this->setReports('info', 'Page not found');
            $this->done(404);
        }
    }

    function docAnyReq($description='',$requestType='*')
    {
        $this->docRequestType = strtoupper(trim($requestType));
        empty($this->docRequestType) ? ($this->docRequestType = '*') : '';
        self::$dispactData['doc'][$this->docRequestType]
            =['description'=> $description];
        return $this;
    }

    function docPostReq($description='')
    {
        return $this->docAnyReq($description,'post');
    }

    function docGetReq($description='')
    {
        return $this->docAnyReq($description,'get');
    }


    function docReqParam($name, $required, $info = '', $type = '', $requestType = '')
    {
        $requestType = empty($requestType) ? $this->docRequestType : strtoupper($requestType);
        $data = [];
        empty(trim($info)) ?: ($data['info'] = $info);
        empty(trim($type)) ?: ($data['type'] = $type);
        $data['name'] = $name;
        $data['required'] = $required;
        self::$dispactData['doc'][$requestType]['param'][]
            = $data;
        return $this;

    }

    function docReqReturnType($name , $dataType, $info = '', $requestType = '')
    {


        $requestType = trim($requestType);
        empty(trim($info)) ? '' : ($data['info'] = $info);
        $data[$name] = $dataType;
        $requestType = empty(($requestType)) ? $this->docRequestType : strtoupper($requestType);
        self::$dispactData['doc'][$requestType]['returns'][] = $data;
        return $this;
    }


    function docReqReport($name)
    {
       self::$dispactData['doc']['report'][]=$name;
    }

    function docReqReturnArr($name , $info = '', $requestType = '')
    {
      return  $this->docReqReturnType($name , 'array/json', $info, $requestType);
    }

    function docReqReturnInt($name , $info = '', $requestType = '')
    {
        $this->docReqReturnType($name , 'int', $info, $requestType);
    }

    function docReqReturnBool($name , $info = '', $requestType = '')
    {
       return $this->docReqReturnType($name , 'boolean', $info, $requestType);
    }
    function docReqReturnString($name , $info = '')
    {
        return $this->docReqReturnType($name , 'boolean', $info, 'string');
    }


    function done($httpResCode = 200)
    {

        $this->endProcess($httpResCode);
    }

}
