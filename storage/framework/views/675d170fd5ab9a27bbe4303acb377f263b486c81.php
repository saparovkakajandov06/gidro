


<?php echo $__env->make('administrator.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<br> <br> <br>


        <div align="center" style="margin-top: 50px; "> <?php echo e(__('lang.weather')); ?><h4 style="font-size: large;"> </h4>  </div>
        <hr>

        <div align="center"> <a href=" <?php echo e(route('creathowa')); ?>  "> <button class="btn btn-primary"> +<?php echo e(__('lang.create')); ?></button>  </a> </div>
        <br> <br> <br>

        <div align="center">
            <div class="col-md-9">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                        <tr align="center">
                            <th style="width: 10px;">№ </th>
                            <th style="width: 300px;"> <?php echo e(__('lang.temp')); ?> (C)</th>
                            <th style="width: 300px;"><?php echo e(__('lang.bas')); ?> (mm.pt.st)</th>
                            <th style="width: 100px;"> <?php echo e(__('lang.cyg')); ?> (%) </th>
                            <th style="width: 100px;"> <?php echo e(__('lang.tiz')); ?> (m/s) </th>
                            <th style="width: 300px;"> <?php echo e(__('lang.city')); ?> </th>
                            <th style="width: 300px;"><?php echo e(__('lang.hady')); ?> </th>
                            <th style="width: 100px;"> <?php echo e(__('lang.ugur')); ?> </th>
                            <th style="width: 100px;"> <?php echo e(__('lang.edit')); ?> </th>
                            <th style="width: 100px;"> <?php echo e(__('lang.delete')); ?> </th>
                        </tr>

                        </thead>


                        <tbody>

                        <?php $i=1 ?>

                        <?php $__currentLoopData = $how; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $how): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                            <tr align="center">

                                <td style="width: 10px;"> <?php echo e($i++); ?>  </td>
                                <td style="width: 300px;">  <?php echo e($how->temp); ?> <a href="<?php echo e(route('edittemp',['how_id'=>$how->id])); ?>">  <img src="<?php echo e(asset('icon/1.png')); ?>" style="width: 20px;height: 20px;"> </a> </td>

                                <td style="width: 300px;"> <?php echo e($how->basys); ?> <a href="<?php echo e(route('editbasys',['how_id'=>$how->id])); ?>"> <img src="<?php echo e(asset('icon/1.png')); ?>" style="width: 20px;height: 20px;">   </a> </td>

                                <td style="width: 300px;"> <?php echo e($how->cyg); ?>  <a href="<?php echo e(route('editcyg',['how_id'=>$how->id])); ?>"> <img src="<?php echo e(asset('icon/1.png')); ?>" style="width: 20px;height: 20px;">   </a> </td>

                                <td style="width: 300px;"> <?php echo e($how->tizlik); ?>   <a href="<?php echo e(route('edittizlik',['how_id'=>$how->id])); ?>"> <img src="<?php echo e(asset('icon/1.png')); ?>" style="width: 20px;height: 20px;">   </a></td>

                                <td style="width: 300px;"> <?php echo e($how->saher->name); ?>  <a href="<?php echo e(route('editsaher_id',['how_id'=>$how->id])); ?>"> <img src="<?php echo e(asset('icon/1.png')); ?>" style="width: 20px;height: 20px;">   </a>  </td>

                                <td style="width: 300px;">  <img
                                        style="width: 40px;height: 40px;"
                                        src="<?php echo e(url('storage/'.$how->howayagday->images)); ?>">  <a href="<?php echo e(route('edithowayagday_id',['how_id'=>$how->id])); ?>"> <img src="<?php echo e(asset('icon/1.png')); ?>" style="width: 20px;height: 20px;">   </a> </td>

                                <td style="width: 300px;">  <img style="width: 100px;height: 50px;"
                                                                 src="<?php echo e(url('storage/'.$how->ugur->image)); ?>">  <a href="<?php echo e(route('editugur_id',['how_id'=>$how->id])); ?>"> <img src="<?php echo e(asset('icon/1.png')); ?>" style="width: 20px;height: 20px;">   </a> </td>


                                <td style="width: 100px;"> <a href=" <?php echo e(route('edithowa',['how_id'=>$how->id])); ?> "> <img src="<?php echo e(asset('icon/1.png')); ?>" style="width: 30px;height: 30px;">   </a>  </td>
                                <td style="width: 100px;"> <a href=" <?php echo e(route('deletehowa',['how_id'=>$how->id])); ?> ">  <img src="<?php echo e(asset('icon/2.png')); ?>" >   </a>  </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>




















<?php /**PATH C:\xampp\htdocs\gidro\resources\views/howa/howa.blade.php ENDPATH**/ ?>