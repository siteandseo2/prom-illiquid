<!-- Sidebar -->


<aside id="sidebar" class="sidebar"> 
    <div class="sidebar-content">

        <!--
<section class="widget-product-search">
<div class="widget-title">Поиск</div>
<form role="search" method="get" action="">
<input type="search" class="search-field" placeholder="Искать.." value="" name="S" title="Search for..">
<input type="submit" value="search">
<span class="search-icon">
    <i class="fa fa-search"></i>
</span>
</form>
</section>
        -->

        <section class="widget-product-categories">
            <h3 class="widget-title">Категории</h3>
            <ul class="product-cat">                        
                <?php
                foreach ($cat_list as $cat => $subcategory) {
                    foreach ($subcategory as $k => $v) {
                        ?>                        
                        <li class="cat-item cat-parent">
                            <a href="<?= base_url(); ?>subcategories/<?= $k ?>"><?= $cat ?></a>
                            <span class="count">(<?= count($v) ?>)</span>
                            <ul class="children">      
                                <?php
                                if (!empty($v)) {
                                    foreach ($v as $key => $val) {
                                        foreach ($val as $kl => $zn) {
                                            ?>      
                                            <li>
                                                <a href="<?= base_url(); ?>products/<?= $key ?>"><?= $kl ?></a>
                                                <span class="count">(<?= $zn ?>)</span>
                                            </li> 
                                            <?php
                                        }
                                    }
                                }
                                ?>                                                              
                            </ul>
                        </li>
                        <?php
                    }
                }
                ?>                   
            </ul>
        </section>

        <!-- Most Popular -->

        <section class="widget-top-rated" id="most-popular">
            <h3 class="widget-title">Самые популярные</h3>

            <span id="car_next" class="carou-fred-sel-ctrl">
                <i class="fa fa-chevron-up"></i>
            </span>		

            <ul class="widget-cart-list carou-fred-sel">
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

            <span id="car_prev" class="carou-fred-sel-ctrl">
                <i class="fa fa-chevron-down"></i>
            </span>	

        </section>

        <!-- Other of its Seller -->

        <section class="widget-top-rated" id="already-seen">
            <h3 class="widget-title">Вы уже посмотрели</h3>
            <?php if (!empty($views)) { 
             ?>
                <span id="car_next_" class="carou-fred-sel-ctrl">
                    <i class="fa fa-chevron-up"></i>
                </span>		

                <ul class="widget-cart-list carou-fred-sel">    
                    <?php foreach ($views as $view) {
                        ?>                
                        <li>
                            <a href="<?= base_url(); ?>/products/item/<?=$view['id']?>-<?=$view['name']?>" title=""> 
                                <img src="<?=$view['image_path']?>" alt="IPhone mockup 6">
                                <span class="product-title"><?=$view['name']?></span>
                            </a>
                            <span class="amount"><?=$view['price']?></span>
                        </li>
                    <?php } ?>
                </ul>

                <span id="car_prev_" class="carou-fred-sel-ctrl">
                    <i class="fa fa-chevron-down"></i>
                </span>	
            <?php } ?>
        </section>

    </div>
</aside>


<!-- Sidebar End-->