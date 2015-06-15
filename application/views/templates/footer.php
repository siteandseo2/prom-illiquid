<!-- Footer -->
<footer id="footer">

    <div class="wf-wrap">
        <div class="wf-container-footer">
            <div class="wf-container clearfix">

                <section class="widget col-sm-4" id="footer-contact-us-widget">
                    <div class="widget-title">НАШИ КОНТАКТЫ</div>
                    <ul class="contact-info">
                        <li>
                            <span class="color-primary">Адрес:</span>
                            <br>
                            8500 Beverly Boulevard
                            <br>
                            Los Angeles, CA 90048
                        </li>
                        <li>
                            <span class="color-primary">Телефоны:</span>
                            <br>
                            +12 345 67 00 89
                            <br>
                            +12 987 00 65 43
                        </li>
                        <li>
                            <span class="color-primary">E-mail:</span>
                            <br>
                            isitinme88@gmail.com
                        </li>
                    </ul>
                    <div class="soc-ico clearfix">
                        <a href="<?= base_url(); ?>" title="Instagram" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="<?= base_url(); ?>" title="Facebook" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                        <a href="<?= base_url(); ?>" title="Twitter" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="<?= base_url(); ?>" title="Vk" target="_blank">
                            <i class="fa fa-vk"></i>
                        </a>
                    </div>
                </section>

                <section class="widget col-sm-4" id="footer-our-services-widget">
                    <div class="widget-title">НАШИ ПРЕДЛОЖЕНИЯ</div>

                    <ul class="foot-accordion clearfix">
                        <li>
                            <a href="<?= base_url(); ?>" class="accor-link text-primary">
                                <span class="accor-toggle-icon">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                <span class="color-primary">Web Design</span>
                            </a>
                            <div class="accor-content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                            </div>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>" class="accor-link text-primary">
                                <span class="accor-toggle-icon">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                <span class="color-primary">Photography</span>
                            </a>
                            <div class="accor-content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                            </div>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>" class="accor-link text-primary">
                                <span class="accor-toggle-icon">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                <span class="color-primary">Programming</span>
                            </a>
                            <div class="accor-content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                            </div>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>" class="accor-link text-primary">
                                <span class="accor-toggle-icon">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                <span class="color-primary">Marketing & PR</span>
                            </a>
                            <div class="accor-content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                            </div>
                        </li>
                    </ul>

                </section>

                <section class="widget col-sm-4" id="footer-featured-posts-widget">
                    <div class="widget-title">ПОПУЛЯРНЫЕ СТАТЬИ</div>

                    <ul class="recent-posts">
                        <li>
                            <article>
                                <div class="wf-td">
                                    <a href="<?= base_url(); ?>" class="alignLeft">
                                        <img src="../../../img/article_img_1.jpg" alt="Image" width="40" height="40">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <a href="<?= base_url(); ?>">Business cards design trends</a>
                                    <br>
                                    <time class="text-secondary">August 5, 2013</time>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article>
                                <div class="wf-td">
                                    <a href="<?= base_url(); ?>" class="alignLeft">
                                        <img src="../../../img/article_img_1.jpg" alt="Image" width="40" height="40">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <a href="<?= base_url(); ?>">Business cards design trends</a>
                                    <br>
                                    <time class="text-secondary">August 5, 2013</time>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article>
                                <div class="wf-td">
                                    <a href="<?= base_url(); ?>" class="alignLeft">
                                        <img src="../../../img/article_img_1.jpg" alt="Image" width="40" height="40">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <a href="<?= base_url(); ?>">Business cards design trends</a>
                                    <br>
                                    <time class="text-secondary">August 5, 2013</time>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article>
                                <div class="wf-td">
                                    <a href="<?= base_url(); ?>" class="alignLeft">
                                        <img src="../../../img/article_img_1.jpg" alt="Image" width="40" height="40">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <a href="<?= base_url(); ?>">Business cards design trends</a>
                                    <br>
                                    <time class="text-secondary">August 5, 2013</time>
                                </div>
                            </article>
                        </li>
                    </ul>
                </section>

            </div>
        </div>
    </div>

    <!-- Modal Cart -->
    <form action="<?= base_url() ?>add_order" method="POST">
        <div class="modal fade bs-example-modal-lg" id="modalCart" aria-hidden="true" role="dialog">
            <div class="modal-dialog modal-lg">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Оформление заказ</h4>
                    </div>
                    <div class="modal-body clearfix">

                        <!--<form name="modalCartForm" method="POST" class="validate-form">-->
                        <div class="form-fields clearfix">

                            <!-- Left Side -->

                            <div class="col-sm-6">

                                <p>
                                    <label for="type_of_order">Форма заказа</label>
                                    <select class="cabinet-form-input" name="type_of_order" id="type_of_order">
                                        <option value="cash">Наличные</option>
                                        <option value="mail">Наложенный платеж</option>
                                        <option value="card">Кредитная карточка</option>
                                    </select>
                                </p>

                                <p>
                                    <label for="type_of_deliverance">Тип доставки</label>
                                    <select class="cabinet-form-input" name="type_of_deliverance" id="type_of_deliverance">
                                        <option value="nova_poshta">Нова Пошта</option>
                                        <option value="self">Самовывоз</option>
                                        <option value="intime">Интайм</option>
                                    </select>
                                </p>

                                <span class="form-name">
                                    <input type="text" class="validate" data-validate="w" placeholder="Имя *" name="name">
                                    <span class="form-icon">
                                        <i class="fa"></i>
                                    </span>
                                </span>

                                <span class="form-name">
                                    <input type="text" class="validate" data-validate="w" placeholder="Фамилия *" name="surname">
                                    <span class="form-icon">
                                        <i class="fa"></i>
                                    </span>
                                </span>

                                <p>
                                    <label for="location">Область</label>
                                    <select class="cabinet-form-input" name="location" id="location" data-ajax="region">
                                        <? foreach ($location as $item){
                                        ?>
                                        <option value="<?= $item['name'] ?>"><?= $item['name'] ?></option>
                                        <?
                                        }
                                        ?>
                                    </select>
                                </p>

                                <p>
                                    <label for="city">Область</label>
                                    <select class="cabinet-form-input" name="city" id="city">
                                        <option value="zp">Запорожье</option>
                                        <!-- ajax -->
                                    </select>
                                </p>

                                <p class="form-name">
                                    <input type="text" class="validate" data-validate="e" placeholder="Email *" name="email">
                                    <span class="form-icon">
                                        <i class="fa"></i>
                                    </span>
                                </p>

                                <p class="form-name">
                                    <input type="text" class="validate" data-validate="p" placeholder="Телефон *" name="phone">
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
                        </form>

                        <h3 class="empty_cart">Ваша корзина пуста</h3>

                    </div>
                    <div class="modal-footer" style="text-align: left;">
                        <p>
                            <span class="form-submit">
                                <input type="submit" name="send" value="Оформить заказ" class="validate-submit">                            
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

            </div>
        </div>
    </form>

</footer>

<!-- Footer End -->
<a href="<?= base_url(); ?>" class="scroll-top">
    <i class="fa fa-arrow-up"></i>
</a>

</section>


<script src="../../../js/jquery-1.11.0.min.js"></script>
<script src="../../../js/jquery-ui.js"></script> 
<script src="../../../js/bootstrap.js"></script>
<script src="../../../js/uploading.js"></script>
<?php
if (!empty($script))
    print_r($script);

?>







</body>
</html>