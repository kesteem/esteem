<?php


namespace app\lib;


class trace
{
static function run($data = 0, $die = 1){

    echo '<pre>';
    print_r($data).
    print_r(debug_backtrace());
    echo '</pre>';
    if ($die) die;
}
}