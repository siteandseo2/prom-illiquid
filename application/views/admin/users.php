<div id="wrapper">

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Пользователи
                        <small>Users</small>
                    </h1>  
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?= base_url(); ?>admin/index">Главная</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Пользователи
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div class="col-lg-12">
                <table class='col-lg-12 table-bordered table-responsive table'>
                    <tbody>
                    <thead>
                    <th>
                        #id
                    </th>
                    <th>
                        Фамилия 
                    </th>
                    <th>
                        Имя
                    </th>
                    <th>
                        Отчество
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Тип Пользователя
                    </th>
                    <th>
                        Компания
                    </th>
                    </thead>
                    <?php
                    foreach ($user as $item) {
                        ?>
                        <tr>
                            <td><?= $item['id'] ?></td>
                            <td><?= $item['surname'] ?></td>
                            <td><?= $item['name'] ?></td>
                            <td><?= $item['patronymic'] ?></td>
                            <td><?= $item['email'] ?></td>
                            <td><?= $item['usercat'] ?></td>
                            <td><?= $item['company'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

