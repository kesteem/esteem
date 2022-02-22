<?php

namespace app\resources;


use app\config\app;

class urls
{

    const home = app::baseUrl,

        //SYSTEM
        system = self::home . 'system/',
        systemUpdate = self::home . 'system/update/',
        systemLogin = self::home . 'system/login/',
        systemLoginWithSetupKey = self::system.'loginWithSetupKey/',
        systemCreateUser = self::home . 'system/createUser/',
        systemAbout = self::home . 'system/about/',
        systemDeleteUser = self::home . 'system/deleteUser/',

        //ACCOUNT
        account = self::home . 'account/',
        login = self::account . 'login/',
        signup = self::account . 'signup/',
        createPassword = self::account.'createPassword/',
        forgotPassword = self::account . 'forgotPassword/',

        //INVESTMENT
        investment = self::home.'investment/',
        invest = self::home.'investment/invest/',
        investmentEdit = self::home.'investment/edit/',
        investmentPlans = self::home.'investment/plans/',
        investmentDelete = self::home.'investment/delete/',
        investmentCreatePlan = self::investment.'create',



        style = self::home . 'style/',
        styleTemplate = self::home . 'style/template.css',
        iconStyle = self::home . 'pub/icon_moon/style.css',
        linkStyle = self::style . 'links.css/?type="text/css',
        mainCss = self::style . 'main.css/?contentType=text/css',
        inputStyle = self::style . 'inputs.css/?contentType="text/css',
        btnStyle = self::style . 'btns.css/?type="text/css',

        favicon = app::icon,
        //Static
        statics = self::home . 'statics/',
        icon = self::statics . 'icon/',
        staticStyle = self::statics . 'style/',
        //Admin
        admin = self::home . 'admin/',
        adminLogin = self::admin . 'login/',
        adminLogout = self::admin . 'logout/',
        adminSignUp = self::admin . 'signup/',


        image = urls::home . 'image/',

        //LoginData
        loginData = self::home . 'form/',
        loginDataDelete = self::loginData . 'delete',


        settings = self::home . 'settings/',
        help = self::home . 'help/';



}