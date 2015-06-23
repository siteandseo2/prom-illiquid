<!-- Page title -->

<div class="page-title">
    <div class="wf-wrap">
        <?php
        foreach ($product as $item) {
            ?>            
            <div class="wf-table">
                <div class="wf-td hgroup">
                    <h1 id="itemName"><?= $item['name'] ?></h1>
                </div>
                <div class="wf-td">
                    <ul class="breadcrumbs text-normal">
                        <li>
                            <a href="<?= base_url(); ?>default">Главная</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>subcategories/<?= $subcat_name['0']['link'] ?>"><?= $subcat_name['0']['name'] ?></a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>products/<?= $cat_name['0']['link'] ?>"><?= $cat_name['0']['name'] ?></a>
                        </li>
                        <li>
                            <a href="<?= base_url('products/item/' . $item['id']); ?>"><?= $item['name'] ?></a>
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

            <div id="content" class="content clearfix">

                <!-- Main Product Image -->

                <div class="images">
                    <a href="<?= base_url(); ?><?= $item['image_path'] ?>" class="fancy" data-fancybox-group="gallery">
                        <img src="<?= $item['image_path'] ?>" alt="" width="700" height="850" id="mainImage">
                    </a>
                    <div class="thumbnails clearfix">
                        <? if(!empty($item['min_img1'])) {?>
                        <div class="col-md-4 col-sm-4">                            
                            <a href="<?= base_url(); ?><?= $item['min_img1'] ?>" class="fancy" data-fancybox-group="gallery">
                                <img src="<?= $item['min_img1'] ?>" alt="" width="400" height="400">
                            </a>
                        </div>
                        <? }
                        if(!empty($item['min_img2'])) { ?>
                        <div class="col-md-4 col-sm-4">
                            <a href="<?= base_url(); ?><?= $item['min_img2'] ?>" class="fancy" data-fancybox-group="gallery"> 
                                <img src="<?= $item['min_img2'] ?>" alt="" width="400" height="400">
                            </a>
                        </div>
                        <? }
                        if(!empty($item['min_img3'])){ ?>
                        <div class="col-md-4 col-sm-4">
                            <a href="<?= base_url(); ?><?= $item['min_img3'] ?>" class="fancy" data-fancybox-group="gallery">
                                <img src="<?= $item['min_img3'] ?>" alt="" width="400" height="400">
                            </a>
                        </div>
                        <? } ?>
                    </div>
                </div>

                <!-- Summary -->

                <div class="summary">

                    <p class="item_price">
                        <span class="price"><?= $item['price'] ?></span>
                        <span class="currency"><?= $item['currency'] ?></span>
                        <span class="separator">за</span>
                        <span class="quantity"><?= $item['prod_quantity'] ?></span>
                    </p>
                    <? if(!empty($item['prod_min_order'])) {?>
                    <p class="order">
                        <span>Минимальный заказ:</span>
                        <span class="q"><?= $item['prod_min_order'] ?></span>
                    </p>
                    <? } ?>
                    <div class="quantity_ clearfix">
                        <input type="number" step="1" min="1" value="1" title="Change quantity" size="4">
                        <div class="add2cart buy-it" data-toggle="modal" data-target="#modalCart" id="<?= $item['id'] ?>">Купить</div>
                    </div>

                    <div class="product_meta">
                        <span class="contdition_degree">
                            Состояние: 
                            <span class="isNew"><?= $item['condition'] ?></span>
                            <span class="decimal">
                                (<span><?= $item['ball'] ?></span> из 10)
                            </span>
                        </span>
                        <span class="meta_id">
                            Код:
                            <span class="id"><?= $item['prod_code'] ?></span>
                        </span>
                    </div>

                    <div class="seller_info">
                        <h3>Информация о продавце</h3>
                        <span class="company">
                            Компания:
                            <a href="<?= base_url('view_company'); ?>/<?= $user_data['id'] ?>" class="company_value"><?= $user_data['company'] ?></a>
                        </span>
                        <span class="email">
                            Email:
                            <span class="email_value"><?= $user_data['email'] ?></span>
                        </span>
                        <span class="phone">
                            Телефон:
                            <span href="<?= base_url(); ?>" class="phone_value"><?= $user_data['phone'] ?></span>
                        </span>
                    </div>

                </div>
            <?php } ?>
            <!-- Product Tabs -->

            <div class="product-tabs">
                <ul class="tabs clearfix">
                    <li class="description_tab active">
                        <a href="#">Описание</a>
                    </li>
                    <li class="add_info_tab">
                        <a href="#">Дополнительная информация</a>
                    </li>
                </ul>

                <section id="description_panel">
                    <p> <?= nl2br($item['description']) ?></p>
                </section>

                <section id="add_info_panel" style="display: none;">
                    <h2>Дополнительная информация</h2>
                    <table class="shop_attributes">
                        <tbody>
                            <tr>
                                <th>License </th>
                                <td>
                                    <p>Pesonal <?= $item['id'] ?></p>
                                </td>
                            </tr>
                            <tr>
                                <th>Format</th>
                                <td>
                                    <p>Vector</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>


            <!-- Company's Others Goods -->
            <?php if (!empty($other)) { ?>
                <div class="marketing-carousel" id="others">
                    <h3>Другие товары компании</h3>

                    <ul class="carou-fred-sel clearfix">
                        <?php foreach ($other as $oth_item) {
                            ?>
                            <li>
                                <div class="carousel-img">
                                    <a href="<?= base_url(); ?>products/item/<?= $oth_item['id'] ?>-<?= $oth_item['trans'] ?>" title="">
                                        <img src="<?= $oth_item['image_path'] ?>" alt="<?= $oth_item['name'] ?>">
                                    </a>
                                </div>
                                <div class="carousel-info">
                                    <span class="product-title"><?= $oth_item['name'] ?></span>
                                    <span class="amount"><?= $oth_item['price'] ?> <?= $oth_item['currency'] ?></span>
                                </div>
                            </li>
                        <?php } ?>

                    </ul>

                    <span href="#" id="other_next" class="marketing-ctrl next">
                        <i class="fa fa-chevron-right"></i>
                    </span>

                    <span href="#" id="other_prev" class="marketing-ctrl prev">
                        <i class="fa fa-chevron-left"></i>
                    </span>
                </div>
            <?php } else { ?>
                <div class="marketing-carousel" id="not_found">
                    <h3>Другие товары компании</h3> 
                    <span class="product">Других товаров не найдено</span>                                        
                </div>
            <?php } ?>

            <!--  Similar Goods -->

            <?php if (!empty($like)) { ?>

                <div class="marketing-carousel" id="similars">
                    <h3>Другие похожие товары</h3>
                    <ul class="carou-fred-sel clearfix">

                        <?php
                        foreach ($like as $lk) {
                            ?>                  
                            <li>
                                <div class="carousel-img">
                                    <a href="<?= base_url(); ?>products/item/<?= $lk['id'] ?>-<?= $lk['trans'] ?>" title="">
                                        <img src="<?= $lk['image_path'] ?>" alt="<?= $lk['name'] ?>">
                                    </a>
                                </div>
                                <div class="carousel-info">
                                    <span class="product-title"><?= $lk['name'] ?></span>
                                    <span class="amount"><?= $lk['price'] ?>  <?= $lk['currency'] ?></span>
                                </div>
                            </li>                            
                        <?php } ?>
                    </ul>
                    <span href="#" id="similar_next" class="marketing-ctrl next">
                        <i class="fa fa-chevron-right"></i>
                    </span>

                    <span href="#" id="similar_prev" class="marketing-ctrl prev">
                        <i class="fa fa-chevron-left"></i>
                    </span>
                </div>
            <?php } else {
                ?>
                <div class="marketing-carousel" id="not_found">
                    <h3>Другие похожие товары</h3> 
                    <span class="product">Похожих товаров не найдено</span>                                        
                </div>

                <?php
            }
            ?>
        </div>
        <?php
        include_once 'application/views/templates/sidebar.php';
        ?>
    </div>
</div>





<!-- Main Content End -->
