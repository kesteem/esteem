<?php

namespace app\config;

class app
{
    const  name = 'appName',
        httpsOnly = false,
        domain = 'localhost',
        baseUrl ='http://'.self::domain.'/esteem/',
        icon = self::baseUrl.'icon.png',
        enableJsonErrorLog = true,
        logError = false,
        deve = true,
        emailEnable = false,
        errorLog = 'log.txt',
        errorDisplay = true,
        jsonErrorFilename = 'logs.json';
}