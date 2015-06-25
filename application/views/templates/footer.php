<!-- Footer -->
<footer id="footer">

    <div class="wf-wrap">
        <div class="wf-container-footer">
            <div class="wf-container clearfix">

                <section class="widget col-sm-3" id="footer-contact-us-widget">
                    <div class="widget-title">НАШИ КОНТАКТЫ</div>
                    <ul class="contact-info">
                        <li>
                            <span class="color-primary">Адрес:</span>
                            <br>
                            <?php
                            if (!empty($city))
                                echo $city
                                ?>
                            <br>
                            <?php
                            if (!empty($street_build))
                                echo $street_build
                                ?>                           
                        </li>
                        <li>
                            <span class="color-primary">Телефоны:</span>
                            <br>
                            <?php
                            if (!empty($phone1))
                                echo $phone1
                                ?>   
                            <br>
                            <?php
                            if (!empty($phone2))
                                echo $phone2
                                ?> 
                        </li>
                        <li>
                            <span class="color-primary">E-mail:</span>
                            <br>
                            <?php
                            if (!empty($email))
                                echo $email
                                ?> 
                        </li>
                    </ul>
                    <div class="soc-ico clearfix">
                        <?php if (!empty($inst_link)) { ?>                           
                            <a href="<?= $inst_link ?>" title="Instagram" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        <?php } ?>
                        <?php if (!empty($fb_link)) { ?>      
                            <a href="<?= $fb_link ?>" title="Facebook" target="_blank">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                        <?php } ?>
                        <?php if (!empty($tw_link)) { ?>   
                            <a href="<?= $tw_link ?>" title="Twitter" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        <?php } ?>
                        <?php if (!empty($vk_link)) { ?>   
                            <a href="<?= $vk_link ?>" title="Vk" target="_blank">
                                <i class="fa fa-vk"></i>
                            </a>
                        <?php } ?>
                    </div>
                </section>               

                <section class="widget col-sm-3" id="footer-our-services-widget">                   
                    <div class="widget-title">НАШИ ПРЕДЛОЖЕНИЯ</div>

                    <?php if (!empty($popular)) { ?>
                        <ul class="foot-accordion clearfix">                            
                            <?php
                            $m = 0;
                            foreach ($popular as $item) {
                                $stream = 'down';
                                if ($m == 0) {
                                    $stream = 'up';
                                }
                                $m++;
                                if ($m < 5) {
                                    ?>
                                    <li>
                                        <a href="<?= base_url(); ?>products/item/<?= $item['id'] ?>-<?= $item['trans'] ?>" class="accor-link text-primary">
                                            <span class="accor-toggle-icon">
                                                <i class="fa fa-angle-<?= $stream ?>"></i>
                                            </span>
                                            <span class="color-primary"><?= $item['name'] ?></span>
                                        </a>
                                        <div class="accor-content">                                            
                                            <a href="<?= base_url(); ?>products/item/<?= $item['id'] ?>-<?= $item['trans'] ?>" class="alignLeft">
                                                <img src="<?= $item['image_path'] ?>" alt="<?= $item['name'] ?>" width="40" height="40">
                                            </a>                                            
                                        </div>
                                    </li>    
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    <?php } ?>
                </section>

                <section class="widget col-sm-3" id="footer-featured-posts-widget">
                    <div class="widget-title">ПОПУЛЯРНЫЕ ТОВАРЫ</div>
                    <br>
                    <?php if (!empty($popular)) { ?>
                        <ul class="recent-posts">
                            <?php
                            $m = 0;
                            foreach ($popular as $item) {
                                $m++;
                                if ($m < 4) {
                                    ?>
                                    <li>
                                        <article>
                                            <div class="wf-td">
                                                <a href="<?= base_url(); ?>products/item/<?= $item['id'] ?>-<?= $item['trans'] ?>" class="alignLeft">
                                                    <img src="<?= $item['image_path'] ?>" alt="<?= $item['name'] ?>" width="40" height="40">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <a href="<?= base_url(); ?>products/item/<?= $item['id'] ?>-<?= $item['trans'] ?>"><?= $item['name'] ?></a>
                                                <br>
                                                <time class="text-secondary"><?= $item['date'] ?></time>
                                            </div>
                                        </article>
                                    </li>
                                <?php
                                }
                            }
                            ?>
                        </ul>
<?php } ?>
                </section>
                <section class="widget col-sm-3" >
                    <div class="widget-title">ПОИСК</div>
                    <br>
                    <div class="widget-product-search">                       
                        <form role="search" method="POST" action="<?= base_url(); ?>search">
                            <input type="search" class="search-field" placeholder="Искать.." value="" name="name" title="Search for..">
                            <input type="submit" name="search" value="search">
                            <span class="search-icon">
                                <i class="fa fa-search"></i>
                            </span>
                        </form>                            
                    </div>
                </section>

            </div>
        </div>
    </div>

    <!-- Modal Cart -->

    <div class="modal fade bs-example-modal-lg" id="modalCart" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-lg">

            <form action="<?= base_url() ?>add_order" method="POST">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Оформление заказ</h4>
                    </div>
                    <div class="modal-body clearfix">

                        <div class="form-fields clearfix">

                            <!-- Left Side -->

                            <div class="col-sm-6">

                                <p>
                                    <label for="type_of_order">Форма заказа</label>
                                    <select class="cabinet-form-input" name="type_of_order" id="type_of_order">
                                        <option value="Наличные">Наличные</option>
                                        <option value="Наложенный платеж">Наложенный платеж</option>
                                        <option value="Кредитная карточка">Кредитная карточка</option>
                                    </select>
                                </p>

                                <p>
                                    <label for="type_of_deliverance">Тип доставки</label>
                                    <select class="cabinet-form-input" name="type_of_deliverance" id="type_of_deliverance">
                                        <option value="Нова Пошта">Нова Пошта</option>
                                        <option value="Самовывоз">Самовывоз</option>
                                        <option value="Интайм">Интайм</option>
                                    </select>
                                </p>

                                <span class="form-name">
                                    <input type="text" class="validate" data-validate="w" placeholder="Имя *" value="<?= @$user['name'] ?>" name="name">
                                    <span class="form-icon">
                                        <i class="fa"></i>
                                    </span>
                                </span>

                                <span class="form-name">
                                    <input type="text" class="validate" data-validate="w" placeholder="Фамилия *" value="<?= @$user['surname'] ?>" name="surname">
                                    <span class="form-icon">
                                        <i class="fa"></i>
                                    </span>
                                </span>

                                <p>
                                    <label for="location">Область</label>
                                    <select class="cabinet-form-input" name="location" id="location" data-ajax="region" rel="cart">
                                        <option value="<?= @$user['location'] ?>"><?= @$user['location'] ?></option>
                                        <? foreach ($location as $item){
                                        ?>
                                        <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                                        <?
                                        }
                                        ?>
                                    </select>
                                </p>

                                <p>
                                    <label for="city">Город</label>
                                    <select class="cabinet-form-input" name="city" id="city" rel="cart-city">
                                        <option value="<?= @$user['city'] ?>"><?= @$user['city'] ?></option>
                                        <!-- ajax -->
                                    </select>
                                </p>

                                <p class="form-name">
                                    <input type="text" class="validate" data-validate="e" placeholder="Email *" value="<?= @$user['email'] ?>" name="email">
                                    <span class="form-icon">
                                        <i class="fa"></i>
                                    </span>
                                </p>

                                <p class="form-name">
                                    <input type="text" class="validate" data-validate="p" placeholder="Телефон *" value="<?= @$user['phone'] ?>" name="phone">
                                    <span class="form-icon">
                                        <i class="fa"></i>
                                    </span>
                                </p>

                            </div>

                            <!-- Right Side -->

                            <div class="col-sm-6 items-list">

                                <!-- Item Block --> 

                            </div>

                        </div>

                        <h3 class="empty_cart">Ваша корзина пуста</h3>

                    </div>
                    <div class="modal-footer" style="text-align: left;">
                        <p>
                            <span class="form-submit">
                                <input type="submit" name="send" value="Оформить заказ" class="validate-submit" id="cart-submit">                            
                            </span>
                            <span>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>                   
                            </span>
                            <span class="totalPrice">
                                <span>Итого</span>
                                <span class="sum"></span>
                                <span class="curr">Грн</span>
                            </span>
                        </p>
                    </div>
                </div>

            </form>

        </div>
    </div>


    <!-- Modal Forgot -->

    <div class="modal fade" id="forgotModal" aria-hidden="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="POST" name="forgotForm">
                        <div class="form-group">
                            <label for="forgotModalEmail">Введите свой Email и мы пришлем вам Ваш пароль</label>
                            <input type="text" class="form-control" id="forgotModalEmail" name="forgotModalEmail">
                        </div>
                        <button type="submit" class="btn btn-success">Отправить</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Overlay -->

    <div id="overlay"></div>


</footer>

<!-- Footer End -->
<a href="<?= base_url(); ?>" class="scroll-top">
    <i class="fa fa-arrow-up"></i>
</a>

</section>


<script src="../../../js/jquery-1.11.0.min.js"></script>
<script src="../../../js/jquery-ui.js"></script> 
<script src="../../../js/bootstrap.js"></script>
<script src="../../../js/carouFredSel-6.2.1.js"></script>

<!--<script src="../../../js/uploading.js"></script>-->
<?php
if (!empty($script))
    print_r($script);
?>

<script src="../../../js/jquery.scrollbar.js"></script>






</body>
</html>