<?php


namespace app\core;

use app\lib\request;
use Exception;

class dispatcher extends request
{

    static $dispactData = [],
        $viewMethod,
        $viewFile,
        $htmlViewClass,
        $renderJson = false;

    function setKey($key, $value)
    {
        self::$dispactData[$key] = $value;
        return $this;
    }

    static function setUserData($name,$value){

        self::$dispactData['user'][$name] = $value;
    }

    function getDoc()
    {
        return isset(self::$dispactData['doc']) ? self::$dispactData['doc'] : '';
    }

    function setReturn($name, $data)
    {
        self::$dispactData['returns'][$name] = $data;
        return $this;
    }

    function setReports($name, $data)
    {
        self::$dispactData['infos'][$name] = $data;
        return $this;
    }


    function getReportMessage($report){

       return isset(self::$dispactData['infos'][$report]['message'])?self::$dispactData['infos'][$report]['message']:'';
    }

    function getReportFlag($report){

        return isset(self::$dispactData['infos'][$report]['flag'])?self::$dispactData['infos'][$report]['flag']:'';
    }

    function getReports($index = '')
    {
        if (!empty(trim($index))) {

            return isset(self::$dispactData['infos'][$index]) ? self::$dispactData['infos'][$index] : null;
        }
        return isset(self::$dispactData['infos']) ? self::$dispactData['infos'] : null;
    }

    function printDoc()
    {
        printPrev($this->getDoc());
    }

    function printReturns()
    {
        printPrev($this->getReturns());
    }

    function printReports()
    {
        printPrev($this->getReports());
    }
    function getReturns($name = '')
    {

        if (!empty(trim($name))) {

            return isset(self::$dispactData['returns'][$name]) ? self::$dispactData['returns'][$name] : null;
        }

        return isset(self::$dispactData['returns']) ? self::$dispactData['returns'] : null;
    }

    function setViewFile($filename)
    {
        self::$viewFile = $filename;

    }

    function setHtmlView($viewClassName, $method)
    {
        self::$viewMethod = $method;
        self::$htmlViewClass = $viewClassName;
        return $this;
    }

    static function set($key, $data)
    {

        self::$dispactData[$key] = $data;
    }

    static function setRequest($title, $value)
    {

        self::$dispactData['request'][$title] = $value;

    }

    function endProcess($httpResponseCode)
    {

        if (isset($_GET['doc'])) {

            self::$dispactData['doc'] = controller::getDoc();
        }
        http_response_code($httpResponseCode);
        $requestHeader = apache_request_headers();
        $accept = $requestHeader["accept"] ?? $requestHeader["Accept"] ?? $requestHeader["ACCEPT"] ?? "";
        ob_start();

        $noViewSet =( empty(self::$viewFile) and empty(self::$htmlViewClass));

        if ($noViewSet and preg_match("/application\/json/", strtolower($accept)) || self::$renderJson) {
            $data = json_encode(self::$dispactData);
            header('content-type: application/json');
            echo $data;
        } else {

            $this->callView();
        }
        ob_flush();
        ob_clean();
        exit();
    }


    function callView()
    {
        $viewClass = self::$htmlViewClass;
        $viewMethod = self::$viewMethod;

        if (!empty(self::$viewFile)){

            if (!file_exists(self::$viewFile)) throw new \Exception('View file not found; Filename: "'.self::$viewFile.'"');
            $cont = file_get_contents(self::$viewFile);
            echo $cont;
        }elseif (!class_exists(self::$htmlViewClass)) {

            throw new Exception('Html view class"'.self::$htmlViewClass.'"not found');
        } else if (!method_exists(new self::$htmlViewClass, $viewMethod)) {

            throw new Exception('Html view class method "' . $viewMethod . '" not found');
        }else{
            call_user_func_array([new $viewClass, $viewMethod], []);
        }

    }


    function getData($value = '')
    {
        if (empty($value)) {

            return self::$dispactData;
        }
        return self::$dispactData[$value] ?? null;
    }
}