<!-- Page title -->

<div class="page-title">
    <div class="wf-wrap">

        <div class="wf-table">
            <div class="wf-td hgroup">
                <h1>Вход</h1>
            </div>
            <div class="wf-td">
                <ul class="breadcrumbs text-normal">
                    <li>
                        <a href="<?= base_url(); ?>default">Главная</a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>login">Вход</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- Page title -->

<!-- Main Content -->

<div id="main">
    <div class="container wf-wrap">
        <div class="row">

            <div class="form-container">
                <form name="loginform" action="" method="POST">
                    <div class="form-fields">
                        <span class="form-name login-form-input">
                            <input type="text" class="validate" placeholder="E-mail *" name="email" value="">
                        </span>
                        <span class="form-name login-form-input">
                            <input type="text" class="validate" placeholder="Пароль *" name="password" value="">
                        </span>
                    </div>

                    <p class="remember-me">
                        <label>
                            <input name="rememberme" type="checkbox" id="rememberme" value="">
                            Запомнить меня
                        </label>
                    </p>

                    <p>
                        <span class="form-submit">
                            <input type="submit" name="login" value="Войти">
                        </span>
                    </p>
                </form>
            </div>

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
<?php
//$a=new User();
//$a->generateId();
?>
<!-- Main Content End -->

