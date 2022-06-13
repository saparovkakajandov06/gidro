<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link href="<?php echo e(asset('images/logo.png')); ?>" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <!-- Custom Fonts -->

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
</head>
<body>
<div id="app">
    <?php echo $__env->yieldContent('content'); ?>

</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('.btn-refresh').click(function(){
        $.ajax({
           type: 'GET',
           url: '<?php echo e(url('/refresh_captcha')); ?>',
           success: function(data){
               $('.captcha span').html(data);
           }
        });
    });

</script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\gidro\resources\views/layouts/app.blade.php ENDPATH**/ ?>