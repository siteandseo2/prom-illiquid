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
                    <label>Статус</label>
                    <select class='form-control ' name='status'>
                        <option value='enable'>Показывать</option>
                        <option value='disable'>Скрывать</option>
                    </select>
                    <div class="radio-block">
                        <label>Состояние</label>
                        <div>
                            <span>Новое</span>
                            <input type="radio" name="condition" id="prod_condition1" value="Новое" checked>
                            <span>Б/у</span>
                            <input type="radio" name="condition" id="prod_condition2" value="Б/у">
                        </div>
                        <div>
                            <label>Оцените по шкале</label>
                            <input type="text" class="amount" name='ball' readonly data-value="" value="">
                            <input type="hidden" id="range_hidden" value="">
                            <div id="slider-range-max"></div>
                        </div>
                    </div>

                    <div>
                        <label>
                            Цена
                        </label>
                        <div class="setPrice">
                            <input type="text" name="price" id="prod_price" class="cabinet-form-input add-prod-name">
                            <select name="currency" class="cabinet-form-input add-prod-name">
                                <option value="Грн.">Грн.</option>
                                <option value="USD">USD</option>
                                <option value="Руб.">Руб.</option>
                            </select>
                            <span class="separator"> за </span>
                            <select name="quantity" class="cabinet-form-input add-prod-name">
                                <option value="Шт.">Шт.</option>
                                <option value="100 Шт.">100 Шт.</option>
                                <option value="10 Шт.">10 Шт.</option>
                                <option value="Упаковку">Упаковка</option>
                                <option value="Тысячу">Тысяча</option>
                            </select>
                        </div>
                    </div> 
                    <p>
                        <label for="min_order">Минимальный заказ</label>
                        <input type="checkbox" id="check_min_order">
                        <input type="text" name="min_order" id="min_order" class="cabinet-form-input">
                    </p>
                    <div class='tab_margin_top'>
                        <button class="btn btn-info" type='submit' name="add_product" value=""><i class="fa fa-save"></i> Сохранить</button>
                        <button class="btn btn-danger" type='reset' name="reset" value=""><i class="fa fa-remove"></i> Сбросить</button>
                    </div>
            </div>



            <div class="col-lg-6 tab_margin_top">   

                <p>
                    <label for="code">
                        Код
                    </label>
                    <input type="text" id="prod_code" name="code" class="cabinet-form-input">
                </p>

                <p>
                    <label for="description">
                        Описание <span class="required">*</span>
                    </label>
                    <textarea class="cabinet-form-input" name="description" id="prod_description" cols="15" rows="6"></textarea>
                </p>

                <p>
                    <label for="prod_photo">
                        Фото
                    </label>
                    <input type="file" id="prod_photo_1" name="prod_photo_1" accept="image/*">
                    <input type="file" id="prod_photo_2" name="prod_photo_2" accept="image/*">
                    <input type="file" id="prod_photo_3" name="prod_photo_3" accept="image/*">
                    <input type="file" id="prod_photo_4" name="prod_photo_4" accept="image/*">
                </p>



            </div>        

            </form>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


