<?php

spl_autoload_register();

use app\controllers\error\pc_error;
use app\core\app;
use app\lib\request;

try {

    try {

        include_once 'app/core/functions.php';

        $arr = explode('/', $_SERVER['PHP_SELF']);
        $filename1 = end($arr);
        $filename = implode('/', $arr);
        $path = preg_replace('@' . $filename1 . '@', '', $filename);
        $domainName = request::getScheme().'://'. request::getDomainName();
        $baseUrl = $domainName .$path;
        $errorType = $errorMessage = '';
        $app = new app();
        $app->run($baseUrl);
        exit;
    } catch (Error $error) {

        $errorType = 'Error';
        $errorMessage = $error;
    }

} catch (Exception $exception) {

    $errorType = 'Exception';
    $errorMessage = $exception;

}

try {

    if (\app\config\app::logError) error_log($errorMessage);
    $errorType = empty(trim($errorType)) ? (\app\config\app::errorDisplay ? $errorType : 'Unknown error') : 'Unknown error';
    $errorController = new pc_error();
    $errorController->handle($errorType, $errorMessage, 500, []);

} catch (Exception $exception) {

    http_response_code(500);
    die((\app\config\app::errorDisplay ? $exception : ''));
}
