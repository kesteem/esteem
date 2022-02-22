<?php


namespace app\lib;


class string_m
{


    static function ellipsisString(string $string, int $reqLen, $append = '...'){

          $stringLen = strlen($string);
          $reqLen = $reqLen - strlen($append);
        if ($stringLen < $reqLen){

            return $string;
        }else{

            $i = 0;
            $newString = null;
            for (;$i < $stringLen; $i++){
               $total =  ($i + 1);
                if ($total == $reqLen){

                    $newString .= $string[$i];
                    break;
                }
            $newString .= $string[$i];
            } return $newString.$append;
        }

    }


    static function ellipsisWord(string $string,int $numWords,$append = '...'){

        $arrOfWords = explode(' ',trim($string));

        $c = count($arrOfWords);
        $i = 0;
        $words = '';
        for (; $i < $c; $i++){

            if ($i === $numWords){
               $words .= ' '.$arrOfWords[$i];
               break;
            }
            $words.=$arrOfWords[$i];
        }
        return $arrOfWords.$append;
    }
}