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

            <div class="col-lg-6 tab_margin_top">               
                <form action="add_product" method="POST" class="form-submit" enctype="multipart/form-data">
                    <label>Название</label>
                    <input class='form-control' name='name' placeholder="Например МОЙ КАБИНЕТ (Максимум 25 символов)" type='text'/>
                    <label>Тип</label>
                    <select class='form-control' name='group' id="menu_type">
                        <option value="default">Выберите Тип</option>
                        <option value="1">Пункт меню 1-го уровня</option>
                        <option value="2">Пункт меню 2-го уровня</option>
                        <option value="3">Пункт меню 3-го уровня</option>
                    </select>
                    <label>Выберите Пункт Меню Родителя</label>
                    <select class='form-control' name='menu_parent' id="menu_parent">

                    </select>  
                    <div class='tab_margin_top'>
                        <button class="btn btn-info" type='submit' name="add_product" value=""><i class="fa fa-save"></i> Сохранить</button>
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


