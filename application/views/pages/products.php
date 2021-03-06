<!-- Page title -->
<div class="page-title">
    <div class="wf-wrap">
        <div class="wf-table">
            <div class="wf-td hgroup">
                <h1>
                    <?php
                    if (!empty($subcat_name))
                        echo $subcat_name;
                    else
                        echo 'Все категории';
                    ?>
                </h1>
            </div>
            <div class="wf-td">
                <ul class="breadcrumbs text-normal">
                    <li>
                        <a href="<?= base_url(); ?>default">Главная</a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>subcategories/<?php
                        if (!empty($cat_name['0']['link']))
                            echo $cat_name['0']['link'];
                        ?>">
                               <?php
                               if (!empty($cat_name['0']['name']))
                                   echo $cat_name['0']['name'];
                               else
                                   echo 'Все категории';
                               ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>products/<?php
                        if (!empty($link))
                            echo $link;
                        ?>">
                               <?php
                               if (!empty($subcat_name))
                                   echo $subcat_name;
                               else
                                   echo 'Все товары';
                               ?>                            
                        </a>
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

            <p class="cat-result-count">Найдено <?= count($items) ?> позиции</p>

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
                                        <a href="#" onclick="return false;" class="cat-item-hover-effect"><!--link-->
                                            <img id="mainImage" src="<?= $item['image_path'] ?>" alt=""><!--img-->
                                        </a>
                                    </div>
                                    <div class="cat-item-title">
                                        <a href="#" onclick="return false;"><!--link-->
                                            <h4 id="itemName">
                                                <?= $item['name'] ?><!--name-->
                                            </h4>
                                            <span class="item_price">
                                                <span class="price"><?= $item['price'] ?></span>
												<span class="currency"><?= $item['currency'] ?></span>
												<span class="separator">за</span>
												<span class="quantity"><?= $item['prod_quantity'] ?></span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="hover-over-btns">
                                        <a href="#" id="<?= $item['id'] ?>" title="В корзину" data-toggle="modal" data-target="#modalCart" class="buy-it">
                                            <div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </a>
                                        <a href="<?= base_url('products/item/' . $item['id']); ?>" title="К товару">
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
            </div>

        </div>

        <?php
        include_once 'application/views/templates/sidebar.php';
        ?>

    </div>
</div>



<!-- Main Content End -->
