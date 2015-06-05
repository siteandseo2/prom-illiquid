<!-- Main Content -->
<div id="main">
    <div class="container wf-wrap">


        <div class="row">
            <form action="user/add_product" method="POST" id="adding_new_product" class="form-submit validate-form" enctype="multipart/form-data">

                <!-- Cabinet Content -->
                <section id="cabinet-content" class="clearfix">
                    <h2 class="cabinetHead">Добавить позицию</h2> 
                    <div class="col-sm-6 form-fields">
                        <p>
                            <label for="prod_name">
                                Название <span class="required">*</span>
                            </label>
                            <input type="text" id="prod_name" name="prod_name" class="cabinet-form-input validate validate-any">
                        </p>
                        <p>
                            <label for="prod_group">
                                Группа
                            </label>
                            <select id="prod_group" name="prod_group" class="cabinet-form-input">
                                <option value="default">Выберите группу</option>
                                <?php foreach ($group_list as $item) { ?>
                                    <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option><
                                <?php } ?>
                            </select>
                        </p>
                        <p>
                            <label for="prod_cat">
                                Категория
                            </label>
                            <select id="prod_cat" name="prod_cat" class="cabinet-form-input"></select>
                        </p>
                        <p>
                            <label for="prod_subcat">
                                Подкатегория
                            </label>
                            <select id="prod_subcat" name="prod_subcat" class="cabinet-form-input"></select>
                        </p>

                        <div class="radio-block">
                            <label>Состояние</label>
                            <div>
                                <span>Новое</span>
                                <input type="radio" name="prod_condition" id="prod_condition1" value="Новое" checked>
                                <span>Б/у</span>
                                <input type="radio" name="prod_condition" id="prod_condition2" value="Б/у">
                            </div>
                            <div>
                                <label>Оцените по шкале</label>
                                <input type="text" class="amount" readonly data-value="" value="">
                                <input type="hidden" id="range_hidden" value="">
                                <div id="slider-range-max"></div>
                            </div>
                        </div>

                        <div>
                            <label>
                                Цена
                            </label>
                            <div class="setPrice">
                                <input type="text" name="prod_price" id="prod_price" class="cabinet-form-input add-prod-name">
                                <select name="prod_currency" class="cabinet-form-input add-prod-name">
                                    <option value="Грн.">Грн.</option>
                                    <option value="USD">USD</option>
                                    <option value="Руб.">Руб.</option>
                                </select>
                                <span class="separator"> за </span>
                                <select name="prod_quantity" class="cabinet-form-input add-prod-name">
                                    <option value="Шт.">Шт.</option>
                                    <option value="100 Шт.">100 Шт.</option>
                                    <option value="10 Шт.">10 Шт.</option>
                                    <option value="Упаковку">Упаковка</option>
                                    <option value="Тысячу">Тысяча</option>
                                </select>
                            </div>
                        </div> 

                        <p>
                            <label for="prod_min_order">Минимальный заказ</label>
                            <input type="checkbox" id="check_min_order">
                            <input type="text" name="prod_min_order" id="prod_min_order" class="cabinet-form-input">
                        </p>

                        <hr>

                        <p>
                            <span class="form-submit">
                                <input type="submit" name="submit_product" id="submit_product" value="Опубликовать товар" class="validate-submit">
                            </span>
                        </p>

                    </div>

                    <div class="col-sm-6 form-fields">

                        <p>
                            <label for="prod_code">
                                Код
                            </label>
                            <input type="text" id="prod_code" name="prod_code" class="cabinet-form-input">
                        </p>
                        <!--
                                                <p>
                            <label for="prod_s_description">
                                Краткое описание <span class="required">*</span>
                            </label>

                            <textarea class="cabinet-form-input" name="prod_s_description" id="prod_description" cols="15" rows="2"></textarea>
                        </p>
                        -->
                        <p>
                            <label for="prod_description">
                                Описание <span class="required">*</span>
                            </label>
                            <textarea class="cabinet-form-input" name="prod_description" id="prod_description" cols="15" rows="6"></textarea>
                        </p>

                        <p>
                            <label for="prod_photo">
                                Фото
                            </label>
                            <input type="file" id="prod_photo_1" name="prod_photo_1" accept="image/*">
                            <input type="file" id="prod_photo_2" name="prod_photo_2" accept="image/*">
                            <input type="file" id="prod_photo_3" name="prod_photo_3" accept="image/*">
                            <input type="file" id="prod_photo_4" name="prod_photo_4" accept="image/*">
                        </p>

                    </div>



                </section>
                <!-- Cabinet Content End -->
            </form>
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


