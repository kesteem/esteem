<?php

namespace app\config;

use app\services\s_request;
use app\services\s_user;

class services
{


    const

    controller =[

        //Global services
        '*'=>[
        
        ],

         //Controller services
      '/'=>[

         //Controller global services
                  '*'=>[],
            //Controller actions global services
                  'index'=>[],
      ],
    ];
}