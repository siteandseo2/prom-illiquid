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
                            <a href="<?= base_url(); ?>subcategories/<?=$subcat_name['0']['link']?>"><?=$subcat_name['0']['name']?></a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>products/<?=$cat_name['0']['link']?>"><?=$cat_name['0']['name']?></a>
                        </li>
                        <li>
                            <a href="<?= base_url('product/' . $item['id']); ?>"><?= $item['name'] ?></a>
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
                            <a href="<?= base_url(); ?>../../../img/big-1.jpg" class="fancy" data-fancybox-group="gallery">
                                <img src="../../../img/thumb-1.jpg" alt="" width="400" height="400">
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <a href="<?= base_url(); ?>../../../img/big-2.jpg" class="fancy" data-fancybox-group="gallery"> 
                                <img src="../../../img/thumb-2.jpg" alt="" width="400" height="400">
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <a href="<?= base_url(); ?>../../../img/big-3.jpg" class="fancy" data-fancybox-group="gallery">
                                <img src="../../../img/thumb-3.jpg" alt="" width="400" height="400">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Summary -->

                <div class="summary">

                    <p class="price">
                        <span class="amount">$<?= $item['price'] ?></span>
                    </p>

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

                    <div class="description">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                            Nulla odio eros, blandit ac metus faucibus, sollicitudin posuere sapien. Maecenas ut convallis arcu. Phasellus at tellus 
                            sed odio vestibulum sodales in at lacus. Sed commodo metus et sapien pretium, ac sollicitudin enim dignissim. Donec tempus 
                            diam et porta aliquam. Ut efficitur sollicitudin diam a accumsan.
                        </p>
                    </div>

                    <div class="quantity clearfix">
                        <input type="number" step="1" min="1" value="1" title="Change quantity" size="4">
                        <div class="add2cart">Add to Cart</div>
                    </div>

                    <div class="product_meta">
                        <span class="meta_id">
                            ID:
                            <span class="id"><?=$item['id']?></span>
                        </span>
                        <span class="posted_in">
                            Category:
                            <a href="<?= base_url(); ?>"><?=$cat_name['0']['name']?></a>
                        </span>
                        <span class="tagged_as">
                            Tags:
                            <a href="<?= base_url(); ?>">iphone</a>
                            <a href="<?= base_url(); ?>">mockup</a>
                            <a href="<?= base_url(); ?>">template</a>
                            <a href="<?= base_url(); ?>">vector</a>
                        </span>
                    </div>

                </div>
            <?php } ?>
            <!-- Product Tabs -->

            <div class="product-tabs">
                <ul class="tabs clearfix">
                    <li class="description_tab active">
                        <a href="#">Description</a>
                    </li>
                    <li class="add_info_tab">
                        <a href="#">Additional Information</a>
                    </li>
                    <li class="reviews_tab">
                        <a href="#">Reviews (1)</a>
                    </li>
                </ul>

                <section id="description_panel">
                    <h2>Product description</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                        Nulla odio eros, blandit ac metus faucibus, sollicitudin posuere sapien. Maecenas ut convallis arcu. Phasellus at tellus 
                        sed odio vestibulum sodales in at lacus. Sed commodo metus et sapien pretium, ac sollicitudin enim dignissim. Donec tempus 
                        diam et porta aliquam. Ut efficitur sollicitudin diam a accumsan.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                        Nulla odio eros, blandit ac metus faucibus, sollicitudin posuere sapien. Maecenas ut convallis arcu. Phasellus at tellus 
                        sed odio vestibulum sodales in at lacus. Sed commodo metus et sapien pretium, ac sollicitudin enim dignissim. Donec tempus 
                        diam et porta aliquam. Ut efficitur sollicitudin diam a accumsan.</p>
                </section>

                <section id="add_info_panel" style="display: none;">
                    <h2>Additional information</h2>
                    <table class="shop_attributes">
                        <tbody>
                            <tr>
                                <th>License </th>
                                <td>
                                    <p>Pesonal <?=$item['id']?></p>
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

                <section id="reviews_panel" style="display: none;">
                    <div id="comments">
                        <h2>1 review for iPhone 6 mockup</h2>
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
