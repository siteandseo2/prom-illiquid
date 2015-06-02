<!-- Main Content -->

<div id="main">
    <div class="container wf-wrap">
        <div class="row">

            <!-- Cabinet Navigation -->

            <nav id="cabinet-navigation">
                <ul id="main-nav" class="clearfix">
                    <li>
                        <a href="<?= base_url(); ?>" onclick="return false;" class="topItem">
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
                                                <a href="<?= base_url(); ?>account">
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
                        </div>
                    </li>

                </ul>
            </nav>

            <!-- Cabinet Navigation End -->
			
        </div>
		
		<div class="row">
			
			 <!-- Cabinet Content -->
            <section id="cabinet-content" class="clearfix">
			
				<h3 class="cabinetHead">Главная</h3>


                <div class="col-sm-3" id="cabinet-content-left-aside"></div>

                <div class="col-sm-6" id="cabinet-content-center"></div>

                <div class="col-sm-3" id="cabinet-content-right-aside"></div>


            </section>
            <!-- Cabinet Content End -->
			
		</div>

        <hr>

        <div class="row">
            <!-- Feedback Section -->

            <div id="feedback-container">

                <header>
                    <h2>Наши клиенты и партнеры</h2>
                    <h4>Нас уже более 10 000!</h4>
                </header>

                <div class="feeback-content clearfix">

                    <div id="feedback-carousel-comments" class="col-sm-6">

                        <!-- Customer comments block -->
                        <section id="testimonial-slider" class="carousel slide">

                            <ol class="carousel-indicators">
                                <li data-target="#testimonial-slider" data-slide-to="0" class="active"></li>
                                <li data-target="#testimonial-slider" data-slide-to="1"></li>
                                <li data-target="#testimonial-slider" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                                        Nulla odio eros, blandit ac metus faucibus, sollicitudin posuere sapien. Maecenas ut convallis arcu. Phasellus at tellus 
                                        sed odio vestibulum sodales in at lacus. Sed commodo metus et sapien pretium, ac sollicitudin enim dignissim. Donec tempus 
                                        diam et porta aliquam. Ut efficitur sollicitudin diam a accumsan.
                                    </p>
                                    <span class="img">
                                        <img src="../../../img/feedback-person-1.jpg" alt="person 1">
                                    </span>
                                    <span class="who">
                                        <span class="text-primary">Diana Richards</span>
                                        <br>
                                        <span class="text-secondary">manager</span>
                                    </span>
                                </div>
                                <div class="item">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                                        Nulla odio eros, blandit ac metus faucibus, sollicitudin posuere sapien. Maecenas ut convallis arcu. Phasellus at tellus 
                                        sed odio vestibulum sodales in at lacus. Sed commodo metus et sapien pretium, ac sollicitudin enim dignissim. Donec tempus 
                                        diam et porta aliquam. Ut efficitur sollicitudin diam a accumsan.
                                    </p>
                                    <span class="img">
                                        <img src="../../../img/feedback-person-2.jpg" alt="person 2">
                                    </span>
                                    <span class="who">
                                        <span class="text-primary">Anna White</span>
                                        <br>
                                        <span class="text-secondary">loyal client</span>
                                    </span>
                                </div>
                                <div class="item">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                                        Nulla odio eros, blandit ac metus faucibus, sollicitudin posuere sapien. Maecenas ut convallis arcu. Phasellus at tellus 
                                        sed odio vestibulum sodales in at lacus. Sed commodo metus et sapien pretium, ac sollicitudin enim dignissim. Donec tempus 
                                        diam et porta aliquam. Ut efficitur sollicitudin diam a accumsan.
                                    </p>
                                    <span class="img">
                                        <img src="../../../img/feedback-person-3.jpg" alt="person 3">
                                    </span>
                                    <span class="who">
                                        <span class="text-primary">Jacob Firebird</span>
                                        <br>
                                        <span class="text-secondary">happy client</span>
                                    </span>
                                </div>
                            </div>

                        </section>
                        <!-- Customer comments block End -->
                    </div>

                    <div id="feedback-partners" class="col-sm-6">
                        <!-- Partners icons block -->
                        <section id="partners-icons" class="clearfix">

                            <div class="col-sm-4 partner-icon">
                                <a href="<?= base_url(); ?>" target="_blank" title="Partner 1">
                                    <img src="../../../img/l-authentic.png">
                                </a>
                            </div>

                            <div class="col-sm-4 partner-icon">
                                <a href="<?= base_url(); ?>" target="_blank" title="Partner 2">
                                    <img src="../../../img/l-hamb.png">
                                </a>
                            </div>

                            <div class="col-sm-4 partner-icon">
                                <a href="<?= base_url(); ?>" target="_blank" title="Partner 3">
                                    <img src="../../../img/l-ransom.png">
                                </a>
                            </div>

                            <div class="col-sm-4 partner-icon">
                                <a href="<?= base_url(); ?>" target="_blank" title="Partner 3">
                                    <img src="../../../img/l-steak.png">
                                </a>
                            </div>

                            <div class="col-sm-4 partner-icon">
                                <a href="<?= base_url(); ?>" target="_blank" title="Partner 3">
                                    <img src="../../../img/l-thesaviour.png">
                                </a>
                            </div>

                            <div class="col-sm-4 partner-icon">
                                <a href="<?= base_url(); ?>" target="_blank" title="Partner 3">
                                    <img src="../../../img/l-vintage.png">
                                </a>
                            </div>

                        </section>
                        <!-- Partners icons block End -->
                    </div>

                </div>

            </div>

            <!-- Feedback Section End -->
        </div>

    </div>
</div>

<!-- Main Content End -->


