<?php


namespace app\lib;


use app\config\app;

class error_logger
{



        static function json($error,$key=null,$value=null){

           $messageHash = hash('sha256',$error->getMessage());
           $fileCont = file_exists(app::jsonErrorFilename)? file_get_contents(app::jsonErrorFilename):'';
           $errorContArr = json_decode($fileCont,1)??[];

           if (empty($fileCont) || $errorContArr == null){

               $info= [
                   'message'=>$error->getMessage(),
                   'file'=>$error->getFile(),
                   'Line'=>$error->getLine(),
                   'time'=>time::getDateTime(),
                   'count' =>1,
                   'append'=>(empty($key)?'': [$key => $value])
               ];

           }else{

               $count = isset($errorContArr[$messageHash]['count'])? ($errorContArr[$messageHash]['count']+1):0;

               $info = [
                   'message'=>$error->getMessage(),
                   'file'=>$error->getFile(),
                   'Line'=>$error->getLine(),
                   'time'=>time::getDateTime(),
                   'count' => $count,
                   'append'=>[$key=>$value]
               ];


           }

           if (isset($errorContArr[$messageHash])){
               unset($errorContArr[$messageHash]);
           }

           $errorContArr[$messageHash] = $info;
           return  file_put_contents(app::jsonErrorFilename,json_encode($errorContArr));
       }

    }