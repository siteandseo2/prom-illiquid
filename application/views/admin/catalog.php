<div id="wrapper">

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Категории
                        <small>Category</small>
                    </h1>  
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?= base_url(); ?>admin/index">Главная</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Категории
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div class="col-lg-12">
                <form action="edit_category" method="POST" class="form-submit">
                    <table class='col-lg-12 table-bordered table-responsive table'>
                        <tbody>
                        <thead>
                        <th class='col-lg-1'>
                            #id
                        </th>
                        <th class='col-lg-8'>
                            Название
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
                        foreach ($cat_list as $item) {
                            if($item['type']=='enable'){
                                $btn_name='<i class = "fa fa-eye-slash"></i> Скрыть';
                            }else{
                                $btn_name='<i class = "fa fa-eye"></i> Показать';
                            }
                            ?>
                            <tr>
                                <td><?= $item['id'] ?> <input class="" type='checkbox' name="id[<?= $item['id'] ?>]" value="<?= $item['id'] ?>"/></td>
                                <td><input class="form-control" type='text' name="cat[<?= $item['id'] ?>]" value="<?= $item['name'] ?>"/></td>
                                <td><button class="btn btn-success" type='submit' name="edit[<?= $item['id'] ?>]" value="<?= $item['id'] ?>"><i class="fa fa-pencil"></i> Редактировать</button></td>
                                <td><button class="btn btn-danger"type='submit' name="delete[<?= $item['id'] ?>]" value="<?= $item['id'] ?>"><i class="fa fa-trash-o"></i> Удалить</button></td>
                                <td><button class = "btn btn-default"type = 'submit' name = "type[<?= $item['id'] ?>]" value = "<?= $item['type'] ?>"><?=$btn_name?></button></td>   
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

<!-- jQuery -->
<script src="<?= base_url(); ?>../../../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url(); ?>../../../js/bootstrap.min.js"></script>

</body>

</html>
