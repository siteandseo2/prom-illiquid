<div id="main-carousel" class="carousel slide normal-carousel" data-ride="carousel"> <!-- data-ride="carousel" -->

    <!-- Carousel slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="../../../img/bg-01.jpg" alt="Slide one">
            <div class="carousel-description carousel-caption">
                <h1>Slide One</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                    Nulla odio eros, blandit ac metus faucibus, sollicitudin posuere sapien. Maecenas ut convallis arcu. Phasellus at tellus 
                    sed odio vestibulum sodales in at lacus. Sed commodo metus et sapien pretium, ac sollicitudin enim dignissim. Donec tempus 
                    diam et porta aliquam. Ut efficitur sollicitudin diam a accumsan.</p>
            </div>
        </div>
        <div class="item">
            <img src="../../../img/bg-02.jpg" alt="Slide two">
            <div class="carousel-caption carousel-description">
                <h1>Slide Two</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                    Nulla odio eros, blandit ac metus faucibus, sollicitudin posuere sapien. Maecenas ut convallis arcu. Phasellus at tellus 
                    sed odio vestibulum sodales in at lacus. Sed commodo metus et sapien pretium, ac sollicitudin enim dignissim. Donec tempus 
                    diam et porta aliquam. Ut efficitur sollicitudin diam a accumsan.</p>
            </div>
        </div>
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
                            <li class="col-sm-4 <?= $active ?>" id="tab-home">
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
                            foreach ($list as $value) {
                                if ($value['status'] != 'disable' && $value['fp_id'] == 1) {
                                    echo '<li>';
                                    echo "<a href='".base_url()."subcategories'>" . $value['name'] . "</a>";
                                    echo '</li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <!-- Categories List End -->


                    <!-- Home tab Grid -->
                    <div class="col-sm-9 clearfix tabs-content-grid home-tab-grid">

                        <!-- 1st row -->
                        <div class="col-md-3 col-sm-4 tabs-grid-item">
                            <div class="inner-item">
                                <a href="<?= base_url(); ?>" class="item-link">
                                    <div class="photo-frame">
                                        <img src="../../../img/iphone.jpg" alt="Iphone">
                                    </div>
                                    <div class="item-title">
                                        <span>Iphone 5s</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4 tabs-grid-item">
                            <div class="inner-item">
                                <a href="<?= base_url(); ?>" class="item-link">
                                    <div class="photo-frame">
                                        <img src="../../../img/iphone.jpg" alt="Iphone">
                                    </div>
                                    <div class="item-title">
                                        <span>Iphone 5s</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4 tabs-grid-item">
                            <div class="inner-item">
                                <a href="<?= base_url(); ?>" class="item-link">
                                    <div class="photo-frame">
                                        <img src="../../../img/iphone.jpg" alt="Iphone">
                                    </div>
                                    <div class="item-title">
                                        <span>Iphone 5s</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4 tabs-grid-item">
                            <div class="inner-item">
                                <a href="<?= base_url(); ?>" class="item-link">
                                    <div class="photo-frame">
                                        <img src="../../../img/iphone.jpg" alt="Iphone">
                                    </div>
                                    <div class="item-title">
                                        <span>Iphone 5s</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- 2nd row -->
                        <div class="col-md-3 col-sm-4 tabs-grid-item">
                            <div class="inner-item">
                                <a href="<?= base_url(); ?>" class="item-link">
                                    <div class="photo-frame">
                                        <img src="../../../img/iphone.jpg" alt="Iphone">
                                    </div>
                                    <div class="item-title">
                                        <span>Iphone 5s</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4 tabs-grid-item">
                            <div class="inner-item">
                                <a href="<?= base_url(); ?>" class="item-link">
                                    <div class="photo-frame">
                                        <img src="../../../img/iphone.jpg" alt="Iphone">
                                    </div>
                                    <div class="item-title">
                                        <span>Iphone 5s</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4 tabs-grid-item">
                            <div class="inner-item">
                                <a href="<?= base_url(); ?>" class="item-link">
                                    <div class="photo-frame">
                                        <img src="../../../img/iphone.jpg" alt="Iphone">
                                    </div>
                                    <div class="item-title">
                                        <span>Iphone 5s</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4 tabs-grid-item">
                            <div class="inner-item">
                                <a href="<?= base_url(); ?>" class="item-link">
                                    <div class="photo-frame">
                                        <img src="../../../img/iphone.jpg" alt="Iphone">
                                    </div>
                                    <div class="item-title">
                                        <span>Iphone 5s</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- 3rd row -->
                        <div class="col-md-3 col-sm-4 tabs-grid-item">
                            <div class="inner-item">
                                <a href="<?= base_url(); ?>" class="item-link">
                                    <div class="photo-frame">
                                        <img src="../../../img/iphone.jpg" alt="Iphone">
                                    </div>
                                    <div class="item-title">
                                        <span>Iphone 5s</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4 tabs-grid-item">
                            <div class="inner-item">
                                <a href="<?= base_url(); ?>" class="item-link">
                                    <div class="photo-frame">
                                        <img src="../../../img/iphone.jpg" alt="Iphone">
                                    </div>
                                    <div class="item-title">
                                        <span>Iphone 5s</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4 tabs-grid-item">
                            <div class="inner-item">
                                <a href="<?= base_url(); ?>" class="item-link">
                                    <div class="photo-frame">
                                        <img src="../../../img/iphone.jpg" alt="Iphone">
                                    </div>
                                    <div class="item-title">
                                        <span>Iphone 5s</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4 tabs-grid-item">
                            <div class="inner-item">
                                <a href="<?= base_url(); ?>" class="item-link">
                                    <div class="photo-frame">
                                        <img src="../../../img/iphone.jpg" alt="Iphone">
                                    </div>
                                    <div class="item-title">
                                        <span>Iphone 5s</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- Home tab grid End -->



                </div>
            </div>

            <!-- Tabs End -->

        </div>

        <hr>

        <div class="row">
            <!-- Feedback Section -->

            <div id="feedback-container">

                <header>
                    <h2>Наши клиенты и партнеры</h2>
                    <h4>Нас уже более 10 000!</h4>
                </header>

                <div class="feeback-content clearfix">

                    <div id="feedback-carousel-comments" class="col-sm-6">

                        <!-- Customer comments block -->
                        <section id="testimonial-slider" class="carousel slide">

                            <ol class="carousel-indicators">
                                <li data-target="#testimonial-slider" data-slide-to="0" class="active"></li>
                                <li data-target="#testimonial-slider" data-slide-to="1"></li>
                                <li data-target="#testimonial-slider" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                                        Nulla odio eros, blandit ac metus faucibus, sollicitudin posuere sapien. Maecenas ut convallis arcu. Phasellus at tellus 
                                        sed odio vestibulum sodales in at lacus. Sed commodo metus et sapien pretium, ac sollicitudin enim dignissim. Donec tempus 
                                        diam et porta aliquam. Ut efficitur sollicitudin diam a accumsan.
                                    </p>
                                    <span class="img">
                                        <img src="../../../img/feedback-person-1.jpg" alt="person 1">
                                    </span>
                                    <span class="who">
                                        <span class="text-primary">Diana Richards</span>
                                        <br>
                                        <span class="text-secondary">manager</span>
                                    </span>
                                </div>
                                <div class="item">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                                        Nulla odio eros, blandit ac metus faucibus, sollicitudin posuere sapien. Maecenas ut convallis arcu. Phasellus at tellus 
                                        sed odio vestibulum sodales in at lacus. Sed commodo metus et sapien pretium, ac sollicitudin enim dignissim. Donec tempus 
                                        diam et porta aliquam. Ut efficitur sollicitudin diam a accumsan.
                                    </p>
                                    <span class="img">
                                        <img src="../../../img/feedback-person-2.jpg" alt="person 2">
                                    </span>
                                    <span class="who">
                                        <span class="text-primary">Anna White</span>
                                        <br>
                                        <span class="text-secondary">loyal client</span>
                                    </span>
                                </div>
                                <div class="item">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
                                        Nulla odio eros, blandit ac metus faucibus, sollicitudin posuere sapien. Maecenas ut convallis arcu. Phasellus at tellus 
                                        sed odio vestibulum sodales in at lacus. Sed commodo metus et sapien pretium, ac sollicitudin enim dignissim. Donec tempus 
                                        diam et porta aliquam. Ut efficitur sollicitudin diam a accumsan.
                                    </p>
                                    <span class="img">
                                        <img src="../../../img/feedback-person-3.jpg" alt="person 3">
                                    </span>
                                    <span class="who">
                                        <span class="text-primary">Jacob Firebird</span>
                                        <br>
                                        <span class="text-secondary">happy client</span>
                                    </span>
                                </div>
                            </div>

                        </section>
                        <!-- Customer comments block End -->
                    </div>

                    <div id="feedback-partners" class="col-sm-6">
                        <!-- Partners icons block -->
                        <section id="partners-icons" class="clearfix">

                            <div class="col-sm-4 partner-icon">
                                <a href="<?= base_url(); ?>" target="_blank" title="Partner 1">
                                    <img src="../../../img/l-authentic.png">
                                </a>
                            </div>

                            <div class="col-sm-4 partner-icon">
                                <a href="<?= base_url(); ?>" target="_blank" title="Partner 2">
                                    <img src="../../../img/l-hamb.png">
                                </a>
                            </div>

                            <div class="col-sm-4 partner-icon">
                                <a href="<?= base_url(); ?>" target="_blank" title="Partner 3">
                                    <img src="../../../img/l-ransom.png">
                                </a>
                            </div>

                            <div class="col-sm-4 partner-icon">
                                <a href="<?= base_url(); ?>" target="_blank" title="Partner 3">
                                    <img src="../../../img/l-steak.png">
                                </a>
                            </div>

                            <div class="col-sm-4 partner-icon">
                                <a href="<?= base_url(); ?>" target="_blank" title="Partner 3">
                                    <img src="../../../img/l-thesaviour.png">
                                </a>
                            </div>

                            <div class="col-sm-4 partner-icon">
                                <a href="<?= base_url(); ?>" target="_blank" title="Partner 3">
                                    <img src="../../../img/l-vintage.png">
                                </a>
                            </div>

                        </section>
                        <!-- Partners icons block End -->
                    </div>

                </div>

            </div>

            <!-- Feedback Section End -->
        </div>

    </div>
</div>