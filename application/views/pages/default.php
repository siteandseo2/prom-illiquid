<div id="main-carousel" class="carousel slide normal-carousel" data-ride="carousel"> <!-- data-ride="carousel" -->

    <!-- Carousel slides -->
    <div class="carousel-inner" role="listbox">
        <?php
        foreach ($slider as $item) {
            if ($item['status'] == 'enable') {
                if ($item['act'] == 1)
                    $act = 'active';
                else {
                    $act = '';
                }
                ?>        
                <div class="item <?= $act ?>">
                    <img src="<?= $item['path'] ?>" alt="Slide one">
                    <div class="carousel-description carousel-caption">
                        <h1><?= $item['header'] ?></h1>
                        <p><?= $item['text'] ?></p>
                    </div>
                </div>
                <?php
            }
        }
        ?>
        <!--        <div class="item">
                    <img src="../../../img/bg-02.jpg" alt="Slide two">
                    <div class="carousel-caption carousel-description">
                        <h1>Slide Two</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                            Nulla odio eros, blandit ac metus faucibus, sollicitudin posuere sapien. Maecenas ut convallis arcu. Phasellus at tellus 
                            sed odio vestibulum sodales in at lacus. Sed commodo metus et sapien pretium, ac sollicitudin enim dignissim. Donec tempus 
                            diam et porta aliquam. Ut efficitur sollicitudin diam a accumsan.</p>
                    </div>
                </div>-->
    </div>
    <!-- Carousel slides End -->

    <!-- Controllers -->
    <a class="left carousel-control main-carousel-controll-link" href="<?= base_url(); ?>#main-carousel" role="button" data-slide="prev" style="background-image: none;">
        <span aria-hidden="true" class="carousel-contr" id="main-carousel-cont-prev">
            <i class="fa fa-angle-left"></i>
        </span>
    </a>
    <a class="right carousel-control main-carousel-controll-link" href="<?= base_url(); ?>#main-carousel" role="button" data-slide="next" style="background-image: none;">
        <span aria-hidden="true" class="carousel-contr" id="main-carousel-cont-next">
            <i class="fa fa-angle-right"></i>
        </span>
    </a>
    <!-- Controllers End -->

    <div id="blur-overlay" class="normal-overlay"></div>

</div>

<!-- Main Slideshow End -->

<!-- Main Content -->

<div id="main">
    <div class="main-gradient"></div>

    <div class="container wf-wrap">
        <div class="row">

            <!-- Tabs -->

            <div id="tabs-container">
                <ul class="tabs-buttons clearfix">
                    <?php
                    foreach ($group_list as $key => $item) {
                        if ($key == 0) {
                            $active = 'activeTab';
                        } else {
                            $active = '';
                        }
                        if ($item['status'] == 'enable') {
                            ?>
                            <li class="col-sm-4 <?= $active ?>" id="tab-home" data-ajax="/<?= $item['id']; ?>">
                                <a href="<?= base_url(); ?>"><?= $item['name'] ?></a>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>

                <div class="tabs-content clearfix">

                    <!-- Categories List -->
                    <div class="col-sm-3 tabs-category-container">
                        <ul class="tabs-content-category-list home-tab-list">
                            <?php
                            /* foreach ($list as $value) {
                              if ($value['status'] != 'disable' && $value['fp_id'] == 1) {
                              echo '<li>';
                              echo "<a href='".base_url()."subcategories'>" . $value['name'] . "</a>";
                              echo '</li>';
                              }
                              } */
                            ?>
                        </ul>
                    </div>
                    <!-- Categories List End -->


                    <!-- Home tab Grid -->
                    <div class="col-sm-9 clearfix tabs-content-grid home-tab-grid">
                        <?php foreach ($subcategory_img as $item) {
                            ?>
                            <!-- 1st row -->
                            <div class="col-md-3 col-sm-4 tabs-grid-item">
                                <div class="inner-item">
                                    <a href="<?= base_url(); ?>products/<?= $item['link'] ?>" class="item-link">
                                        <div class="photo-frame">
                                            <img src="<?= $item['image_path'] ?>" alt="<?= $item['name'] ?>">
                                        </div>
                                        <div class="item-title">
                                            <span><?= $item['name'] ?></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php }
                        ?>
                    </div>
                    <!-- Home tab grid End -->



                </div>
            </div>

            <!-- Tabs End -->

        </div>

        <hr>


        <? $this->load->view('templates/feedback'); ?>

    </div>
</div>