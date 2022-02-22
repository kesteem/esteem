<?php

namespace app\lib;

class mailer
{



  static  function sendHtml($to,$from,$subject,$replyTo,$msg){


        $header = "MIME-Version:1.0"." \r\n";
        $header .= "Content-type:text/html;charset=utf-8"." \r\n";
        $header .="From:$from"." \r\n";
        $header.="Reply-To:$replyTo"." \r\n";
      return  mail($to,$subject,$msg,$header);
    }


    function send($to,$subject, $message,$header =null){

       return mail($to,$subject,$message, $header);
    }
}