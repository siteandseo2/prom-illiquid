<div id="wrapper">

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">               
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Добавить товар
                        <small>Add product</small>
                    </h1>  
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?= base_url(); ?>admin/index">Главная</a>
                        </li>
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?= base_url(); ?>admin/products">Товары</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Добавить товар
                        </li>
                    </ol>                    
                </div>                 
            </div>
            <!-- /.row -->
            
            <div class="col-lg-12 tab_margin_top">               
                <form action="add_product" method="POST" class="form-submit" enctype="multipart/form-data">
                    <label>Подкатегория товара</label>
                    <select class='form-control' name='subcat_id'>
                        <?php
                        foreach ($list as $item) {
                            ?>
                        <option value="<?=$item['id']?>"><?=$item['name']?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <label>Название</label>
                    <input class='form-control' name='name' placeholder="Например Отопление (Максимум 250 символов)" type='text'/>
                    <label>Цена</label>
                    <input class='form-control' name='price' placeholder="Например 300 (Максимум 20 символов)" type='text'/>
                    <label>Краткое описание товара</label>
                    <textarea class='form-control' name='s_description' type='text' rows="8"></textarea>                    
                    <label>Полное описание товара</label>
                    <textarea class='form-control' name='description' type='text' rows="8"></textarea>
                    <label>Ссылка</label>
                    <input class='form-control' name='link' placeholder="Например otoplenie (Максимум 50 символов)" type='text'/>
                    <label>Фото</label>
                    <input class='' name='photo'  type='file'/>                    
                    <label>Статус</label>
                    <select class='form-control ' name='status'>
                        <option value='enable'>Показывать</option>
                        <option value='disable'>Скрывать</option>
                    </select>
                    <div class='tab_margin_top'>
                        <button class="btn btn-info" type='submit' name="add_product" value=""><i class="fa fa-save"></i> Сохранить</button>
                        <button class="btn btn-danger" type='reset' name="reset" value=""><i class="fa fa-remove"></i> Сбросить</button>
                    </div>

                </form>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


