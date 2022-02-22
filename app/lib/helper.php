<?php


namespace app\lib;


use app\database\mongodb\keys;
use app\resources\urls;

class helper
{


 static function fixProfileImage80x80($userDataFromProfile){

       $newProfileName =  $userDataFromProfile[keys::profilePhotoName]??'';
       if(empty($newProfileName)) return $userDataFromProfile;
        $userDataFromProfile[keys::profilePhotoName] =urls::profileImage80X80.$newProfileName;
        return  $userDataFromProfile;
 }

    static function hideProfileEmail($profileUserData){
        $email = $profileUserData[keys::email]??'';
        if ($email =='') return null;
       $profileUserData[keys::email] = email_hider::hide($email);

       return $profileUserData;
 }

    static function getMIMEExt($mime)
    {
        if ($mime == '') return;
        return explode('/', $mime)[1];
    }

    static function makeDirectory($dir, $permission = 764)
    {

        if (file_exists($dir)) return true;
        return mkdir($dir, $permission, 1);
    }


    static function getfilenameExt($filename)
    {
        $arr = explode('.',$filename);
        return empty($arr)?"":end($arr);
    }



    static function getFile($filename)
    {

        if (is_file($filename) and file_exists($filename)) {
            return file_get_contents($filename);
        }
        return null;
    }

    static function deleteFile($filename)
    {
        if (is_file($filename) and file_exists($filename)) {

            unlink($filename);
        }
    }


  static function getLastStr(?string $string){
     if (empty($string)) return '';
     $strLen = strlen($string);
     return $string[$strLen-1];
    }



    static function keyValue($string,$keySeparator=":",$keyValueSeparator=","): ?array{

     $value = trim($string);
     if (empty($value)) return null;

     $keyValues = explode($keyValueSeparator,$value);


     $data = [];
     foreach ($keyValues as $keyValue){

         if (empty($keyValue)) continue;
         $arr = explode($keySeparator,$keyValue);
         if (empty($arr)) continue;
         $data[$arr[0]] = $arr[1];
     }
        return  $data;
    }


    static function saveFile($dir, $name, $cont, $permission = 764): bool
    {

        $lstCha = $dir[strlen($dir) - 1];
        if (validator::isEmpty($dir)) return false;
        $filename = $dir . ($lstCha == '/' || $lstCha == '\\\\' ? '' : DIRECTORY_SEPARATOR) . $name;
        if (file_exists($dir)) {

            file_put_contents($filename, $cont);
        } else {

            if (mkdir($dir, $permission, 1)) {

                return file_put_contents($filename, $cont);
            }
            return false;
        }
        return true;
    }

}