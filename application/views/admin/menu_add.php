<div id="wrapper">

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">               
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Добавить пункт меню
                        <small>Add menu item </small>
                    </h1>  
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?= base_url(); ?>admin/index">Главная</a>
                        </li>
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?= base_url(); ?>admin/main">Главная страница</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i>Добавить пункт меню
                        </li>
                    </ol>                    
                </div>                 
            </div>
            <!-- /.row -->

            <div class="col-lg-6 tab_margin_top " >               
                <form action="add_item_menu" method="POST" class="form-submit" enctype="multipart/form-data">
                    <label>Название</label>
                    <input class='form-control' name='name' placeholder="Например МОЙ КАБИНЕТ (Максимум 25 символов)" type='text'/>
                    <label>Статус</label>
                    <select class='form-control ' name='status'>
                        <option value='enable'>Показывать</option>
                        <option value='disable'>Скрывать</option>
                    </select>
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
                    
                    <div class="form-inline tab_margin_top" >   
                        <label class="">Не является родителем</label>
                        <input type="checkbox" class="checkbox" id="change_type" disabled="disabled">
                    </div>
                    
                    <label>Ccылка</label>
                    <input class='form-control' name='link' placeholder="Например account (Максимум 25 символов)" type='text' disabled="disabled" id="page_url">

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


