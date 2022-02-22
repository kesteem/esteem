<?php


function printPrev($data){

    echo "<pre style='font-size: 11px'>";
    print_r($data);
    echo "</pre>";
}
function dnd($data= 'here'){

    printPrev($data);
    die;
}
function arrayGet($data,$index,$ifTrue = true,$dafault=null){

    if (!$ifTrue) return $dafault;
   return isset($data[$index])?$data[$index]:$dafault;
}


function emailHide($email)
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