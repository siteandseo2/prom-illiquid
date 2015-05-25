<div id="wrapper">

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">               
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Добавить категорию
                        <small>Add category</small>
                    </h1>  
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?= base_url(); ?>admin/index">Главная</a>
                        </li>
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?= base_url(); ?>admin/catalog">Категории</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Добавить категорию
                        </li>
                    </ol>                    
                </div>                 
            </div>
            <!-- /.row -->

            <div class="col-lg-12 tab_margin_top">               
                <form action="add_category" method="POST" class="form-submit">
                    <label>Направление</label>
                    <select class='form-control' name='focus_product'>
                        <?php
                        foreach ($fpl as $item) {
                            ?>
                        <option value="<?=$item['id']?>"><?=$item['name']?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <label>Название</label>
                    <input class='form-control' name='name' placeholder="Например Отопление (Максимум 250 символов)" type='text'/>
                    <label>Ссылка</label>
                    <input class='form-control' name='link' placeholder="Например otoplenie (Максимум 50 символов)" type='text'/>
                    <label>Позиция</label>
                    <input class='form-control' name='position' placeholder="<?= count($cat_list) + 1 ?>" type='text' disabled=""/>
                    <label>Статус</label>
                    <select class='form-control ' name='status'>
                        <option value='enable'>Показывать</option>
                        <option value='disable'>Скрывать</option>
                    </select>
                    <div class='tab_margin_top'>
                        <button class="btn btn-info" type='submit' name="add_category" value=""><i class="fa fa-save"></i> Сохранить</button>
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

<!-- jQuery -->
<script src="<?= base_url(); ?>../../../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url(); ?>../../../js/bootstrap.min.js"></script>


