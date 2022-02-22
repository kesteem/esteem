<?php

namespace app\controllers\error;

use app\controllers\account\c_account;
use app\core\controller;
use app\lib\request;

class pc_error extends controller
{

static $called = false;
  function  handle($errorTitle,$errorDescription,$httpStatusCode,  $others=[]){

      if (self::$called){

          (http_response_code($httpStatusCode));
          die;
      }

      self::$called = true;
      $this->setHtmlView(v_error::class,'index');
      $controller = trim(request::getUrlController());
      if (!empty($controller) and $controller[0] === '@'){

          $accountController = new c_account();
          $accountController->profile();
          exit;

      }else{

          $this->setRequest('title',$errorTitle);
          $this->setRequest('description',(string) $errorDescription);
          $this->setRequest('httpStatusCode',$httpStatusCode);
      }
      $this->done($httpStatusCode);
}

}