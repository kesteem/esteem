<?php


namespace app\lib;


use app\config\config;

class director
{
  static function directTo($url,$agentType = "",$baseUrl = config::BASE_URL){

      if ($agentType =="json"){

          $urlObj = new url();
          $urlObj->run($url,$baseUrl);
          return $urlObj->getController();
      }return $url;
  }
}