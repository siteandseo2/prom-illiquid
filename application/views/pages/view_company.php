<!-- Main Content -->

<div id="main">
    <div class="container wf-wrap">
        <div class="row">

            <!-- Cabinet Content -->
            <section id="cabinet-content" class="clearfix">

                <h2 class="cabinetHead">Информация о компании</h2>

                <form id="cabinet-company-info" class="form-submit clearfix" method="POST" enctype="multipart/form-data">

                    <div class="col-sm-6 company_view">

                        <div>
                            <h4>Название компании:</h4>
                            <span><?= $user_data['company'] ?></span>
                        </div>
                        <div>
                            <h4>Email компании:</h4>
                            <span><?= $user_data['email'] ?></span>
                        </div>
                        <div>
                            <h4>Телефон компании:</h4>
                            <span><?= $user_data['phone'] ?></span>
                        </div>
                        <?php  if(!empty($user_data['phone_more'])){
                        ?>
                        <div>
                            <h4>Дополнительный телефон:</h4>
                            <span><?= $user_data['phone_more'] ?></span>
                        </div>
                        <?php } ?>
                        <div>
                            <h4>Страна:</h4>
                            <span ><?= $user_data['country'] ?></span>
                        </div>
                        <div>
                            <h4>Город:</h4>
                            <span ><?= $user_data['city'] ?></span>  
                        </div>                       
                        <div>
                            <h4>Улица:</h4>
                            <span ><?= $user_data['street'] ?></span> 
                        </div>
                        <div>
                            <h4>Дом:</h4>
                            <span ><?= $user_data['building'] ?></span>       
                        </div>
                        <p>
                            <select class="cabinet-form-input" id="company_country" name="company_country" data-map="country" hidden>
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
                            <select id="city" name="city" class="cabinet-form-input" data-map="city" hidden>
                                <option value="zp"><?= $user_data['city'] ?></option>                                
                            </select>
                        </p>
                        <p>

                            <input type="text" value="<?= $user_data['street'] ?>" id="company_street" name="company_street" class="cabinet-form-input" data-map="street" hidden>
                        </p>
                        <p>

                            <input type="text" value="<?= $user_data['building'] ?>" id="company_building" name="company_building" class="cabinet-form-input" data-map="building" hidden>
                        </p>

                        <hr>

                        <div class="rating clearfix">
                            <div class="star-rating" title="Rated 5.00 of 5">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a href="<?= base_url(); ?>#reviews" class="review-link" rel="nofollow">
                                ( <span class="ratingCount">1</span>
                                customer review )
                            </a>
                        </div>



                    </div>

                    <div class="col-sm-6">

                        <p>
                            <label>Местоположение на карте</label>
                        <div id="map"></div>
                        </p>


                    </div>

                </form>

            </section>

        </div>
    </div>

</div>