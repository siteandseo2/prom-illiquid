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

        <link rel="stylesheet" href="<?= base_url(); ?>../../../css/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?= base_url(); ?>../../../css/jquery.fancybox.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?= base_url(); ?>../../../css/style.css">
        <link rel="stylesheet" href="<?= base_url(); ?>../../../css/responsive.css">
    </head>   
    <body class="no-bg">        
        <section id="page">              
            <header id="header" class="normal-header line-decoration">
                <!-- Top Bar -->
                <div id="top-bar" class="text-normal full-width-line clearfix">
                    <div class="wf-wrap">
                        <div class="wf-container-top">
                            <div class="wf-table">
                                <!-- Top bar conctacts icons -->
                                <div class="wf-td">
                                    <span class="mini-contacts email">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="top-bar-icon-text">isitinme88@gmail.com</span>
                                    </span>
                                    <span class="mini-contacts phone">
                                        <i class="fa fa-phone"></i>
                                        <span class="top-bar-icon-text">(095) 896 24 70</span>
                                    </span>
                                    <span class="mini-contacts skype">
                                        <i class="fa fa-skype"></i>
                                        <span class="top-bar-icon-text">alexander_punkk</span>
                                    </span>
                                </div>
                                <!-- Top bar conctacts icons End -->

                                <div class="right-block wf-td clearfix">
                                    <div class="mini-login">
                                        <a href="<?= base_url(); ?>login" class="submit">
                                            <i class="fa fa-sign-in"></i>
                                            <span class="top-bar-icon-text">Войти</span>
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
                                        <a href="<?= base_url(); ?>" title="Instagram" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                        <a href="<?= base_url(); ?>" title="Facebook" target="_blank">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="<?= base_url(); ?>" title="Twitter" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="<?= base_url(); ?>" title="Vk" target="_blank">
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

                <!-- Branding & Navigation -->
                <div class="wf-wrap clearfix">

                    <div id="branding" class="wf-td">
                        <a href="<?= base_url(); ?>default">
                            <img src="../../../img/logo-regular.png" alt="Logo">
                        </a>
                    </div>


                    <nav id="navigation" class="wf-td">
                        <!-- Mobile nav -->
                        <div id="dl-menu">
                            <a href="<?= base_url(); ?>" id="mobile-menu">
                                <div class="mobile-button">
                                    <span class="menu-open" style="display: inline;">Menu</span>
                                    <span class="menu-back">Back</span>
                                </div>
                            </a>
                            <div class="dl-container">
                                <ul class="dl-menu">
                                    <li class="act">
                                        <a href="<?= base_url(); ?>" onclick="return false;">
                                            <span class="dl-text">Home</span>
                                            <span class="dl-icon">
                                                <i class="fa fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(); ?>" onclick="return false;">
                                            <span class="dl-text">Pages</span>
                                            <span class="dl-icon">
                                                <i class="fa fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(); ?>" onclick="return false;">
                                            <span class="dl-text">Blog</span>
                                            <span class="dl-icon">
                                                <i class="fa fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(); ?>" onclick="return false;">
                                            <span class="dl-text">Portfolio</span>
                                            <span class="dl-icon">
                                                <i class="fa fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(); ?>" onclick="return false;">
                                            <span class="dl-text">Gallery</span>
                                            <span class="dl-icon">
                                                <i class="fa fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Main Nav -->
                        <ul id="main-nav" class="clearfix">
                            <li class="act no-link">
                                <a href="<?= base_url(); ?>" onclick="return false;" class="topItem">
                                    <span>
                                        Home
                                    </span>
                                </a>
                                <div class="sub-nav out-level">
                                    <ul>
                                        <li>
                                            <a href="<?= base_url(); ?>index.php" onclick="return false;">
                                                <span>1. Business</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>index.php" onclick="return false;">
                                                <span>2. Presentation</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>index.php" onclick="return false;">
                                                <span>3. Creative</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>index.php" onclick="return false;">
                                                <span>4. Photography</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="no-link">
                                <a href="<?= base_url(); ?>" onclick="return false;" class="topItem">
                                    <span>
                                        Pages
                                        <i class="underline"></i>
                                    </span>
                                </a>
                                <div class="sub-nav out-level">
                                    <ul>
                                        <li>
                                            <a href="<?= base_url(); ?>" onclick="return false;">
                                                <span>1. Business</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>" onclick="return false;">
                                                <span>2. Presentation</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>" onclick="return false;">
                                                <span>3. Creative</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>" onclick="return false;">
                                                <span>4. Photography</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="no-link">
                                <a href="<?= base_url(); ?>" onclick="return false;" class="topItem">
                                    <span>
                                        Blog
                                        <i class="underline"></i>
                                    </span>
                                </a>
                                <div class="sub-nav out-level">
                                    <ul>
                                        <li>
                                            <a href="<?= base_url(); ?>" onclick="return false;">
                                                <span>1. Business</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>" onclick="return false;">
                                                <span>2. Presentation</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>" onclick="return false;">
                                                <span>3. Creative</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>" onclick="return false;">
                                                <span>4. Photography</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="no-link">
                                <a href="<?= base_url(); ?>" onclick="return false;" class="topItem">
                                    <span>
                                        Portfolio
                                        <i class="underline"></i>
                                    </span>
                                </a>
                                <div class="sub-nav out-level">
                                    <ul>
                                        <li>
                                            <a href="<?= base_url(); ?>" onclick="return false;">
                                                <span>1. Business</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>" onclick="return false;">
                                                <span>2. Presentation</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>" onclick="return false;">
                                                <span>3. Creative</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>" onclick="return false;">
                                                <span>4. Photography</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="no-link">
                                <a href="<?= base_url(); ?>" onclick="return false;" class="topItem">
                                    <span>
                                        Gallery
                                        <i class="underline"></i>
                                    </span>
                                </a>
                                <div class="sub-nav out-level">
                                    <ul>
                                        <li>
                                            <a href="<?= base_url(); ?>" onclick="return false;">
                                                <span>1. Business</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>" onclick="return false;">
                                                <span>2. Presentation</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>" onclick="return false;">
                                                <span>3. Creative</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>" onclick="return false;">
                                                <span>4. Photography</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>

                </div>
                <!-- Branding & Navigation End -->

            </header>

            <!-- Header End -->
            