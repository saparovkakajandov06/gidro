
<?php echo $__env->make('administrator.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>





<br> <br> <br>

<div align="center" style="margin-top: 50px; "> <h4 style="font-size: large;"><?php echo e(__('lang.hady')); ?> </h4>  </div>
<hr>

<div align="center"> <a href=" <?php echo e(route('creathowayagdayy')); ?> "> <button class="btn btn-primary"> +<?php echo e(__('lang.create')); ?></button>  </a> </div>

<div align="center">
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr align="center">
                    <th style="width: 10px;">№ </th>
                    <th style="width: 300px;"> <?php echo e(__('lang.hady')); ?> </th>
                    <th style="width: 300px;"><?php echo e(__('lang.photos')); ?> </th>
                    <th style="width: 100px;"> <?php echo e(__('lang.edit')); ?> </th>
                    <th style="width: 100px;"> <?php echo e(__('lang.delete')); ?> </th>
                </tr>

                </thead>


                <tbody>

                <?php $i=1 ?>
                <?php $__currentLoopData = $howayagday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $howayag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr align="center">

                        <td style="width: 10px;"> <?php echo e($i++); ?>  </td>
                        <td style="width: 300px;"> <?php echo e($howayag->ady); ?> </td>
                        <td style="width: 300px;"> <img
                                style="width: 60px;height: 60px;"
                                src="<?php echo e(url('storage/'.$howayag->images)); ?>">  </td>
                        <td  style="width: 100px;"> <a href=" <?php echo e(route('edithowayag',['howayag_id'=>$howayag->id])); ?> "> <img src="<?php echo e(asset('icon/1.png')); ?>" style="width: 30px;height: 30px;">   </a>  </td>
                        <td style="width: 100px;"> <a href=" <?php echo e(route('deletehowayag',['howayag_id'=>$howayag->id])); ?> ">  <img src="<?php echo e(asset('icon/2.png')); ?>" >   </a>  </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table> </div> </div> </div>
















<?php /**PATH C:\xampp\htdocs\gidro\resources\views/howayagdayy/howayagdayy.blade.php ENDPATH**/ ?>