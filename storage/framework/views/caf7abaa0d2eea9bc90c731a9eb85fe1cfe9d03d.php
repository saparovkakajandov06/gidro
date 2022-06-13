
<!DOCTYPE html>
<html lang="en">
<head>



    <title>admin</title>

    <!-- Fonts and icons -->


    <link href="<?php echo e(asset('images/logo.png')); ?>" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="<?php echo e(asset('administrator/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('administrator/assets/css/atlantis.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('administrator/assets/css/demo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('administrator/assets/fonts/flaticon/flaticon.css')); ?>">

    <link href="<?php echo e(asset('datatables/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('datatables/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('datatables/css/js_style.css')); ?>" rel="stylesheet" type="text/css">


    <script src="<?php echo e(asset('datatables/js/jquery-1.11.1.js')); ?>"></script>





    <script src="<?php echo e(asset('datatables/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('datatables/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>



    <script src="<?php echo e(asset('datatables/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('datatables/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(asset('datatables/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo e(asset('datatables/vendor/datatables/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('datatables/vendor/datatables/dataTables.bootstrap4.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('datatables/js/sb-admin.min.js')); ?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo e(asset('datatables/js/demo/datatables-demo.js')); ?>"></script>

    <script src="<?php echo e(asset('js/datatables.js')); ?>"></script>
    <script>
        $(window).on('load', function () {
            $('#before-load').find('section').fadeOut().end().delay(1).fadeOut('slow');
        });
    </script>

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>










</head>
<body>

<?php echo $__env->make('administrator.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>







<script src="<?php echo e(asset('administrator/assets/js/core/jquery.3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/assets/js/core/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/assets/js/core/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/assets/js/plugin/webfont/webfont.min.js')); ?>"></script>

                <!-- jQuery UI -->
<script src="<?php echo e(asset('administrator/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')); ?>"></script>

                <!-- jQuery Scrollbar -->
<script src="<?php echo e(asset('administrator/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')); ?>"></script>
 <!-- Datatables -->
<script src="<?php echo e(asset('administrator/assets/js/plugin/datatables/datatables.min.js')); ?>"></script>

                <!-- Bootstrap Notify -->
<script src="<?php echo e(asset('administrator/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')); ?>"></script>

                <!-- jQuery Vector Maps -->
<script src="<?php echo e(asset('administrator/assets/js/plugin/jqvmap/jquery.vmap.min.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js')); ?>"></script>

                <!-- Sweet Alert -->
<script src="<?php echo e(asset('administrator/assets/js/plugin/sweetalert/sweetalert.min.js')); ?>"></script>

                <!-- Atlantis JS -->
<script src="<?php echo e(asset('administrator/assets/js/atlantis.min.js')); ?>"></script>

                <!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="<?php echo e(asset('administrator/assets/js/setting-demo.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/assets/js/demo.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\gidro\resources\views/administrator/admin.blade.php ENDPATH**/ ?>