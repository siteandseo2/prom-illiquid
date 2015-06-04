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

            <div class="row">               
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Добавить пункт меню
                        <small>Add menu item </small>
                    </h1>                           
                </div>                 
            </div>
            <div class="col-lg-6 tab_margin_top">               
                <form action="add_item_menu" method="POST" class="form-submit" enctype="multipart/form-data">
                    <label>Название</label>
                    <input class='form-control' name='name' placeholder="Например МОЙ КАБИНЕТ (Максимум 25 символов)" type='text'/>
                    <label>Тип</label>
                    <select class="form-control ajax-first-select" name='group' id="prod_group">
                        <option value="default">Выберите Тип</option>
                        <option value="default">Пункт меню 1-го уровня</option>
                        <option value="r">Пункт меню 2-го уровня</option>
                        <option value="d">Пункт меню 3-го уровня</option>
                    </select>
                    <label>Выберите Пункт Меню Родителя</label>
                    <select class="form-control ajax-second-select" name='parent' id="prod_cat" disabled="disabled"></select>  
                    </select>
                    <label>Ccылка</label>
                    <input class='form-control' name='link' placeholder="Например account (Максимум 25 символов)" type='text'/>
                    <label>Статус</label>
                    <select class='form-control ' name='status'>
                        <option value='enable'>Показывать</option>
                        <option value='disable'>Скрывать</option>
                    </select>
                    <div class='tab_margin_top'>
                        <button class="btn btn-info" type='submit' name="add_item_menu" value=""><i class="fa fa-save"></i> Сохранить</button>
                        <button class="btn btn-danger" type='reset' name="reset" value=""><i class="fa fa-remove"></i> Сбросить</button>
                    </div>
            </div> 
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>

<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

