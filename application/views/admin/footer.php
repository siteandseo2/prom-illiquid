<?php
$a = $_SERVER['REQUEST_URI'];
?>
<!-- jQuery -->
<script src="<?= base_url(); ?>../../../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url(); ?>../../../js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?= base_url(); ?>../../../js/plugins/morris/raphael.min.js"></script>

<?php
if ($a == '/admin/product_add') {
    ?>
    <script src="<?= base_url(); ?>../../../js/products.js" type="text/javascript"></script>
<?php
}
if ($a == '/admin/main') {
    ?>
    <script src='../../../js/perfect-scrollbar.jquery.js'></script>
    <script src="<?= base_url(); ?>../../../js/main.js" type="text/javascript"></script>
<?php } ?>
<!-- Main Back Js -->
<script src="<?= base_url(); ?>../../../js/back_end.js"></script>
<!--<script src="<?= base_url(); ?>../../../js/validation.js" type="text/javascript"></script>-->

</html>