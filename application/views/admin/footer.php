
<!-- jQuery -->
<script src="<?= base_url(); ?>../../../js/jquery.js"></script>
<script src="<?= base_url(); ?>../../../js/jquery-ui.js" type="text/javascript"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url(); ?>../../../js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?= base_url(); ?>../../../js/plugins/morris/raphael.min.js"></script>

<!-- Main Back Js -->
<script src="<?= base_url(); ?>../../../js/back_end.js"></script>


<?php
$a = $_SERVER['REQUEST_URI'];
 
if ($a == '/admin/product_add'||$a == '/admin/subcategories_add') {
    ?>
    <script src="<?= base_url(); ?>../../../js/products.js" type="text/javascript"></script>
<?php }
?>

<script type="text/javascript">
    $(document).ready(function () {
        $(function () {
            $("#change_type").on("click", function () {
                if ($(this).is(":checked")) {
                    $('#page_url').removeAttr("disabled")
                }
                else {
                    $('#page_url').html('').attr('disabled', 'disabled');
                }
            })
        });

    });
</script>

</html>