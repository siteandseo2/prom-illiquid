<!-- Page title -->

<div class="page-title">
    <div class="wf-wrap">

        <div class="wf-table">
            <div class="wf-td hgroup">
                <h1>Регистрация</h1>
            </div>
            <div class="wf-td">
                <ul class="breadcrumbs text-normal">
                    <li>
                        <a href="<?= base_url(); ?>default">Главная</a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>registration">Регистрация</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>

<!-- Page title -->

<!-- Main Content -->

<div id="main">

    <div class="container wf-wrap">
        <div class="row">

            <div class="form-container">
                <form name="registform" action="" method="POST" class="validate-form">

                    <legend>Зарегистрироваться как</legend>

                    <div class="btn-group validate-form-tabs" data-toggle="buttons" id="chooseRole">
                        <label class="btn active">
                            <input type="radio" name="usercat" id="buyer" autocomplete="off" checked value="buyer"> Покупатель
                        </label>
                        <label class="btn">
                            <input type="radio" name="usercat" id="seller" autocomplete="off" value="seller"> Продавец
                        </label>
                    </div>

                    <div class="form-fields">

                        <!-- Buyer Set -->
                        <div class="buyer-set">
						
							<h4>Персональные данные</h4>

                            <span class="form-name">
                                <input type="text" class="validate" data-validate="w" placeholder="Фамилия *" name="surname">
                                <span class="form-icon">
                                    <i class="fa"></i>
                                </span>
                            </span>
                            <span class="form-name">
                                <input type="text" class="validate" data-validate="w" placeholder="Имя *" name="name">
                                <span class="form-icon">
                                    <i class="fa"></i>
                                </span>
                            </span>
                            <span class="form-name">
                                <input type="text" data-validate="w" placeholder="Отчество" name="patronymic">
                                <span class="form-icon">
                                    <i class="fa"></i>
                                </span>
                            </span>
                            <span class="form-name">
                                <input type="text" class="validate" data-validate="e" placeholder="E-mail *" name="email">
                                <span class="form-icon">
                                    <i class="fa"></i>
                                </span>
                            </span>
							<span class="form-name">
                                <input type="text" class="validate" data-validate="p" placeholder="Телефон *" name="phone">
                                <span class="form-icon">
                                    <i class="fa"></i>
                                </span>
                            </span>
                            <span class="form-name">
                                <input type="password" class="validate" data-validate="wn" placeholder="Пароль * (минимум 8 символов)" name="password">
                                <span class="form-icon">
                                    <i class="fa"></i>
                                </span>
                            </span>
                            <span class="form-name">
                                <input type="password" class="validate" data-validate="re" placeholder="Повторите пароль *" name="password_repeat">
                                <span class="form-icon">
                                    <i class="fa"></i>
                                </span>
                            </span>
							
							<p>
                                <label for="country">Страна</label>
                                <select class="cabinet-form-input" name="country" id="country">
                                    <option value="ua">Украина</option>
                                    <option value="ru">Россия</option>
                                    <option value="usa">США</option>
                                    <!-- AJAX or foreach -->
                                </select>
                            </p>
                            <p>
                                <label for="city">Город</label>
                                <select class="cabinet-form-input" name="city" id="city">
                                    <option value="zp">Запорожье</option>
                                    <option value="ky">Киев</option>
                                    <option value="kh">Харьков</option>
                                    <!-- AJAX or foreach -->
                                </select>
                            </p>
							

                        </div>
                        <!-- Buyer set End -->
						
					</div>
					
					<div class="form-fields">

                        <!-- Seller Set -->
                        <div class="seller-set">
						
							<h4>Информация о компании</h4>
							
							<span class="form-name">
                                <input type="text" class="validate" data-validate="any" placeholder="Название компании *" name="company">
                                <span class="form-icon">
                                    <i class="fa"></i>
                                </span>
                            </span>
							<span class="form-name">
                                <input type="text" class="validate" data-validate="e" placeholder="Email компании *" name="company_email">
                                <span class="form-icon">
                                    <i class="fa"></i>
                                </span>
                            </span>
							<span class="form-name">
                                <input type="text" class="validate" data-validate="p" placeholder="Телефон компании *" name="company_phone">
                                <span class="form-icon">
                                    <i class="fa"></i>
                                </span>
                            </span>
							<span class="form-name">
                                <input type="text" placeholder="Дополнительные телефон" name="company_phone_more">
                                <span class="form-icon">
                                    <i class="fa"></i>
                                </span>
                            </span>
                            <p>
                                <label for="company_country">Страна</label>
                                <select class="cabinet-form-input" name="company_country" id="company_country">
                                    <option value="ua">Украина</option>
                                    <option value="ru">Россия</option>
                                    <option value="usa">США</option>
                                    <!-- AJAX or foreach -->
                                </select>
                            </p>
                            <p>
                                <label for="company_city">Город</label>
                                <select class="cabinet-form-input" name="company_city" id="company_city">
                                    <option value="zp">Запорожье</option>
                                    <option value="ky">Киев</option>
                                    <option value="kh">Харьков</option>
                                    <!-- AJAX or foreach -->
                                </select>
                            </p>

                        </div>
                        <!-- Seller set End -->

                    </div>   

                    <p>
                        <span class="form-submit">
                            <input type="button" name="register" value="Зарегистрироваться" class="validate-submit">                            
                        </span>                        
                    </p>
                </form>
            </div>
			
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


