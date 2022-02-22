<?php


namespace app\lib;


class email_hider
{

    static function hide($email)
    {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        $c = strlen($email);
        $i = 2;
        $matchAt = false;
        for (; $i <= $c; $i++) {

            if ( $email[$i] == '@'){
                $matchAt = true;
                continue;
            }elseif ($matchAt && $email[$i] =='.') {
                break;
            }                $email[$i]  = '*';
        }
            return $email;
    }



}