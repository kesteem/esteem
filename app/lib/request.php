<?php

namespace app\lib;
use app\config\config;

class request{
    //put your code here


    static private $urlAction;
    static private $urlController;
    static private $urlParams;



    static function getCookie($cookieName){

        return htmlspecialchars(urldecode(arrayGet($_COOKIE,$cookieName)));
    }
  static  function setUrlAction($urlAction){

        self::$urlAction = $urlAction;

    }

    public static function setUrlController($urlController)
    {
        self::$urlController = $urlController;
    }

   static function setParam($params){
      self::$urlParams = $params;

    }

   static function getParams($index = ''){

      if (is_int($index) || !empty(trim($index))){

          return  isset(self::$urlParams[$index])?self::$urlParams[$index]:null;
      }
      return self::$urlParams;
    }

    public static function getUrlAction()
    {
        return self::$urlAction;
    }

    public static function getUrlController()
    {
        return self::$urlController;
    }


    static function get(){

        return $_GET;
    }


    static function post()
    {
        return $_POST;
    }


    static function getUseragent()
    {
        return $_SERVER['HTTP_USER_AGENT'];
    }



   static function getAcceptLang(): array {
        $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE']??null;
      $langDeli = explode(';',$lang);
      $langs = explode(',',$langDeli[0]);
      return $langs;
    }

    static function getHost()
    {
        return $_SERVER['HTTP_HOST'];
    } 

    static function getDomainName(){
       return $_SERVER['SERVER_NAME'];
    }

    static function getURI()
    {
        return $_SERVER['REQUEST_URI'];
    } 
    static function getScheme()
    {
        return array_v::string($_SERVER, 'REQUEST_SCHEME');
    } 
    static function redirect($url)
    {
        header("location:$url");
        exit;
    }

    static function redirectRef($url)
    {
        if (isset($_GET['ref'])) {
            $url = $_GET['ref'];
            header("location:$url");
        }
        die(header("location:$url"));
    }

   

    public static function getIp()
    {
        $ip = '';
        if(htmlspecialchars(isset($_SERVER['HTTP_CLIENT_IP'])))
        {
            $ip = htmlspecialchars($_SERVER['HTTP_CLIENT_IP']);
        }
        elseif(htmlspecialchars(isset($_SERVER['HTTP_X_FORWARD'])))
        {
            $ip = htmlspecialchars($_SERVER['HTTP_X_FORWARD']);
        }
        else
        {
            $ip = htmlspecialchars($_SERVER['REMOTE_ADDR']);
        }
        return $ip;
        
        
    }
   static function getURL(){

     return self::getScheme()."://".self::getHost().self::getURI();
    }

    function getHTTPPortNum(){
        return $_SERVER['SERVER_PORT'];
    }

  static  function isHTTPS(){
        if(!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS'] ==='on') || strtolower($_SERVER['HTTPS'] === 1) ) ){
            return true;
        }
    }


 static function isPost(){

        return strtoupper($_SERVER['REQUEST_METHOD']) === 'POST';
    }
    static function issetGet($name){
        return isset($_GET[$name]);
    }

   static function issetPost($name){
        return isset($_POST[$name]);
    }

    static function getRequestMethod(){

      return $_SERVER['REQUEST_METHOD'];
    }

    static function isGetRequest(){

        return strtoupper($_SERVER['REQUEST_METHOD']) === 'GET';

    }

    static function getGetReqVal($name,$raw = 0){

        return self::getReqVal('get',$name,$raw);
    }

    static function getPostReqVal($name,$raw = 0){

        return self::getReqVal('post',$name,$raw);
    }

    static function getPostReqInt($name,$raw = 0){

        $data =  self::getReqVal('post',$name,$raw);
        if ($data == 0)return (int) 0;
        if ((int)$data === 0 ) return null;
        return  (int) $data;

    }

    static function getPostReqBoolean($name,$raw = 0){

        $data =  self::getReqVal('post',$name,$raw);
        if ($data == 0)return (int) 0;
        if ((bool) $data == 0 ) return null;
        return  (bool) $data;

    }



    static function getPostReqFloat($name,$raw = 0):?float{

        $data =  self::getReqVal('post',$name,$raw);
        if ($data == 0)return  0;
        if ((float) $data == 0 ) return null;
        return  (float) $data;
    }

    static function getPostReqString($name,$raw = 0,$trim = true){
        $data1 =  self::getReqVal('post',$name,$raw);
       return   validator::isEmpty($data1)? null: ($trim? trim($data1):$data1);
    }


    static function getFile($fileName){

        return   isset($_FILES[$fileName])?$_FILES[$fileName]:null;
    }


   static function getReqVal($method,$name,$raw=0)
    {
        $return = null;
      if (strtoupper($method) === "GET" && isset($_GET[$name]) ) {

          $return = isset($_GET[$name])? $_GET[$name]: null ;
        } elseif (strtoupper($method) === "POST" && isset($_POST[$name]) ) {

          $return =  $_POST[$name];
        }elseif (strtoupper($method) === 'COOKIE' && isset($_COOKIE[$name]) ){

         $return  =  $_COOKIE[$name];
      }elseif (strtoupper($method) === 'FILES'){

          $return = isset($_FILES[$name])?$_FILES[$name]: null;
      }  return $raw?$return : htmlspecialchars($return);

    }

    
}
