<div id="wrapper">

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">               
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Подкатегории
                        <small>Subcategories</small>

                    </h1>  
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?= base_url(); ?>admin/index">Главная</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Подкатегории
                        </li>
                    </ol>                    
                </div>                 
            </div>
            <!-- /.row -->
           <div class="row well" id="prod-nav-bar">

                <!-- Filters -->
                <form action='<?=base_url('admin/filter_cat')?>' method='POST'/>
                <!--<div class="col-sm-9 prod-nav-filters">-->

                    <p class="col-sm-12">
                        <h2 class="col-sm-12 prod-nav-head">Фильтры</h2>
                    </p>

                    <div class="col-lg-12 btn-group">
                        <h4>Категория</h4>
                        <select name="data_cat" class="btn btn-sm" >
                            <option value="default">Выберите категорию</option>
                            <?php
                            foreach ($cat_list as $item) {
                                ?>
                                <option value = "<?= $item['id'] ?>"><?= $item['name'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <input type="submit" id="prod-nav-apply" name='filter' class="btn btn-sm btn-success" value="Применить" style="padding: 4px;"> 
                    </div>
                <!--</div>-->
                </form>

                <p class="pull-right col-lg-3 col-sm-auto">
                    <a href="<?= base_url('admin'); ?>/subcategorues_add" class="btn btn-primary btn-labeled" style="width: 100%;">
                        <span class="btn-label icon fa fa-plus"></span>
                        Добавить подкатегорию
                    </a>
                </p>
            </div>
            <div class="col-lg-12 tab_margin_top">               
                <form action="" method="POST" class="form-submit">
                    <table class='col-lg-12 table-bordered table-responsive table'>
                        <tbody>
                        <thead>
                        <th >
                            #id
                        </th>
                        <th class='col-lg-3'>
                            Название
                        </th>
                        <th >
                            Фото 
                        </th>
                        <th class='col-lg-3'>
                            Ссылка <?= base_url('catalog') ?>/
                        </th>
                        <th class='col-lg-3'>
                            Категория товаров
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
                        foreach ($subcategories_list as $item) {
                            if ($item['status'] == 'enable') {
                                $btn_name = '<i class = "fa fa-eye-slash"></i> Скрыть';
                            } else {
                                $btn_name = '<i class = "fa fa-eye"></i> Показать';
                            }
                            ?>
                            <tr>
                                <td><?= $item['id'] ?> <input class="" type='checkbox' name="id[<?= $item['id'] ?>]" value="<?= $item['id'] ?>"/></td>
                                <td><input class="form-control" type='text' name="cat[<?= $item['id'] ?>]" value="<?= $item['name'] ?>"/></td>
                                <td><img src='<?= $item['image_path'] ?>' width="40" alt=""></td>
                                <td><input class="form-control" type='text' name="link[<?= $item['id'] ?>]" value="<?= $item['link'] ?>"/></td>                                
                                <td>
                                    <select class='form-control' name='cat_product[<?= $item['id'] ?>]'>                                        
                                        <?php
                                        foreach ($cat_list as $items) {
                                            if ($item['cat_id'] == $items['id']) {
                                                ?>
                                                <option value="<?= $items['id'] ?>"><?= $items['name'] ?></option>
                                                <?php
                                            }
                                        }
                                        foreach ($cat_list as $items) {
                                            if ($item['cat_id'] != $items['id']) {
                                                ?>
                                                <option value="<?= $items['id'] ?>"><?= $items['name'] ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td><button class="btn btn-success" type='submit' name="edit[<?= $item['id'] ?>]" value="<?= $item['id'] ?>"><i class="fa fa-pencil"></i> Редактировать</button></td>
                                <td><button class="btn btn-danger"type='submit' name="delete[<?= $item['id'] ?>]" value="<?= $item['id'] ?>"><i class="fa fa-trash-o"></i> Удалить</button></td>
                                <td><button class = "btn btn-default"type = 'submit' name = "status[<?= $item['id'] ?>]" value = "<?= $item['status'] ?>"><?= $btn_name ?></button></td>   
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

