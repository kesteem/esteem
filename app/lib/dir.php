<?php


namespace app\lib;


class dir
{

    static function redifine($dirname){

      return preg_replace('@[\\\\/]@',DIRECTORY_SEPARATOR,$dirname);

}
}