<div id="wrapper">

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">               
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Управление меню
                        <small>Setting menu</small>
                    </h1>  
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?= base_url(); ?>admin/index">Главная</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Управление меню
                        </li>
                    </ol>                    
                </div>                 
            </div>
            <!-- /.row -->  
            <div class="row ">  
                <div class="col-lg-12">
                    <div class="pull-left col-lg-12 col-sm-auto">
                        <h1 class="page-header">
                            Главное Меню
                            <small>Main menu</small>

                            <div class="pull-right col-lg-3 col-sm-auto">
                                <a href="<?= base_url('admin'); ?>/menu_add" class="btn btn-primary btn-labeled" style="width: 100%;">
                                    <span class="btn-label icon fa fa-plus"></span>
                                    Добавить Пункт Меню
                                </a>
                            </div>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 ">  

                <!--NAV START -->

                <div class="row">               
                    <div class="col-lg-12">
                        <h4 class="page-header">
                            Меню покупателя
                            <small>Menu for buyer</small>
                        </h4>  
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  Меню покупателя
                            </li>                        
                        </ol>                    
                    </div>                 
                </div>
                <nav id="cabinet-navigation">
                    <ul id="main-nav" class="clearfix">                           
                        <?php
                        foreach ($menu_buyer as $item => $arr) {
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
                
                <div class="row">               
                    <div class="col-lg-12">
                        <h4 class="page-header">
                            Меню продавца
                            <small>Menu for seller</small>
                        </h4>  
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  Меню продавца
                            </li>                        
                        </ol>                    
                    </div>                 
                </div>
                <nav id="cabinet-navigation">
                    <ul id="main-nav" class="clearfix">                           
                        <?php
                        foreach ($menu_seller as $item => $arr) {
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
            <!--NAV END -->
            <form action="edit_menu" method="POST" class="form-submit">
                <!--TABLE NAV START -->
                <div class="row">               
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Меню 1-го уровня
                            <small>Menu 1-st level</small>
                        </h1>  
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>Меню 1-го уровня
                            </li>                        
                        </ol>                    
                    </div>                 
                </div>
                <div class="col-lg-12">

                    <table class='col-lg-6 table-bordered table-responsive table'>
                        <tbody>
                        <thead>
                        <th>
                            #id
                        </th>
                        <th class='col-lg-6'>
                            Название
                        </th>  
                        <th class='col-lg-3'>                   
                            Доступно для
                        </th>  
                        <th class='col-lg-1'>
                            Редактировать
                        </th>  
                        <th class='col-lg-1'>
                            Удалить
                        <th class='col-lg-1'>                   
                            Скрыть
                        </th>  
                        </thead>
                        <?php
                        foreach ($fst_level as $item) {
                            if ($item['status'] == 'enable') {
                                $btn_name = '<i class = "fa fa-eye-slash"></i> Скрыть';
                            } else {
                                $btn_name = '<i class = "fa fa-eye"></i> Показать';
                            }
                            if ($item['owner'] == 'admin') {
                                $dis = 'disabled';
                            } else {
                                $dis = '';
                            }
                            if( $item['access'] == 1)
                                $access="Покупатель";
                            if( $item['access'] ==2)
                                $access="Продавец";
                            if( $item['access'] ==3)
                                $access="Всем";
                            ?>
                            <tr>
                                <td>
                                    <?= $item['id'] ?> <input class="" type='checkbox' name="id[<?= $item['id'] ?>]" value="<?= $item['id'] ?>"/>
                                    <input  type='text' name="link[<?= $item['id'] ?>]" value=" <?= $item['link'] ?>" hidden=""/>
                                    <input  type='text' name="parent[<?= $item['id'] ?>]" value=" <?= $item['p_id'] ?>" hidden=""/>
                                    <input  type='text' name="parent2[<?= $item['id'] ?>]" value=" <?= $item['p_id2'] ?>" hidden=""/>
                                </td>
                                <td><input class="form-control" type='text' name="name[<?= $item['id'] ?>]" value="<?= $item['name'] ?>"/></td>   
                                <td><input class="form-control" type='text' name="access[<?= $item['id'] ?>]" value="<?= $access?>"/></td>
                                <td><button class="btn btn-success" type='submit' name="edit[<?= $item['id'] ?>]" value="<?= $item['id'] ?>"><i class="fa fa-pencil"></i> Редактировать</button></td>
                                <td><button class="btn btn-danger"type='submit' name="delete[<?= $item['id'] ?>]" value="<?= $item['id'] ?>" <?= $dis ?>><i class="fa fa-trash-o"></i> Удалить</button></td>
                                <td><button class = "btn btn-default"type = 'submit' name = "status[<?= $item['id'] ?>]" value = "<?= $item['status'] ?>"><?= $btn_name ?></button></td>   
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>

                </div> 
                <div class="row">               
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Меню 2-го уровня
                            <small>Menu 2-nd level</small>
                        </h1>  
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>Меню 2-го уровня
                            </li>                        
                        </ol>                    
                    </div>                 
                </div>
                <div class="col-lg-12">

                    <table class='col-lg-6 table-bordered table-responsive table'>
                        <tbody>
                        <thead>
                        <th>
                            #id
                        </th>
                        <th class='col-lg-4'>
                            Название
                        </th>
                        <th class='col-lg-4'>
                            Родитель
                        </th>  
                        <th class='col-lg-4'>
                            Ссылка
                        </th>  
                        <th >
                            Редактировать
                        </th>  
                        <th >
                            Удалить
                        <th>                   
                            Скрыть
                        </th>  
                        </thead>
                        <?php
                        foreach ($scnd_level as $item) {
                            if ($item['status'] == 'enable') {
                                $btn_name = '<i class = "fa fa-eye-slash"></i> Скрыть';
                            } else {
                                $btn_name = '<i class = "fa fa-eye"></i> Показать';
                            }
                            if ($item['owner'] == 'admin') {
                                $dis = 'disabled';
                            } else {
                                $dis = '';
                            }
                            ?>
                            <tr>
                                <td>
                                    <?= $item['id'] ?> <input class="" type='checkbox' name="id[<?= $item['id'] ?>]" value="<?= $item['id'] ?>"/>                                  
                                    <input  type='text' name="parent2[<?= $item['id'] ?>]" value=" <?= $item['p_id2'] ?>" hidden=""/>
                                </td>
                                <td><input class="form-control" type='text' name="name[<?= $item['id'] ?>]" value="<?= $item['name'] ?>"/></td>   
                                <td>
                                    <select class = "form-control" name = "parent[<?= $item['id'] ?>]" >
                                        <?php
                                        foreach ($fst_level as $id) {
                                            if ($id['id'] == $item['p_id']) {
                                                ?>
                                                <option value = "<?= $item['p_id'] ?>"><?= $id['name'] ?></option>
                                                <?php
                                            }
                                        }
                                        foreach ($fst_level as $id) {
                                            if ($id['id'] != $item['p_id']) {
                                                ?>
                                                <option value = "<?= $id['id'] ?>"><?= $id['name'] ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td><input class="form-control" type='text' name="link[<?= $item['id'] ?>]" value="<?= $item['link'] ?>"/></td> 
                                <td><button class="btn btn-success" type='submit' name="edit[<?= $item['id'] ?>]" value="<?= $item['id'] ?>"><i class="fa fa-pencil"></i> Редактировать</button></td>
                                <td><button class="btn btn-danger"type='submit' name="delete[<?= $item['id'] ?>]" value="<?= $item['id'] ?>" <?= $dis ?>><i class="fa fa-trash-o"></i> Удалить</button></td>
                                <td><button class = "btn btn-default"type = 'submit' name = "status2[<?= $item['id'] ?>]" value = "<?= $item['status'] ?>"><?= $btn_name ?></button></td>   
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>

                </div>  
                <div class="row">               
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Меню 3-го уровня
                            <small>Menu 3-rd level</small>
                        </h1>  
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>Меню 3-го уровня
                            </li>                        
                        </ol>                    
                    </div>                 
                </div>
                <div class="col-lg-12">

                    <table class='col-lg-6 table-bordered table-responsive table'>
                        <tbody>
                        <thead>
                        <th>
                            #id
                        </th>
                        <th class='col-lg-4'>
                            Название
                        </th>
                        <th class='col-lg-4'>
                            Родитель
                        </th>  
                        <th class='col-lg-4'>
                            Ссылка
                        </th>  
                        <th >
                            Редактировать
                        </th>  
                        <th >
                            Удалить
                        <th>                   
                            Скрыть
                        </th>  
                        </thead>
                        <?php
                        foreach ($trd_level as $item) {
                            if ($item['status'] == 'enable') {
                                $btn_name = '<i class = "fa fa-eye-slash"></i> Скрыть';
                            } else {
                                $btn_name = '<i class = "fa fa-eye"></i> Показать';
                            }
                            if ($item['owner'] == 'admin') {
                                $dis = 'disabled';
                            } else {
                                $dis = '';
                            }
                            ?>
                            <tr>
                                <td>
                                    <?= $item['id'] ?> <input class="" type='checkbox' name="id[<?= $item['id'] ?>]" value="<?= $item['id'] ?>"/>
                                    <input  type='text' name="parent[<?= $item['id'] ?>]" value=" <?= $item['p_id'] ?>" hidden=""/>
                                </td>
                                <td><input class="form-control" type='text' name="name[<?= $item['id'] ?>]" value="<?= $item['name'] ?>"/></td>    
                                <td>
                                    <select class = "form-control" name = "parent2[<?= $item['id'] ?>]" >
                                        <?php
                                        foreach ($scnd_level as $id) {
                                            if ($id['id'] == $item['p_id2']) {
                                                ?>
                                                <option value = "<?= $item['p_id2'] ?>"><?= $id['name'] ?></option>
                                                <?php
                                            }
                                        }
                                        foreach ($scnd_level as $id) {
                                            if ($id['id'] != $item['p_id2']) {
                                                ?>
                                                <option value = "<?= $id['id'] ?>"><?= $id['name'] ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>  
                                <td><input class="form-control" type='text' name="link[<?= $item['id'] ?>]" value="<?= $item['link'] ?>"/></td> 
                                <td><button class="btn btn-success" type='submit' name="edit[<?= $item['id'] ?>]" value="<?= $item['id'] ?>"><i class="fa fa-pencil"></i> Редактировать</button></td>
                                <td><button class="btn btn-danger"type='submit' name="delete[<?= $item['id'] ?>]" value="<?= $item['id'] ?>"<?=$dis?>><i class="fa fa-trash-o"></i> Удалить</button></td>
                                <td><button class = "btn btn-default"type = 'submit' name = "status3[<?= $item['id'] ?>]" value = "<?= $item['status'] ?>"><?= $btn_name ?></button></td>   
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>

                </div> 
                <!--TABLE NAV END -->
            </form>
            
            

        </div> 
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

