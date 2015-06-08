<!-- Page title -->

<div class="page-title">
    <div class="wf-wrap">
        <?php
        foreach ($product as $item) {
            ?>            
            <div class="wf-table">
                <div class="wf-td hgroup">
                    <h1><?= $item['name'] ?></h1>
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
                    <a href="#">
                        <img src="<?= $item['image_path'] ?>" alt="" width="700" height="850">
                    </a>
                    <div class="thumbnails clearfix">
                        <div class="col-md-4 col-sm-4">
                            <a href="<?= base_url(); ?><?= $item['min_img1'] ?>" class="fancy" data-fancybox-group="gallery">
                                <img src="<?= $item['min_img1'] ?>" alt="" width="400" height="400">
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <a href="<?= base_url(); ?><?= $item['min_img2'] ?>" class="fancy" data-fancybox-group="gallery"> 
                                <img src="<?= $item['min_img2'] ?>" alt="" width="400" height="400">
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <a href="<?= base_url(); ?><?= $item['min_img3'] ?>" class="fancy" data-fancybox-group="gallery">
                                <img src="<?= $item['min_img3'] ?>" alt="" width="400" height="400">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Summary -->

                <div class="summary">

                    <p class="price">
                        <span class="amount"><?= $item['price'] ?></span>
                        <span class="currency"><?= $item['currency'] ?></span>
                        <span class="separetor">за</span>
                        <span class="quantity"><?= $item['prod_quantity'] ?></span>
                    </p>

                    <p class="order">
                        <span>Минимальный заказ:</span>
                        <span class="q">1000</span>
                    </p>
                    <!-- 
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
                    -->
                    <!--
    <div class="description">
    <p>
                    <?= nl2br($item['s_description']) ?>
    </p>
    </div>
                    -->
                    <div class="quantity clearfix">
                        <input type="number" step="1" min="1" value="1" title="Change quantity" size="4">
                        <div class="add2cart">Купить</div>
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
                        <!--
                        <span class="group">
                                Группа:
                                <a href="<? base_url(); ?>">Промышленные товары</a>
                        </span>
    <span class="cat">
    Категория:
    <a href="<?= base_url(); ?>products/<?= $cat_name['0']['link'] ?>"><?= $cat_name['0']['name'] ?></a>
    </span>
                        <span class="sunCat">
                                Подкатегория:
                                <a href="<?= base_url(); ?>">Клапаны</a>
                        </span>
                        -->
    <!--<span class="tagged_as">
    Тэги:
    <a href="<?= base_url(); ?>products/item/<?= $item['id'] ?>"><?= $item['name'] ?></a>
    <a href="<?= base_url(); ?>products/<?= $cat_name['0']['link'] ?>"><?= $cat_name['0']['name'] ?></a>
    <a href="<?= base_url(); ?>subcategories/<?= $subcat_name['0']['link'] ?>"><?= $subcat_name['0']['name'] ?></a>                            
    </span> -->
                    </div>

                    <div class="seller_info">
                        <h3>Информация о продавце</h3>
                        <span class="company">
                            Компания:
                            <a href="<?= base_url(); ?>" class="company_value"><?=$user_data['company']?></a>
                        </span>
                        <span class="email">
                            Email:
                            <span class="email_value"><?=$user_data['email']?></span>
                        </span>
                        <span class="phone">
                            Телефон:
                            <span href="<?= base_url(); ?>" class="phone_value"><?=$user_data['phone']?></span>
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
					<!--
                    <li class="reviews_tab">
                        <a href="#">Отзывы (1)</a>
                    </li>
					-->
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
				
				<!--
				
                <section id="reviews_panel" style="display: none;">
                    <div id="comments">
                        <h2>1 oтзыв o <?= $item['name'] ?></h2>
                        <ul class="commentslist">
                            <li class="comment" id="comment-1">
                                <div class="comment-container">
                                    <img src="../../../img/avatar-1.png" alt="" width="60" height="60">
                                    <div class="comment-text clearfix">
                                        <div class="star-right clearfix">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <p class="meta">
                                            <strong class="author">Alex Greenfield</strong>
                                            -
                                            <time datetime="2014-09-16T09:33:34+00:00">September 16, 2014</time>
                                        </p>

                                        <div class="descr">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                                                Nulla odio eros, blandit ac metus faucibus, sollicitudin posuere sapien. Maecenas ut convallis arcu. Phasellus at tellus 
                                                sed odio vestibulum sodales in at lacus. Sed commodo metus et sapien pretium, ac sollicitudin enim dignissim. Donec tempus 
                                                diam et porta aliquam. Ut efficitur sollicitudin diam a accumsan.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment" id="comment-2">
                                <div class="comment-container">
                                    <img src="../../../img/avatar-2.png" alt="" width="60" height="60">
                                    <div class="comment-text clearfix">
                                        <div class="star-right clearfix">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <p class="meta">
                                            <strong class="author">Alex Greenfield</strong>
                                            -
                                            <time datetime="2014-09-16T09:33:34+00:00">September 16, 2014</time>
                                        </p>

                                        <div class="descr">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                                                Nulla odio eros, blandit ac metus faucibus, sollicitudin posuere sapien. Maecenas ut convallis arcu. Phasellus at tellus 
                                                sed odio vestibulum sodales in at lacus. Sed commodo metus et sapien pretium, ac sollicitudin enim dignissim. Donec tempus 
                                                diam et porta aliquam. Ut efficitur sollicitudin diam a accumsan.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="add-review">
                        <h3>Add a Review</h3>
                        <form method="post" action="" id="commentform" class="commentform">
                            <p class="comment-form-author">
                                <label for="author">Name *</label>
                                <input type="text" name="author" size="30" aria-required="true">
                            </p>
                            <p class="comment-form-email">
                                <label for="email">Email *</label>
                                <input type="text" name="email" size="30" aria-required="true">
                            </p>
                            <p class="comment-form-rating">
                                <label>Your Rating</label>
                            <p class="stars">
                                <span>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                            </p>
                            </p>
                            <p class="comment-form-comment">
                                <label for="comment">Your Review</label>
                                <textarea name="comment" id="comment" cols="45" rows="8" aria-required="true"></textarea>
                            </p>
                            <p class="form-submit">
                                <input type="submit" name="submit" id="submit" value="Submit">
                            </p>
                        </form>
                    </div>
                </section>
				
				-->
				
            </div>
        </div>
        <?php
        include_once 'application/views/templates/sidebar.php';
        ?>
    </div>
</div>




<!-- Main Content End -->
