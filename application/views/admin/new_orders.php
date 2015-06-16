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
                <form action="order_status" method="POST" class="form-submit">
                    <table class='col-lg-12 table-bordered table-responsive table'>
                        <tbody>
                        <thead>
                        <th >
                            #id
                        </th>
                        <th class='col-lg-2'>
                            Наименование
                        </th>
                        <th class='col-lg-5'>
                            Покупатель/Продавец
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
                            $seller_data = unserialize($item['seller_data']);
                            ?>
                            <tr <?= $style ?>>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['name'] ?></td>
                                <td>
                                    <h4>Покупатель:</h4>
                                    <?
                                    echo '<label>Имя: </label>  '.$buyer_data['name'].'<br>';
                                    echo '<label>Фамилия: </label> '.$buyer_data['surname'].'<br>';
                                    echo '<label>Электронная почта: </label>  '.$buyer_data['email'].'<br>';                                   
                                    echo '<label>Телефон:</label> '.$buyer_data['phone'].'<br>';
                                    echo '<label>Область:</label> '.$adress['location'].'<br>';
                                    echo '<label>Город:</label> '.$adress['city'].'<br>';                                    
                                    ?>
                                    <h4>Продавец:</h4>
                                    <?
                                    echo '<label>Имя: </label>  '.$seller_data['name'].'<br>';
                                    echo '<label>Фамилия: </label> '.$seller_data['surname'].'<br>';
                                    echo '<label>Электронная почта: </label>  '.$seller_data['email'].'<br>';                                   
                                    echo '<label>Телефон:</label> '.$seller_data['phone'].'<br>';
                                    echo '<label>Cтрана:</label> '.$seller_data['country'].'<br>';
                                    echo '<label>Город:</label> '.$seller_data['city'].'<br>';  
                                    echo '<label>Улица:</label> '.$seller_data['street'].' <label>Дом</label> '.$seller_data['building'].'<br>'; 
                                    
                                    ?>
                                </td>                                                     
                                <td><?= $item['price'] ?> <?= $item['currency'] ?></td>                            
                                <td><?= $item['date'] ?> </td>
                                <td>
                                    <button class = "btn btn-info"type = 'submit' name = "status[<?= $item['id'] ?>]"  value = "<?= $item['a_status'] ?>"><?= $item['a_status'] ?></button>
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


