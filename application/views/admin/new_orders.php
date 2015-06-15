<div id="wrapper">

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">               
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Заказы
                        <small>Order</small>

                    </h1>  
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?= base_url(); ?>admin/index">Главная</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Заказы
                        </li>
                    </ol>                    
                </div>                 
            </div>
            <!-- /.row -->

            <div class="col-lg-12 tab_margin_top">               
                <form action="" method="POST" class="form-submit">
                    <table class='col-lg-12 table-bordered table-responsive table'>
                        <tbody>
                        <thead>
                        <th >
                            #id
                        </th>
                        <th class='col-lg-3'>
                            Наименование
                        </th>
                        <th class='col-lg-2'>
                            Покупатель
                        </th>
                        <th class='col-lg-2'>
                            Продавец
                        </th>
                        <th  class='col-lg-1'>
                            Цена
                        </th>
                        <th class='col-lg-2'>
                            Дата
                        </th>  
                        <th>
                            Cтатус
                        </th> 

                        </thead>
                        <?php
                        foreach ($order as $item) {
                            if ($item['a_status'] == 'new') {
                                $style = 'style="background-color : rgba(171, 222, 249, 0.48);"';
                            } else {
                                $style = '';
                            }
                            $buyer_data = unserialize($item['buyer_data']);
                            $adress = unserialize($item['adress']);
                            ?>
                            <tr <?= $style ?>>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['name'] ?></td>
                                <td>
                                    <?foreach ($buyer_data as $data){
                                    echo $data.'<br>';
                                    }
                                    foreach ($adress as $data){
                                    echo $data.'<br>';
                                    }
                                    ?>
                                </td>
                                <td><?= $item['seller_data'] ?></td>                                
                                <td><?= $item['price'] ?> <?= $item['currency'] ?></td>                            
                                <td><?= $item['date'] ?> </td>
                                <td>
                                    <div class='btn-sm btn-info '><?= $item['status'] ?> </div>
                                </td>

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


