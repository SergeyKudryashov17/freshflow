<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?></title>

    <style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
            z-index: 1000;
        }
        #loader {
            display: block;
            position: relative;
            left: 50%;
            top: 50%;
            width: 150px;
            height: 150px;
            margin: -75px 0 0 -75px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #9370DB;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }
        #loader:before {
            content: "";
            position: absolute;
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 5px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #BA55D3;
            -webkit-animation: spin 3s linear infinite;
            animation: spin 3s linear infinite;
        }
        #loader:after {
            content: "";
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #FF00FF;
            -webkit-animation: spin 1.5s linear infinite;
            animation: spin 1.5s linear infinite;
        }
        @-webkit-keyframes spin {
            0%   {
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes spin {
            0%   {
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <?php wp_head(); ?>
</head>
<body>
<div id="preloader">
    <div id="loader"></div>
</div>
<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7 col-10 logo">
                <a href="#onePage">
                    <img src="<?php echo get_field('logo_site') ?>" alt="Логотип" class="logo_header">
                    <img src="<?php echo get_field('name_company') ?>" alt="Название" class="logo_text">
                </a>
                <a class="phone" href="tel:<?php echo get_field('num_phone'); ?>">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <?php echo get_field('num_phone'); ?>
                </a>
            </div>
            <div class="col-md-6 col-sm-5 col-2">
                <div class="menu">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <ul>
                        <li class="lang_ver"><a href="#">EN</a></li>
                        <li><a href="#twoPage">Эко-Кальян</a></li>
                        <li><a href="#threePage">Преимущества</a></li>
                        <li><a href="#fivePage">Услуги</a></li>
                        <li><a href="#sixPage">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-sm-block col-sm-12 d-none">
                <div class="sm-menu">
                    <ul>
                        <li class="lang_ver"><a href="#">EN</a></li>
                        <li><a href="#twoPage">Эко-Кальян</a></li>
                        <li><a href="#threePage">Преимущества</a></li>
                        <li><a href="#fivePage">Услуги</a></li>
                        <li><a href="#sixPage">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="d-lg-none d-md-none d-sm-none col-12">
        <div class="xs-menu">
            <ul>
                <li class="lang_ver"><a href="#">EN</a></li>
                <li><a href="#twoPage">Эко-Кальян</a></li>
                <li><a href="#threePage">Преимущества</a></li>
                <li><a href="#fivePage">Услуги</a></li>
                <li><a href="#sixPage">Контакты</a></li>
            </ul>
        </div>
    </div>
</div>