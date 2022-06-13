<?php $__env->startSection('title'); ?> <?php echo e(__('lang.about')); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="featured" style="margin-top: -50px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">


                        <div class="row featured_row">

                            <div style="font-size: large; margin-bottom: 100px; margin-top: -100px;">  <h5 style="color: black; font-family: 'Arial Black'">  <?php echo e(__('lang.main')); ?>  </h5> </div>

                            <br>

                            <!-- Featured Item -->
                            <div class="col-md-6 ">

                                        <div  style=" font-size: 17px; color: black; text-align: justify;">
                                            <?php echo e(__('lang.about_one')); ?>

                                        </div>


                            </div>

                            <!-- Featured Item -->
                            <div class="col-lg-6">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container">
                                            <img src="<?php echo e(asset('images/4.jpg')); ?>" >
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container">
                                            <img src="<?php echo e(asset('images/6.png')); ?>" height="500px;">
                                        </div>

                                    </div>

                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container" style=" font-size: 17px; color: black; text-align: justify;">
                                            <?php echo e(__('lang.about_two')); ?>


                                        </div>

                                    </div>

                                </div>
                            </div>

                            <!-- Featured Item -->
                            <div class="col-lg-12">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container" style=" font-size: 17px; color: black; text-align: justify;">
                                            <?php echo e(__('lang.about_three')); ?>


                                        </div>


                                    </div>

                                </div>
                            </div>



                        </div>







                        <div class="section_title"><h1 style="color: black;"><?php echo e(__('lang.photogalery')); ?></h1></div>
                    </div>
                </div>
            </div>


            <div class="row featured_row">

           <?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pho): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Featured Item -->
                <div class="col-lg-4">
                    <div class="listing">
                        <div class="listing_image">
                            <div class="listing_image_container">

                             <img  src="<?php echo e(url('storage/'.$pho->image)); ?>" style="width: 500px;height: 300px;">

                    <p > <br><h4 align="center"> <?php echo e($pho->title); ?> </h4> </p>
                            </div>


                        </div>

                    </div>
                </div>

               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </div>




            </div>
    </div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gidro\resources\views/about.blade.php ENDPATH**/ ?>