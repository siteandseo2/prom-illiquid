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
    <body class="no-bg home-cabinet">        
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
                                        <a href="<?= base_url(); ?>cabinet" class="submit">
                                            <i class="fa fa-sign-in"></i>
                                            <span class="top-bar-icon-text"><?= $user['surname']; ?>  <?= $user['name']; ?></span>
                                        </a>
                                    </div>

                                    <div class="mini-login">
                                        <a href="#" class="submit">
                                            <form action="<?= base_url(); ?>exit_user" method="POST">
                                                <i class="fa fa-pencil"></i><input onfocus="this.blur();" type="submit" id="exit" name="logout" value="Выйти" class="top-bar-icon-text subm" >
                                            </form>                                
                                        </a>
                                    </div>
                                    <!-- Social -->
                                    <div class="soc-ico clearfix">
                                        <a href="#" title="Instagram" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                        <a href="#" title="Facebook" target="_blank">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#" title="Twitter" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" title="Vk" target="_blank">
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
                        <a href="<?= base_url(); ?>">
                            <img src="../../../img/logo-regular.png" alt="Logo">
                        </a>
                    </div>

                    <div id="cabinet-title">
                        <span class="cabinet-icon">
                            <i class="fa fa-briefcase"></i>
                        </span>
                        <span class="cabinet-name">
                            <h3>Кабинет компании</h3>
                            <h4>
                                <?= $user['company']; ?>
                            </h4>
                        </span>
                    </div>

                    <div class="yoursId">
                        <h5>Ваш id: </h5>
                        <span>
                            <?php
                            $id = $user['id'];
                            if (strlen($id) < 8) {
                                for ($i = 0; $i < 8 - strlen($id); $i++) {
                                    echo 0;
                                }
                            }
                            echo $id;
                            ?>
                        </span>
                    </div>
                    <div class="entrance">
                        <h5>Вы вошли как: </h5>
                        <span><?= $user['usercat'] ?></span>
                    </div>


                    <!-- Search -->
                    <div id="searching" class="clearfix">

                        <div class="search-inner clearfix">
                            <input type="text" placeholder="Я ХОЧУ КУПИТЬ" class="search-input" autofocus>

                            <div class="btn-group s-butt">
                                <button type="button" class="btn btn-default search-block-button" id="location-select-button">
                                    <span class="btn-text">Вся Украина</span>
                                    <span class="search-select-icon">
                                        <i class="fa fa-angle-down"></i>
                                    </span>

                                    <div class="sub-nav">
                                        <input type="text" placeholder="Введите название города" name="searchCityName">
                                        <ul></ul>
                                    </div>
                                </button>

                                <a href="#" title="Искать на сайте">
                                    <button type="button" class="btn btn-default search-block-button" value="BUY" id="buy-search-button">
                                        <span class="btn-text">Поиск</span>
                                        <span class="search-select-icon">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </button>
                                </a>
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
                    <!-- Search End --> 
                </div>
                <div class="row">


                    <!-- Cabinet Navigation -->

                    <nav id="cabinet-navigation">
                        <ul id="main-nav" class="clearfix">                           
                            <?php
                            foreach ($menu as $item => $arr) {
                                ?>
                                <li>
                                    <a href="<?= base_url(); ?>" onclick="return false;" class="topItem">
                                        <span><?= $item ?></span>
                                    </a>
                                    <div class="sub-nav out-level">
                                        <ul>
                                            <?php
                                            foreach ($arr as $id => $array) {
                                                if ($id == $arr['0']) {
                                                    foreach ($array as $sub => $mass) {
                                                        if (count($mass) > 1) {
                                                            ?>
                                                            <li class="downItem">
                                                                <a href="<?= base_url(); ?><?=$sub?>" onclick="return false;" class="clearfix">
                                                                    <span class="cabinet-nav-text"><?= $mass['0'] ?></span>
                                                                    <span class="cabinet-nav-icon">
                                                                        <i class="fa fa-angle-right"></i>
                                                                    </span>
                                                                </a>
                                                                <div class="sub-nav inn-level">
                                                                    <ul>
                                                                        <?php
                                                                        foreach ($mass as $k => $v) {
                                                                            if (is_array($v)) {
                                                                                foreach ($v as $key => $zn) {
                                                                                    ?>
                                                                                    <li>
                                                                                        <a href="<?= base_url(); ?><?=$key?>">
                                                                                            <span><?= $zn ?></span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <?php
                                                                                }
                                                                            }
                                                                        }
                                                                        ?>                                                                        
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <?php
                                                        } else {
                                                            ?>                                           
                                                            <li>
                                                                <a href="<?= base_url(); ?><?=$sub?>" class="clearfix">
                                                                    <span class="cabinet-nav-text"><?= $mass['0'] ?></span>
                                                                </a>
                                                            </li>                                                            
                                                            <?php
                                                        }
                                                    }
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
<!--                                <a href="<?= base_url(); ?>" onclick="return false;" class="topItem">
                                <span>Мой кабинет</span>
                            </a>
                            <div class="sub-nav out-level">
                                <ul>
                                    <li>
                                        <a href="<?= base_url(); ?>cabinet" class="clearfix">
                                            <span class="cabinet-nav-text">Главная</span>
                                        </a>
                                    </li>
                                    <li class="downItem">
                                        <a href="<?= base_url(); ?>default" onclick="return false;" class="clearfix">
                                            <span class="cabinet-nav-text">Персональные данные</span>
                                            <span class="cabinet-nav-icon">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                        </a>
                                        <div class="sub-nav inn-level">
                                            <ul>
                                                <li>
                                                    <a href="<?= base_url(); ?>account">
                                                        <span>Персональные данные</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Информация о компании</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Логин и пароль</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Удаление учетной записи</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="downItem">
                                        <a href="<?= base_url(); ?>default" onclick="return false;" class="clearfix">
                                            <span class="cabinet-nav-text">Настройки доступа</span>
                                            <span class="cabinet-nav-icon">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                        </a>
                                        <div class="sub-nav inn-level">
                                            <ul>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Управление пользователями</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Логин и пароль</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="downItem">
                                        <a href="<?= base_url(); ?>default" onclick="return false;" class="clearfix">
                                            <span class="cabinet-nav-text">Информация о компании</span>
                                            <span class="cabinet-nav-icon">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                        </a>
                                        <div class="sub-nav inn-level">
                                            <ul>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Название компании, логотип, описание, адрес</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Специализации</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Адрес</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Компания на карте города</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Дополнительная информация о компании</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="<?= base_url(); ?>default" onclick="return false;">
                                            <span>Бонусы и рейтинги</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="<?= base_url(); ?>" onclick="return false;" class="topItem">
                                <span>Товары и услуги</span>
                            </a>
                            <div class="sub-nav out-level">
                                <ul>
                                    <li class="downItem">
                                        <a href="<?= base_url(); ?>default" onclick="return false;" class="clearfix">
                                            <span class="cabinet-nav-text">Управление товарами</span>
                                            <span class="cabinet-nav-icon">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                        </a>
                                        <div class="sub-nav inn-level">
                                            <ul>
                                                <li>
                                                    <a href="<?= base_url(); ?>add_product">
                                                        <span>Добавить позицию</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Управление товарами и группами</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(); ?>default" onclick="return false;">
                                            <span>Витрина</span>
                                        </a>
                                    </li>
                                    <li class="downItem">
                                        <a href="<?= base_url(); ?>default" onclick="return false;" class="clearfix">
                                            <span class="cabinet-nav-text">Импорт</span>
                                            <span class="cabinet-nav-icon">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                        </a>
                                        <div class="sub-nav inn-level">
                                            <ul>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Импорт товаров и услуг</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Синхронизация с 1 С</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Текущие импортируемые файлы</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Отчет по импорту</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(); ?>default" onclick="return false;">
                                            <span>Прайсы</span>
                                        </a>
                                    </li>
                                    <li class="downItem">
                                        <a href="<?= base_url(); ?>default" onclick="return false;" class="clearfix">
                                            <span class="cabinet-nav-text">Тендеры</span>
                                            <span class="cabinet-nav-icon">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                        </a>
                                        <div class="sub-nav inn-level">
                                            <ul>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Управление тендерами</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Поиск тендеров</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Управление подписками на тендеры</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(); ?>default" onclick="return false;">
                                            <span>Менеджеры групп</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="<?= base_url(); ?>" onclick="return false;" class="topItem">
                                <span>Заказы</span>
                            </a>
                            <div class="sub-nav out-level">
                                <ul>
                                    <li>
                                        <a href="<?= base_url(); ?>default" onclick="return false;">
                                            <span>Сообщения</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(); ?>default" onclick="return false;">
                                            <span>Клиенты</span>
                                        </a>
                                    </li>
                                    <li class="downItem">
                                        <a href="<?= base_url(); ?>default" onclick="return false;" class="clearfix">
                                            <span class="cabinet-nav-text">Экспорт</span>
                                            <span class="cabinet-nav-icon">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                        </a>
                                        <div class="sub-nav inn-level">
                                            <ul>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Экспорт в XML</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Экспорт в XLS</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Описание формата</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="downItem">
                                        <a href="<?= base_url(); ?>default" onclick="return false;" class="clearfix">
                                            <span class="cabinet-nav-text">Настройка заказов</span>
                                            <span class="cabinet-nav-icon">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                        </a>
                                        <div class="sub-nav inn-level">
                                            <ul>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Управление заказами и сообщениями</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Менеджеры групп товаров</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Почта для заказов и сообщений</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="<?= base_url(); ?>" onclick="return false;" class="topItem">
                                <span>Рассылка</span>
                            </a>
                            <div class="sub-nav out-level">
                                <ul>
                                    <li>
                                        <a href="<?= base_url(); ?>default" onclick="return false;">
                                            <span>Business</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(); ?>default" onclick="return false;">
                                            <span>Presentation</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(); ?>default" onclick="return false;">
                                            <span>Creative</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(); ?>default" onclick="return false;">
                                            <span>Photography</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="<?= base_url(); ?>" onclick="return false;" class="topItem">
                                <span>Настройки</span>
                            </a>
                            <div class="sub-nav out-level">
                                <ul>
                                    <li class="downItem">
                                        <a href="<?= base_url(); ?>default" onclick="return false;" class="clearfix">
                                            <span class="cabinet-nav-text">Настройка заказов</span>
                                            <span class="cabinet-nav-icon">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                        </a>
                                        <div class="sub-nav inn-level">
                                            <ul>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Управление заказами и сообщениями</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Менеджеры групп товаров</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>">
                                                        <span>Почта для заказов и сообщений</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="downItem">
                                        <a href="<?= base_url(); ?>default" onclick="return false;" class="clearfix">
                                            <span class="cabinet-nav-text">Настройка доступа</span>
                                            <span class="cabinet-nav-icon">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                            <div class="sub-nav inn-level">
                                                <ul>
                                                    <li>
                                                        <a href="<?= base_url(); ?>">
                                                            <span>Управление пользователями</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?= base_url(); ?>">
                                                            <span>Логин и пароль</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(); ?>default" onclick="return false;">
                                            <span>Персональные данные</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="<?= base_url(); ?>" onclick="return false;" class="topItem">
                                <span>Справка</span>
                            </a>
                            <div class="sub-nav out-level">
                                <ul>
                                    <li>
                                        <a href="<?= base_url(); ?>default" onclick="return false;">
                                            <span>Карта кабинета</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(); ?>default" onclick="return false;">
                                            <span>Справка</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>-->
                            <!--</li>-->

                        </ul>
                    </nav>

                    <!-- Cabinet Navigation End -->

                </div>




                <!-- Branding & Navigation End -->

            </header>
