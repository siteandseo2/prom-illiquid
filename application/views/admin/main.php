<div id="wrapper">

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">               
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Главная страница
                        <small>Main page</small>
                    </h1>  
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?= base_url(); ?>admin/index">Главная</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Главная страница
                        </li>
                    </ol>                    
                </div>                 
            </div>
            <!-- /.row -->
            <div class="pull-right col-lg-3 col-sm-auto">

            </div>
            <div class="col-lg-12 tab_margin_top">               
                <nav id="cabinet-navigation">
                    <ul id="main-nav" class="clearfix">                           
                        <?php
                        foreach ($menu as $item => $arr) {
                            ?>
                            <li>
                                <a href="<?= base_url(); ?>" onclick="return false;" class="topItem">
                                    <span><?= $item ?></span>
                                </a>
                                <?php
                                if (count($arr) > 1) {
                                    ?>
                                    <div class="sub-nav out-level">
                                        <ul>
                                            <?php
                                            foreach ($arr as $id => $array) {
                                                if ($id == $arr['0']) {

                                                    foreach ($array as $sub => $mass) {
                                                        if (count($mass) > 1) {
                                                            ?>
                                                            <li class="downItem">
                                                                <a href="<?= base_url(); ?><?= $sub ?>" onclick="return false;" class="clearfix">
                                                                    <span class="cabinet-nav-text"><?= $mass['0'] ?></span>
                                                                    <span class="cabinet-nav-icon">
                                                                        <i class="fa fa-angle-right"></i>
                                                                    </span>
                                                                </a>
                                                                <div class="sub-nav inn-level">
                                                                    <ul>
                                                                        <?php
                                                                        foreach ($mass as $k => $v) {
                                                                            if (is_array($v)) {
                                                                                foreach ($v as $key => $zn) {
                                                                                    ?>
                                                                                    <li>
                                                                                        <a href="<?= base_url(); ?><?= $key ?>">
                                                                                            <span><?= $zn ?></span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <?php
                                                                                }
                                                                            }
                                                                        }
                                                                        ?>                                                                        
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <?php
                                                        } else {
                                                            ?>                                           
                                                            <li>
                                                                <a href="<?= base_url(); ?><?= $sub ?>" class="clearfix">
                                                                    <span class="cabinet-nav-text"><?= $mass['0'] ?></span>
                                                                </a>
                                                            </li>                                                            
                                                            <?php
                                                        }
                                                    }
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <?php
                                }
                                ?>
                            </li>
                            <?php
                        }
                        ?>

                    </ul>
                </nav>
            </div>
            <div class="col-lg-12 tab_margin_top">  
                <div class="pull-right col-lg-3 col-sm-auto">
                    <a href="<?= base_url('admin'); ?>/menu_add" class="btn btn-primary btn-labeled" style="width: 100%;">
                        <span class="btn-label icon fa fa-plus"></span>
                        Добавить пункт меню
                    </a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
   
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

