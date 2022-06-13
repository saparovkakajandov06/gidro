

<?php echo $__env->make('administrator.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            <div class="card card-primary">
                <div class="card-header">
                    <?php echo e(__('lang.bas')); ?>


                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form autocomplete="off" action=" <?php echo e(route('uytget_cak_basys',['cak_id'=>$cak->id])); ?>  " method="post" enctype="multipart/form-data">


                    <?php echo e(csrf_field()); ?>

                    <div class="card-body" style="background-color: white;">
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?php echo e(__('lang.bas')); ?></label>
                            <?php $i=1 ?>
                            <?php $__currentLoopData = $caklama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caklama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <input type="text" class="form-control" id="exampleInputEmail1" name="basys_<?php echo e($i++); ?>"  value="<?php echo e($caklama->basys); ?>">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer" style="background-color: white;">
                        <button type="submit" class="btn btn-primary"><?php echo e(__('lang.update')); ?> </button>
                    </div>
                </form>
            </div>
        </div>



    </div>

</div>













<?php /**PATH C:\xampp\htdocs\gidro\resources\views/cak/edit_cak_basys.blade.php ENDPATH**/ ?>