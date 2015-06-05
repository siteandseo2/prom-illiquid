<!-- Sidebar -->


        <aside id="sidebar" class="sidebar"> 
            <div class="sidebar-content">

                <section class="widget-shopping-cart">
                    <div class="widget-title">Корзина</div>
                    <ul class="widget-cart-list">
                        <li class="empty">В вашей корзине пока пусто</li>
                    </ul>
                </section>

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

                <section class="widget-product-categories">
                    <div class="widget-title">Категории</div>
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