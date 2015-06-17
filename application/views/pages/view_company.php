<!-- Main Content -->

<div id="main">
    <div class="container wf-wrap">
        <div class="row">

            <!-- Cabinet Content -->
            <section id="cabinet-content" class="clearfix">

                <h2 class="cabinetHead">Информация о компании</h2>

                <form id="cabinet-company-info" class="form-submit clearfix" method="POST" enctype="multipart/form-data">

                    <div class="col-sm-6">

                        <p>
                            <label for="company_name">Название компании</label>
                            <span><?= $user_data['company'] ?></span>
                        </p>
                        <p>
                            <label for="company_email">Email компании</label>
                            <span><?= $user_data['email'] ?></span>
                        </p>
                        <p>
                            <label for="company_phone">Телефон компании</label>
                            <span><?= $user_data['phone'] ?></span>
                        </p>
                        <p>
                            <label for="company_phone_more">Дополнительный телефон</label>
                            <span><?= $user_data['phone_more'] ?></span>
                        </p>
                        <p>
                            <label for="company_country">Страна</label>
                            <span ><?= $user_data['country'] ?></span>
                        </p>
                        <p>
                            <label for="location">Город</label>
                            <span ><?= $user_data['city'] ?></span>  

                        </p>                       
                        <p>
                            <label for="company_street">Улица</label>
                            <span ><?= $user_data['street'] ?></span> 
                        </p>
                        <p>
                            <label for="company_building">Дом</label>
                            <span ><?= $user_data['building'] ?></span>       
                        </p>
                        <p>
                          
                            <select class="cabinet-form-input" id="company_country" name="company_country" data-map="country" hidden="">
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