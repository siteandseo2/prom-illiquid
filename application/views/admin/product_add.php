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

            <div class="col-lg-6 tab_margin_top">               
                <form action="add_product" method="POST" class="form-submit" enctype="multipart/form-data">
                    <label>Название</label>
                        <input class='form-control' name='name' placeholder="Например Отопление (Максимум 250 символов)" type='text'/>
                    <label>Группа товара</label>
                    <select class='form-control' name='group' id="prod_group">
                        <option value="default">Выберите Группу</option>
                        <?php
                        foreach ($fpl as $item) {
                            ?>
                            <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <label>Категория товара</label>
                    <select class='form-control' name='cat_id' id="prod_cat">
                       
                    </select>
                    <label>Подкатегория товара</label>
                    <select class='form-control' name='subcat_id' id="prod_subcat">
                        
                    </select>
                    <p>
                        <label for="prod_type">
                            Тип <span class="required">*</span>
                        </label>
                        <select id="prod_type" name="prod_type" class="cabinet-form-input">
                            <option value="default">Выберите тип</option>
                            <option value="retail_only">Товар продается только в розницу</option>
                            <option value="wholesele_only">Товар продается только в оптом</option>
                            <option value="wholesele_and_retail">Товар продается и оптом и в розницу</option>
                            <option value="service">Услуга</option>
                        </select>
                    </p>

                    <p>                                            
                        <label>Краткое описание товара</label>
                        <textarea class='form-control' name='s_description' type='text' rows="8"></textarea>                    
                        <label>Полное описание товара</label>
                        <textarea class='form-control' name='description' type='text' rows="8"></textarea>  
                    <div class='tab_margin_top'>
                        <button class="btn btn-info" type='submit' name="add_product" value=""><i class="fa fa-save"></i> Сохранить</button>
                        <button class="btn btn-danger" type='reset' name="reset" value=""><i class="fa fa-remove"></i> Сбросить</button>
                    </div>
            </div>
            <div class="col-lg-3 tab_margin_top">     
                <p>
                    <label for="">
                        Цена
                    </label>
                <div class="setPrice">
                    <input type="text" name="price" id="prod_price" class="cabinet-form-input">
                    <select name="prod_currency" class="cabinet-form-input">
                        <option value="uah">Грн.</option>
                        <option value="dollar">$</option>
                        <option value="rub">Руб.</option>
                    </select>
                    <span class="separator"> за </span>
                    <select name="prod_quantity" class="cabinet-form-input">
                        <option value="one">Шт.</option>
                        <option value="hundred">100 Шт.</option>
                        <option value="ten">10 Шт.</option>
                        <option value="box">Упаковка</option>
                        <option value="thousand">Тысяча</option>
                    </select>
                </div>
                </p> 
                <p>
                    <label for="prod_is_available">
                        Есть в наличии
                    </label>
                    <select id="prod_is_available" name="prod_is_available" class="cabinet-form-input">
                        <option value="yes">В наличии</option>
                        <option value="no">Нет в наличии</option>
                        <option value="order">Под заказ</option>
                    </select>
                </p>

                <p>
                    <label for="prod_code">
                        Код
                    </label>
                    <input type="text" id="prod_code" name="prod_code" class="cabinet-form-input">
                </p>
                <label>Статус</label>
                <select class='form-control ' name='status'>
                    <option value='enable'>Показывать</option>
                    <option value='disable'>Скрывать</option>
                </select>
                <label>Фото</label>
                <input class='' name='prod_photo'  type='file'/>  

            </div>        

            </form>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


