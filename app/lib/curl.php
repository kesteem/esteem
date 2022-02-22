<?php


namespace app\lib;


class curl
{

    private $info;
    private $result;
    private $contentType;
    private $contentSize;
    private $HTTPCode;
    private $curlInfo;

    function fetch($url){

        if(!filter_var($url,FILTER_VALIDATE_URL)){

            return false;
        }
        $ch = curl_init();
        $options = array(
            CURLOPT_URL=>$url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36',
        );
        curl_setopt_array($ch,$options);

        $return = curl_exec($ch);
        $this->HTTPCode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
        $this->contentType = curl_getinfo($ch,CURLINFO_CONTENT_TYPE);
        $this->contentSize = curl_getinfo($ch,CURLINFO_CONTENT_LENGTH_DOWNLOAD);
        $this->curlInfo = curl_getinfo($ch);
        curl_close($ch);
        $this->result = $return;
        return true;
    }

    function getResult(){
        return $this->result;
    }


    function getContentType(){
        return $this->contentType;
    }

    function getContentSize(){
       return $this->contentSize;
    }

    function getHTTPCode(){
        return $this->HTTPCode;
    }

    function getCurlInfo($index =''){

        if(empty($index)){

            return $this->curlInfo;
        }else{

         return   isset($this->curlInfo[$index])?$this->curlInfo[$index]:'';
        }
    }

    function getInfo(){
        return $this->info;
    }
}