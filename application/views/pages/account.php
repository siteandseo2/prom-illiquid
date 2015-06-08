<!-- Main Content -->

<div id="main">
    <div class="container wf-wrap">


        <div class="row">

            <!-- Cabinet Content -->
            <section id="cabinet-content" class="clearfix">

                <h2 class="cabinetHead">Персональные данные</h2>

                <!-- Account -->
                <form id="cabinet-my-account" class="form-submit clearfix" action="" method="POST" enctype="multipart/form-data">

                    <div class="col-sm-6">
                        <p>
                            <label for="account_name">Имя</label>
                            <input type="text" value="<?= $user_data['name'] ?>" id="account_name" name="account_name" class="cabinet-form-input">
                        </p>
                        <p>
                            <label for="account_surname">Фамилия</label>
                            <input type="text" value="<?= $user_data['surname'] ?>" id="account_surname" name="account_surname" class="cabinet-form-input">
                        </p>
                        <p>
                            <label for="account_patronymic">Отчество</label>
                            <input type="text" value="<?= $user_data['patronymic'] ?>" id="account_patronymic" name="account_patronymic" class="cabinet-form-input">
                        </p>
                        <p>
                            <label for="account_email">Email</label>
                            <input type="text" value="<?= $user_data['email'] ?>" id="account_email" name="account_email" class="cabinet-form-input">
                        </p>
                        <p>
                            <label for="account_phone">Телефон</label>
                            <input type="text" value="+<?= $user_data['phone'] ?>" id="account_phone" name="account_phone" class="cabinet-form-input">
                        </p>
                        <!-- 
                        <p>
                                <label for="account_photo">Фото</label>
                                <input type="file" id="account_photo" name="account_photo" accept="image/*">
                        </p>
                        -->
                        <!--						
                        <p>
                                <label for="account_sex">Пол</label>
                                <select class="cabinet-form-input" id="account_sex" name="account_sex">
                                        <option value="male">Мужской</option>
                                        <option value="female">Женский</option>
                                </select>
                        </p>
                        -->
                        <p>
                            <label for="account_country">Страна</label>
                            <select class="cabinet-form-input" id="account_country" name="account_country">
                                <option value="ua"><?= $user_data['country'] ?></option>
                                <option value="ua">Украина</option>
                                <option value="ru">Россия</option>
                                <option value="bl">Беларуссия</option>
                                <option value="kz">Казахстан</option>
                                <option value="ge">Грузия</option>
                                <!-- AJAX ? -->
                            </select>
                        </p>
                        <p>
                            <label for="account_city">Город</label>
                            <select id="account_city" name="account_city" class="cabinet-form-input">
                                <option value="ky"><?= $user_data['city'] ?></option>
                                <option value="zp">Запорожье</option>
                                <option value="ky">Киев</option>
                                <option value="kh">Харьков</option>
                                <option value="ky">Львов</option>
                                <option value="dn">Днепропетровск</option>
                                <!-- AJAX ? -->
                            </select>
                        </p>
                        <p>
                            <label for="account_address">Адрес</label>
                            <input type="text" value="<?= $user_data['street'] ?>  <?= $user_data['building'] ?>" id="account_address" name="account_address" class="cabinet-form-input">
                        </p>

                        <hr>

                        <p>
                            <span class="form-submit">
                                <input type="button" name="account_submit" id="account_submit" value="Сохранить">
                            </span>
                        </p>
                    </div>

                    <div class="col-sm-6">

                        <p>
                            <label>Ваше местоположение на карте</label>
                        <div id="map">
                                 <!-- <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=ZXnZmgyZKZEy3xNR_nhW1LqjoexWeRLd&width=600&height=450"></script> -->
                        </div>
                        </p>
                    </div>

                </form>
                <!-- Account End -->

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


