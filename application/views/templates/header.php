<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Главная</title>
        <meta name="description" content="Центральный украинский ресурс по купле / продаже неликвидов">
        <meta name="keywords" content="Неликвиды, купля, продажа">
        <meta name="author" content="SITE&SEO">        
        <link href="<?= base_url(); ?>../../../css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url(); ?>../../../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url(); ?>../../../css/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url(); ?>../../../css/load_animation.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url(); ?>../../../css/jquery_scrollbar.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" href="<?= base_url(); ?>../../../css/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?= base_url(); ?>../../../css/jquery.fancybox.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?= base_url(); ?>../../../css/style.css">
        <link rel="stylesheet" href="<?= base_url(); ?>../../../css/responsive.css">

        <!--[if IE]>
                <style>
                        .tabs-buttons li:hover:not(.activeTab) a {
                                color: rgb(5, 75, 171);
                                background: transparent;
                        }
                </style>
        <![endif]-->

       <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    </head>   
    <body>        
        <section id="page">              
            <header id="header" class="normal-header line-decoration">
                <!-- Top Bar -->
                <div id="top-bar" class="text-normal full-width-line clearfix">
                    <div class="wf-wrap">
                        <div class="wf-container-top">
                            <div class="wf-table">
                                <!-- Top bar conctacts icons -->
                                <div class="wf-td">
                                    <span class="mini-contacts">
                                        <a href="<?= base_url(); ?>" class="top-bar-icon-text">О нас</a>
                                    </span>
                                    <span class="mini-contacts">
                                        <a href="<?= base_url(); ?>" class="top-bar-icon-text">Наши контакты</a>
                                    </span>
                                </div>
                                <!-- Top bar conctacts icons End -->

                                <div class="right-block wf-td clearfix">
                                    <div class="mini-login">
                                        <a href="#" class="submit" data-toggle="modal" data-target="#modalCart" id="topBarCartLink"> 
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="top-bar-icon-text">Корзина</span>
                                            <span class="num badge" id="cart-amount"></span>
                                        </a>
                                    </div>
                                    <div class="mini-login">
                                        <a href="<?= base_url(); ?>login" class="submit">
                                            <i class="fa fa-sign-in"></i>
                                            <span class="top-bar-icon-text">Вoйти</span>
                                        </a>
                                    </div>

                                    <div class="mini-login">
                                        <a href="<?= base_url(); ?>registration" class="submit">
                                            <i class="fa fa-pencil"></i>
                                            <span class="top-bar-icon-text">Зарегистрироваться</span>
                                        </a>
                                    </div>
                                    <!-- Social -->
                                    <div class="soc-ico clearfix">
                                        <a href="<?= $inst_link ?>" title="Instagram" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                        <a href="<?= $fb_link ?>" title="Facebook" target="_blank">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="<?= $tw_link ?>" title="Twitter" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="<?= $vk_link ?>" title="Vk" target="_blank">
                                            <i class="fa fa-vk"></i>
                                        </a>
                                    </div>
                                    <!-- Social End -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <span class="top-bar-arrow">
                    <span>
                        <i class="fa fa-angle-down"></i>
                    </span>
                </span>

                <!-- Top Bar End -->

                <!-- Branding & Search -->
                <div class="headHome wf-wrap clearfix">

                    <!-- Branding -->
                    <div id="branding" class="wf-td">
                        <a href="<?= base_url(); ?>default">
                            <img src="../../../img/logo-regular.png" alt="Logo">
                        </a>
                    </div>

                    <!-- Search -->
                    <form action="<?= base_url(); ?>search" method="POST">
                        <div id="searching" class="clearfix">

                            <div class="search-inner clearfix">
                                <input type="text" placeholder="Я ХОЧУ КУПИТЬ" name="name" class="search-input" autofocus>

                                <div class="btn-group s-butt">

                                    <button type="button" class="btn btn-default search-block-button" id="location-select-button">
                                        <span class="searching-title">Вся Украина</span>
                                        <input type="hidden" name="certainCity" value="Вся Украина">
                                        <span class="search-select-icon" title="Искать по городам Украины">
                                            <i class="fa fa-angle-down"></i>
                                        </span>
                                    </button>

                                    <div class="sub-nav searching-dropdown"> 
                                        <input type="text" placeholder="Введите название города" name="searchCityName">
                                        <ul class="scrollbar-inner"></ul>
                                    </div>

                                    <button type="submit" class="btn btn-default search-block-button" name="search" id="buy-search-button">
                                        <span>Поиск</span>
                                        <span class="search-select-icon">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </button>

                                </div>
                            </div>

                            <div class="search-inner clearfix">
                                <div class="s-butt">
                                    <button type="button" class="btn btn-default search-block-button" value="SELL" id="sell-search-button">
                                        <span class="btn-text">Я хочу продать</span>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
                    <!-- Search End --> 

                </div>

            </header>

            <!-- Header End -->
