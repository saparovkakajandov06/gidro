<?php echo $__env->make('administrator.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?php echo e(__('lang.hady')); ?></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form autocomplete="off" action="<?php echo e(route('uytget_cak_howayagday',['cak_id'=>$cak_1->id])); ?>" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="card-body" style="background-color: white;">


                        <div class="form-group">
                            <label for="exampleInputEmail1"><?php echo e(__('lang.hady')); ?></label>



                            <select name="hyagday_7" class="form-control">
                                <option > </option>
                                <?php $__currentLoopData = $howayag_gije; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $howa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($howa->id==$cak_7->howayagday->id?'selected':''); ?> class="form-control" value="<?php echo e($howa->id); ?>"> <?php echo e($howa->ady); ?>  </option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>

                            <select name="hyagday_6" class="form-control">
                                <option > </option>
                                <?php $__currentLoopData = $howayag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $howa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($howa->id==$cak_6->howayagday->id?'selected':''); ?> class="form-control" value="<?php echo e($howa->id); ?>"> <?php echo e($howa->ady); ?>  </option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>

                            <select name="hyagday_5" class="form-control">
                                <option > </option>
                                <?php $__currentLoopData = $howayag_gundiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $howa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($howa->id==$cak_5->howayagday->id?'selected':''); ?> class="form-control" value="<?php echo e($howa->id); ?>"> <?php echo e($howa->ady); ?>  </option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>

                            <select name="hyagday_4" class="form-control">
                                <option > </option>
                                <?php $__currentLoopData = $howayag_gundiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $howa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($howa->id==$cak_4->howayagday->id?'selected':''); ?> class="form-control" value="<?php echo e($howa->id); ?>"> <?php echo e($howa->ady); ?>  </option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>

                            <select name="hyagday_3" class="form-control">
                                <option > </option>
                                <?php $__currentLoopData = $howayag_gundiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $howa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($howa->id==$cak_3->howayagday->id?'selected':''); ?> class="form-control" value="<?php echo e($howa->id); ?>"> <?php echo e($howa->ady); ?>  </option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>

                            <select name="hyagday_2" class="form-control">
                                <option > </option>
                                <?php $__currentLoopData = $howayag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $howa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($howa->id==$cak_2->howayagday->id?'selected':''); ?> class="form-control" value="<?php echo e($howa->id); ?>"> <?php echo e($howa->ady); ?>  </option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>

                            <select name="hyagday_1" class="form-control">
                                <option > </option>
                                <?php $__currentLoopData = $howayag_gije; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $howa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($howa->id==$cak_1->howayagday->id?'selected':''); ?> class="form-control" value="<?php echo e($howa->id); ?>"> <?php echo e($howa->ady); ?>  </option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>



                        </div>




                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer" style="background-color: white;">
                        <button type="submit" class="btn btn-primary"><?php echo e(__('lang.update')); ?></button>
                    </div>
                </form>
            </div>
        </div>



    </div>

</div>
<?php /**PATH C:\xampp\htdocs\gidro\resources\views/cak/edit_cak_howayagday.blade.php ENDPATH**/ ?>