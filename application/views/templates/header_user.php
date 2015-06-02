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
                                        <a href="<?= base_url(); ?>cabinet" class="submit">
                                            <i class="fa fa-sign-in"></i>
                                            <span class="top-bar-icon-text"><?= $user['name'];?></span>
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
                                <?=$user['company'];?>
                            </h4>
                        </span>
                    </div>

                    <div class="yoursId">
                        <span><b>Ваш id:</b> 
                            <?php
                            $id=$user['id'];
                            if(strlen($id)<8){
                              for($i=0; $i<8-strlen($id);$i++){
                                  echo 0;
                              }
                            }
                            echo $id;
                            ?>    
                        </span>
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
				
				
				
				
                <!-- Branding & Navigation End -->

            </header>
