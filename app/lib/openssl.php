<?php


namespace app\lib;

use app\config\config;
use Exception;

class openssl
{
    private static $separator = '{}';
    private static $method = 'aes-256-ctr';


 static  function encrypt($data, $key = config::APP_KEYS[0], $append = '', $prepend =''): ?string{

       $encryption_key = base64_decode($prepend.$key.$append); //ctr
       $iv =openssl_random_pseudo_bytes(openssl_cipher_iv_length(self::$method));
       $encrypted = openssl_encrypt( (string)$data, self::$method, $encryption_key, 0, $iv);
     return base64_encode($encrypted.self::$separator.base64_encode($iv));
    }

static function decrypt($encryptData, $key=config::APP_KEYS[0], $append='', $prepend = ''): ?string {

    try {

        $encryption_key = base64_decode($prepend.$key.$append);
        list($encryption_data,$iv) = array_pad(explode(self::$separator, base64_decode($encryptData),2), 2, NULL);
        return @openssl_decrypt($encryption_data, self::$method, $encryption_key, 0, base64_decode($iv));
    }catch (Exception $e){

        error_log($e->getMessage().$e->getTraceAsString());
        return null;
    }
}

}

