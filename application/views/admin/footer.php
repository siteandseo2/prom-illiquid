<?php
$a = $_SERVER['REQUEST_URI'];
?>
<!-- jQuery -->
<script src="<?= base_url(); ?>../../../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url(); ?>../../../js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?= base_url(); ?>../../../js/plugins/morris/raphael.min.js"></script>
<?php if ($a == '/admin/charts') { ?>
    <script src="<?= base_url(); ?>../../../js/plugins/morris/morris.min.js"></script>
    <script src="<?= base_url(); ?>../../../js/plugins/morris/morris-data.js"></script>


    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="<?= base_url(); ?>../../../js/plugins/flot/jquery.flot.js"></script>
    <script src="<?= base_url(); ?>../../../js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?= base_url(); ?>../../../js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url(); ?>../../../js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url(); ?>../../../js/plugins/flot/flot-data.js"></script>

<?php } ?>

<!-- Main Back Js -->
 <script src="<?= base_url(); ?>../../../js/back_end.js"></script>

</html>