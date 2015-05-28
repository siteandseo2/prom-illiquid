<!-- Page title -->

<div class="page-title">
    <div class="wf-wrap">

        <div class="wf-table">
            <div class="wf-td hgroup">
                <h1><?= @$subcat_name ?></h1>
            </div>
            <div class="wf-td">
                <ul class="breadcrumbs text-normal">
                    <li>
                        <a href="<?= base_url(); ?>default">Главная</a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>subcategories/<?= @$cat_name['0']['link'] ?>"><?= @$cat_name['0']['name'] ?></a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>products/<?= @$link ?>"><?= @$subcat_name ?></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>

<!-- Page title -->


<!-- Main Content -->

<div id="main" class="cat-main">
    <div class="container wf-wrap clearfix">

        <div id="content" class="content">

            <p class="cat-result-count">Найдено <?= @count($items) ?> позиции</p>

            <div class="cat-ordering">
                <select>
                    <option value="pop">Сортировка по популярности</option>
                    <option value="rate">Сортировать по среднему рейтингу</option>
                    <option value="date">Сортировать по новинкам</option>
                    <option value="asc">Сортировать по цене : от низкой к высокой</option>
                    <option value="desc">Сортировать по цене: от высокой к низкой</option>
                </select>
            </div>

            <div class="row cat-row">
                <?php
                if (!empty($items)) {
                    foreach ($items as $item) {
                        if ($item['status'] == 'enable') {
                            ?>                
                            <div class="col-md-4 col-sm-4 cat-content-row-item">
                                <article>
                                    <div class="cat-item-img">
                                        <a href="<?= base_url('products/' . $item['link']); ?>" class="cat-item-hover-effect"><!--link-->
                                            <img src="<?= $item['image_path'] ?>" alt=""><!--img-->
                                        </a>
                                    </div>
                                    <div class="cat-item-title">
                                        <a href="<?= base_url('products/' . $item['link']); ?>item"><!--link-->
                                            <h4>
                                                <?= $item['name'] ?><!--name-->
                                            </h4>
                                            <span class="price">
                                                <span class="amount">$<?= $item['price'] ?></span><!--cost-->
                                            </span>
                                        </a>
                                    </div>
                                    <div class="hover-over-btns">
                                        <a href="<?= base_url('products/' . $item['link']); ?>" title="В корзину">
                                            <div class="buy-it">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </a>
                                        <a href="<?= base_url('products/' . $item['link']); ?>" title="К товару">
                                            <div class="show-it">
                                                <i class="fa fa-share"></i>
                                            </div>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <?php
                        }
                    }
                } else {
                    ?>
                    <div class="col-md-12 col-sm-12 cat-content-row-item">
                        <article>
                            <div class="cat-item-img">
                                <a href="#">
                                    <img src="http://mr-stiher.ru/img/oops-404.png" alt=""><!--img-->
                                </a>
                            </div>
                            <div class="cat-item-title">
                                <a href="#">
                                    <h4>Не найдено ни одного товара
                                      
                                    </h4>
                                    <span class="price">
                                        <span class="amount"></span>
                                    </span>
                                </a>
                            </div>                           
                        </article>
                    </div>
                    <?php
                }
                ?>
                <!--                <div class="col-md-4 col-sm-4 cat-content-row-item">
                                    <article>
                                        <div class="cat-item-img">
                                            <a href="<?= base_url(); ?>product" class="cat-item-hover-effect">
                                                <img src="../../../img/sub-item-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="cat-item-title">
                                            <a href="<?= base_url(); ?>product">
                                                <h4>
                                                    Vynil record mockup
                                                </h4>
                                                <span class="price">
                                                    <span class="amount">Free!</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="hover-over-btns">
                                            <a href="<?= base_url(); ?>product" title="В корзину">
                                                <div class="buy-it">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </a>
                                            <a href="<?= base_url(); ?>product" title="К товару">
                                                <div class="show-it">
                                                    <i class="fa fa-share"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                
                                <div class="col-md-4 col-sm-4 cat-content-row-item">
                                    <article>
                                        <div class="cat-item-img">
                                            <a href="<?= base_url(); ?>product" class="cat-item-hover-effect">
                                                <img src="../../../img/sub-item-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="cat-item-title">
                                            <a href="<?= base_url(); ?>product">
                                                <h4>
                                                    IPad air mockup
                                                </h4>
                                                <span class="price">
                                                    <span class="amount">$10.00 - $99.00</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="hover-over-btns">
                                            <a href="<?= base_url(); ?>product" title="В корзину">
                                                <div class="buy-it">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </a>
                                            <a href="<?= base_url(); ?>product" title="К товару">
                                                <div class="show-it">
                                                    <i class="fa fa-share"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                
                                <div class="col-md-4 col-sm-4 cat-content-row-item">
                                    <article>
                                        <div class="cat-item-img">
                                            <a href="<?= base_url(); ?>product" class="cat-item-hover-effect">
                                                <img src="../../../img/sub-item-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="cat-item-title">
                                            <a href="<?= base_url(); ?>product">
                                                <h4>
                                                    IPhone 6 mockup
                                                </h4>
                                                <span class="price">
                                                    <span class="amount">$15.00</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="hover-over-btns">
                                            <a href="<?= base_url(); ?>product" title="В корзину">
                                                <div class="buy-it">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </a>
                                            <a href="<?= base_url(); ?>product" title="К товару">
                                                <div class="show-it">
                                                    <i class="fa fa-share"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                
                                <div class="col-md-4 col-sm-4 cat-content-row-item">
                                    <article>
                                        <div class="cat-item-img">
                                            <a href="<?= base_url(); ?>product" class="cat-item-hover-effect">
                                                <img src="../../../img/sub-item-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="cat-item-title">
                                            <a href="<?= base_url(); ?>product">
                                                <h4>
                                                    Vynil record mockup
                                                </h4>
                                                <span class="price">
                                                    <span class="amount">Free!</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="hover-over-btns">
                                            <a href="<?= base_url(); ?>product" title="В корзину">
                                                <div class="buy-it">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </a>
                                            <a href="<?= base_url(); ?>product" title="К товару">
                                                <div class="show-it">
                                                    <i class="fa fa-share"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                
                                <div class="col-md-4 col-sm-4 cat-content-row-item">
                                    <article>
                                        <div class="cat-item-img">
                                            <a href="<?= base_url(); ?>product" class="cat-item-hover-effect">
                                                <img src="../../../img/sub-item-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="cat-item-title">
                                            <a href="<?= base_url(); ?>product">
                                                <h4>
                                                    IPad air mockup
                                                </h4>
                                                <span class="price">
                                                    <span class="amount">$10.00 - $99.00</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="hover-over-btns">
                                            <a href="<?= base_url(); ?>product" title="В корзину">
                                                <div class="buy-it">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </a>
                                            <a href="<?= base_url(); ?>product" title="К товару">
                                                <div class="show-it">
                                                    <i class="fa fa-share"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </article>
                                </div>-->

            </div>

        </div>

        <!-- Sidebar -->


        <aside id="sidebar" class="sidebar"> 
            <div class="sidebar-content">

                <section class="widget-shopping-cart">
                    <div class="widget-title">YOUR CART</div>
                    <ul class="widget-cart-list">
                        <li class="empty">No products in the cart</li>
                    </ul>
                </section>

                <section class="widget-product-search">
                    <div class="widget-title">SEARCH</div>
                    <form role="search" method="get" action="">
                        <input type="search" class="search-field" placeholder="Search Products.." value="" name="S" title="Search for..">
                        <input type="submit" value="search">
                        <span class="search-icon">
                            <i class="fa fa-search"></i>
                        </span>
                    </form>
                </section>

                <section class="widget-product-categories">
                    <div class="widget-title">CATEGORIES</div>
                    <ul class="product-cat">
                        <li class="cat-item cat-parent">
                            <a href="<?= base_url(); ?>">Clothes and Footwear</a>
                            <span class="count">(17)</span>
                            <ul class="children">
                                <li>
                                    <a href="<?= base_url(); ?>">Footwear</a>
                                    <span class="count">(3)</span>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>">Hoodies</a>
                                    <span class="count">(7)</span>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>">T-Shirts</a>
                                    <span class="count">(7)</span>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item cat-parent">
                            <a href="<?= base_url(); ?>">Digital goods</a>
                            <span class="count">(21)</span>
                            <ul class="children">
                                <li>
                                    <a href="<?= base_url(); ?>">Smartphones</a>
                                    <span class="count">(3)</span>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>">Laptops</a>
                                    <span class="count">(7)</span>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>">PC's</a>
                                    <span class="count">(7)</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </section>

                <section class="widget-top-rated">
                    <div class="widget-title">TOP RATED</div>
                    <ul class="widget-cart-list">
                        <li>
                            <a href="<?= base_url(); ?>" title=""> 
                                <img src="../../../img/shop-thumb-1.jpg" alt="IPhone mockup 6">
                                <span class="product-title">IPhone mockup 6</span>
                            </a>
                            <span class="amount">$15.00</span>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>" title=""> 
                                <img src="../../../img/shop-thumb-2.jpg" alt="IPad Air mockup">
                                <span class="product-title">IPad Air mockup</span>
                            </a>
                            <span class="amount">$15.00</span>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>" title=""> 
                                <img src="../../../img/shop-thumb-3.jpg" alt="High Space Sneakers">
                                <span class="product-title">High Space Sneakers</span>
                            </a>
                            <span class="amount">$15.00</span>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>" title=""> 
                                <img src="../../../img/shop-thumb-4.jpg" alt="Space Hoddie">
                                <span class="product-title">Space Hoddie</span>
                            </a>
                            <span class="amount">$15.00</span>
                        </li>
                    </ul>
                </section>

            </div>
        </aside>


        <!-- Sidebar End-->

    </div>
</div>



<!-- Main Content End -->
