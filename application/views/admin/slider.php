<div id="wrapper">

    <div id="page-wrapper">

        <div class="container-fluid">
            <div class="row ">  
                <div class="col-lg-12">
                    <div class="pull-left col-lg-12 col-sm-auto">
                        <h1 class="page-header">
                            Слайдер
                            <small>Slider</small>

                            <div class="pull-right col-lg-4 col-sm-auto">
                                <a href="<?= base_url('admin'); ?>/slide_add" class="btn btn-primary btn-labeled" style="width: 100%;">
                                    <span class="btn-label icon fa fa-plus"></span>
                                    Добавить изображение в слайдер
                                </a>
                            </div>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?= base_url(); ?>admin/index">Главная</a>
                            </li>
                            <li>
                                <i class="fa fa-dashboard"></i>Слайдер
                            </li>                        
                        </ol>          
                    </div> 
                </div> 
            </div> 
            <form action="<?= base_url('admin') . '/slider' ?>" method="POST"  class="form-submit validate-form" enctype="multipart/form-data">

                <div class='form-container col-lg-10'>
                    <div class='col-lg-3'>
                        <h5><label>Загружается Первым:</label></h5>
                    </div>
                    <div class='col-lg-5'>                        
                        <select class='form-control ' name="act" id='slider_adm'>
                            <?php
                            foreach ($slider as $item) {
                                if ($item['act'] == '1') {
                                    ?>
                                    <option  value="<?= $item['id'] ?>">Картинка с ID: <?= $item['id'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                            <?php
                            foreach ($slider as $item) {
                                if ($item['act'] != '1' && $item['status'] != 'disable') {
                                    ?>
                                    <option value="<?= $item['id'] ?>">Картинка с ID: <?= $item['id'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class='col-lg-3'>
                        <input type='submit' value='Применить' name="first" class='btn btn- btn-info '>
                    </div>
                </div>

                <table class='col-lg-6 table-bordered table-responsive table'>
                    <tbody>
                    <thead>
                    <th>
                        #id
                    </th>
                    <th class='col-lg-3'>
                        Картинка
                    </th>    
                    <th class='col-lg-2'>
                        Заглавие
                    </th>      
                    <th class='col-lg-4'>
                        Описание
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
                    foreach ($slider as $item) {
                        if ($item['status'] == 'enable') {
                            $btn_name = '<i class = "fa fa-eye-slash"></i> Скрыть';
                        } else {
                            $btn_name = '<i class = "fa fa-eye"></i> Показать';
                        }
                        if ($item['act'] == '1') {
                            $status = 'disabled';
                        } else {
                            $status = '';
                        }
                        ?>      
                        <tr>                                  
                            <td><?= $item['id'] ?></td>
                            <td><img src='<?= $item['path'] ?>' alt='' class='col-lg-12'></td>
                            <td><input class="form-control" type="text" value="<?= $item['header'] ?>" name="name[<?= $item['id'] ?>]"></td>  
                            <td><textarea rows='9' class="form-control"  name="text[<?= $item['id'] ?>]"><?= $item['text'] ?></textarea></td>  
                            <td><button class="btn btn-success" type='submit' name="edit[<?= $item['id'] ?>]" value="<?= $item['id'] ?>"><i class="fa fa-pencil"></i> Редактировать</button></td>
                            <td><button class="btn btn-danger"type='submit' name="delete[<?= $item['id'] ?>]" <?= $status ?> value="<?= $item['id'] ?>" ><i class="fa fa-trash-o"></i> Удалить</button></td>
                            <td><button class = "btn btn-default"type = 'submit' name = "status[<?= $item['id'] ?>]" <?= $status ?> value = "<?= $item['status'] ?>"><?= $btn_name ?></button></td>   
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </form>
        </div> 
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->



