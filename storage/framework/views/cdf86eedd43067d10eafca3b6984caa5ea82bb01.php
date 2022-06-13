<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $__env->yieldContent('title'); ?> </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="myBaş sahypa- real estate template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo e(asset('images/logo.png')); ?>" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/bootstrap-4.1.2/bootstrap.min.css')); ?>">
    

    
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/main_styles.css')); ?>">
    
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">


</head>
<body style="background-color: white;">

<div class="super_container">
    <div class="super_overlay"></div>

    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php echo $__env->yieldContent('content'); ?>

   <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>

<script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>

<script src="<?php echo e(asset('styles/bootstrap-4.1.2/bootstrap.min.js')); ?>"></script>











<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-F88DQJK39L"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-F88DQJK39L');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(85864692, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/85864692" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
<?php /**PATH C:\xampp\htdocs\gidro\resources\views/layouts/master.blade.php ENDPATH**/ ?>