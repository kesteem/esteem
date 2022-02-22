<?php

namespace app\core;

use app\config\app;
use app\lib\request;
use Exception;

class bootstrap
{



  static function settings(){
            
        ini_set('display_errors',app::errorDisplay);
        ini_set('display_startup_errors',app::errorDisplay);
        error_reporting(E_ALL);
        ini_set('display_errors',app::errorDisplay);
        ini_set('log_error',app::logError);
        ini_set('error_log',app::errorLog);   
    }

    static function appFile(){

    }
    static function url($baseUrl)
    {


        if(empty($baseUrl)){

            throw new Exception('App base url can not be empty, go to app/config/app.php to set the base url');
        }elseif(!filter_var($baseUrl,FILTER_VALIDATE_URL)){

            throw new Exception('App base url is invalid, e.g. http://example.com/hostInsubDir/ ');
        }
        $parseBaseUrl = parse_url($baseUrl);
        $baseUrlPath = isset($parseBaseUrl['path'])?trim($parseBaseUrl['path']):'';
        $baseUrlPath = empty($baseUrlPath)?'/':$baseUrlPath;
      
        if ($baseUrlPath !=='/'){

            $pathLen = strlen($baseUrlPath);
            ($baseUrlPath[$pathLen-1] =='/')?($baseUrlPath[$pathLen-1]= ' '):'';
            $baseUrlPath = trim($baseUrlPath);
            $hostDir = explode('/',$baseUrlPath)[1];
        }else{
        
            $hostDir = $baseUrlPath;
        }
   
// validate Host dir


if($hostDir !=='/' and !file_exists('..'.DIRECTORY_SEPARATOR.$hostDir)){

throw new Exception('Check app config and verify the base url');
}

        // req 
        $reqUrl = request::getURL();
        $parseUrl = parse_url($reqUrl);
        $reqPath = isset($parseUrl['path'])?trim($parseUrl['path']):'/';
        $reqPath = empty($reqPath)?'/':$reqPath;
        $arr = $pathParams = [];
        if($reqPath === '/'){
       
            $controller = '/';
            $action = 'index';
       } else{
    
            $pathLen = strlen($reqPath);
            ($reqPath[$pathLen-1] =='/')?($reqPath[$pathLen-1]= ' '):'';
            $reqPath = trim($reqPath);
        
            if($hostDir ==='/'){

                $arr = explode('/',$reqPath);
                $controller = $arr[1];
                $action = isset($arr[2])?$arr[2]:'index';
            }else{
            
        
                $arr = explode($hostDir,$reqPath);
               !isset($arr[1])? throw new \Exception(
"Verify the domain or the base url in 'app/config/app' if set to properly"
  ):'';
                $reqPath = trim($arr[1]);

                if(empty($reqPath)){

                    $controller ='/';
                    $action = 'index';
                }else{

                $arr = explode('/',$reqPath);
                $controller = isset($arr[1])?$arr[1]:'/';
                $action = isset($arr[2])? $arr[2]:'index';
              

                }
            }
       }

       unset($arr[0]);
       unset($arr[1]);
       unset($arr[2]);
       if(!empty($arr)){

        $pathParams = implode('/',$arr);
        $pathParams = explode('/',$pathParams);
       }
       request::setUrlController($controller);
       request::setUrlAction($action);
       request::setParam($pathParams);
    }


    function appAuth(){





    }




}