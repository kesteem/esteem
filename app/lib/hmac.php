<?php


namespace app\lib;


use app\config\config;
use Exception;

class hmac
{


    static function hash($data, string $keys = config::APP_KEYS[0], $append = '', $prepend =''):?string
    {
        try {

            return hash_hmac('sha256', $data, $prepend.$keys.$append);

        } catch (Exception $e) {

            error_log($e);
            return null;
        }
    }

    static function verify($data, $oldHash, $key = config::APP_KEYS[0], $append = '', $prepend =''): ?string
    {
        return ($oldHash === hash_hmac('sha256', $data, $prepend.$key.$append));
    }
}