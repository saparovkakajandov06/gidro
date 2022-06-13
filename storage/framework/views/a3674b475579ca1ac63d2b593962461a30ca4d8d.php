<?php $__env->startSection('title'); ?> <?php echo e(__('lang.contact')); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container"  style="margin-top: 100px; margin-bottom: 100px;">
    <div class="row">

        <div class="col-lg-6 footer_col">
            <div class="footer_links" style="font-size: large; font-family: 'Arial Black';">


                <p style=" color: black;"><?php echo e(__('lang.address')); ?></p>
                <p style=" color: black;"><?php echo e(__('lang.tel')); ?></p>
                <p style=" color: black;"><?php echo e(__('lang.faks')); ?></p>
                <p style=" color: black;"><?php echo e(__('lang.mail')); ?></p>

            </div>

        </div>
        <div class="col-lg-6">
            <div class="listing">
                <div class="listing_image">
                    <div class="listing_image_container">
                        <img  src="<?php echo e(asset('images/gidro.JPG')); ?>" style="width: 500px;height: 300px;">


                    </div>
                </div>

            </div>

        </div>


        <div class="col-lg-12 footer_col">
            <div class="footer_links" style="font-size: large; font-family: 'Arial Black';">

                <h2 style=" color: black;"><?php echo e(__('lang.wel')); ?></h2>




                <p style=" color: black;"><?php echo e(__('lang.lebap_info')); ?></p>
                <p style=" color: black;"><?php echo e(__('lang.mary_info')); ?></p>
                <p style=" color: black;"><?php echo e(__('lang.balkan_info')); ?></p>
                <p style=" color: black;"><?php echo e(__('lang.dashoguz_info')); ?></p>



            </div>

        </div>









    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gidro\resources\views/contact.blade.php ENDPATH**/ ?>