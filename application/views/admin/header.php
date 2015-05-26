<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Prom Admin</title>

        <link href="<?= base_url(); ?>../../../../css/admin_style.css" rel="stylesheet">
        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url(); ?>../../../../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= base_url(); ?>../../../../css/sb-admin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?= base_url(); ?>../../../../css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?= base_url(); ?>../../../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link href="<?= base_url(); ?>../../../../css/back_end.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url(); ?>admin/index">PROM ILLIQUID</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?= $admin['name'] ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?= $admin['name'] ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?= $admin['name'] ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?= $admin['name'] ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Профиль</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Входящие</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Настройки</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"> 
                                <form action="exit_user" method="POST">
                                    <i class="fa fa-fw fa-power-off"></i><input  type="submit" id="exit" name="logout" value=" Выйти" class="top-bar-icon-text subm" >
                                </form>     
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>        
        </nav>

        <!-- Sidebar -->
        <ul class="nav navbar-nav side-nav" id="sideBar">
            <li>
                <a href="<?= base_url(); ?>admin/index" data-ajax="index">
					<i class="fa fa-fw fa-dashboard"></i> 
					Главная
				</a>
            </li>
            <li>
                <a href="<?= base_url(); ?>admin/charts"  data-ajax="charts">
					<i class="fa fa-fw fa-bar-chart-o"></i> 
					Графики
				</a>
            </li>
            <li>
                <a href="<?= base_url(); ?>admin/tables"  data-ajax="tables">
					<i class="fa fa-fw fa-table"></i> Таблицы
				</a>
            </li>
            <li>
                <a href="<?= base_url(); ?>admin/forms"  data-ajax="forms">
					<i class="fa fa-fw fa-edit"></i> 
					Формы
				</a>
            </li>
            <li>
                <a href="<?= base_url(); ?>admin/bootstrap-elements" data-ajax="bootstrap-elements">
					<i class="fa fa-fw fa-desktop"></i> 
					Bootstrap Elements
				</a>
            </li>
            <li>
                <a href="<?= base_url(); ?>admin/bootstrap-grid" data-ajax="bootstrap-grid">
					<i class="fa fa-fw fa-wrench"></i> 
					Bootstrap Grid
				</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo">
					<i class="fa fa-fw fa-arrows-v"></i> Сайт <i class="fa fa-fw fa-caret-down"></i>
				</a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="#" class="dropped">Главная страница</a>
                    </li>
                    <li>
                        <a href="#" class="dropped">Страницы</a>
                    </li>
                    <li>
                        <a href="#" class="dropped">Слайдер</a>
                    </li>
                </ul>
            </li>  
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#item"><i class="fa fa-fw fa-arrows-v"></i> Магазин <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="item" class="collapse">
                    <li>
                        <a href="<?= base_url(); ?>admin/focus_product" data-ajax="focus_product" class="dropped">Группа товаров</a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>admin/category" data-ajax="category" class="dropped">Категории товаров</a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>admin/subcategories" data-ajax="subcategories" class="dropped">Подкатегории товаров</a>
                    </li>
                     <li>
                         <a href="<?= base_url(); ?>admin/products" data-ajax="products" class="dropped">Товары</a>
                    </li>
                    <li>
                        <a href="#" class="dropped">Атрибуты товаров</a>
                    </li>
                </ul>
            </li>  
            <li>
                <a href="<?= base_url(); ?>admin/blank-page" data-ajax="blank-page" class="ajax"><i class="fa fa-fw fa-file"></i> Пользователи</a>
            </li>                        
        </ul>
        <!-- Sidebar End -->

        


