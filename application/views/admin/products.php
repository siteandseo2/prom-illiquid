<div id="wrapper">

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">               
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Товары
                        <small>Products</small>
                    </h1>  
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?= base_url(); ?>admin/index">Главная</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Товары
                        </li>
                    </ol>                    
                </div>                 
            </div>

            <!-- Menu -->
            <form action='subcat' method='POST'/>
            <div class="row well" id="prod-nav-bar">

                <!-- Filters -->

                <div class="col-sm-9 prod-nav-filters">

                    <div class="col-sm-12">
                        <h2 class="col-sm-12 prod-nav-head">Фильтры</h2>
                    </div>

                    <div class="col-sm-5">
                        <h4>Категория</h4>
                        <select id="_prod_cat" class="form-control">
                            <option value="default">Выберите категорию</option>
                            <?php
                            foreach ($category as $item) {
                                ?>
                                <option value = "id=<?= $item['id'] ?>"><?= $item['name'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-sm-5">
                        <h4>Подкатегория</h4>
                        <select id="_prod_subcat" class="form-control" name='subcat_id' disabled="disabled">                       
                        </select>
                    </div>

                    <div class="col-sm-2">
                        <input type="submit" id="prod-nav-apply" name='filter' class="btn btn-success" value="Применить"> 
                    </div>

                </div>


                <div class="pull-right col-lg-3 col-sm-auto">
                    <a href="<?= base_url('admin'); ?>/product_add" class="btn btn-primary btn-labeled" style="width: 100%;">
                        <span class="btn-label icon fa fa-plus"></span>
                        Добавить товар
                    </a>
                </div>

            </div>
            </form>
            <!-- Menu end -->

            <div class="col-lg-12 tab_margin_top">               
                <form action="" method="POST" class="form-submit">
                    <table class='col-lg-12 table-bordered table-responsive table'>
                        <tbody>
                        <thead>
                        <th >
                            #id
                        </th>
                        <th class='col-lg-5'>
                            Название
                        </th>
                        <th class=''>
                            Фото
                        </th>
                        <th class='col-lg-3'>
                            Ссылка <?= base_url('catalog') ?>/
                        </th>
                        <th class='col-lg-4'>
                            Подкатегория товаров
                        </th>
                        <th class=''>
                            Редактировать
                        </th>  
                        <th class=''>
                            Удалить
                        <th class=''>                    
                            Скрыть
                        </th>  
                        </thead>
                        <?php
                        foreach ($list as $item) {
                            if ($item['status'] == 'enable') {
                                $btn_name = '<i class = "fa fa-eye-slash"></i> Скрыть';
                            } else {
                                $btn_name = '<i class = "fa fa-eye"></i> Показать';
                            }
                            ?>
                            <tr>
                                <td><?= $item['id'] ?> <input class="" type='checkbox' name="id[<?= $item['id'] ?>]" value="<?= $item['id'] ?>"/></td>
                                <td><input class="form-control" type='text' name="cat[<?= $item['id'] ?>]" value="<?= $item['name'] ?>"/></td>
                                <td><img src="<?= $item['image_path'] ?>" width="40"></td>
                                <td><input class="form-control" type='text' name="link[<?= $item['id'] ?>]" value="<?= $item['link'] ?>"/></td>
                                <td>
                                    <select class='form-control' name='subcat_product[<?= $item['id'] ?>]'>                                        
                                        <?php
                                        foreach ($subcat as $items) {
                                            if ($item['subcat_id'] == $items['id']) {
                                                ?>
                                                <option value="<?= $items['id'] ?>"><?= $items['name'] ?></option>
                                                <?php
                                            }
                                        }
                                        foreach ($subcat as $items) {
                                            if ($item['subcat_id'] != $items['id']) {
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

