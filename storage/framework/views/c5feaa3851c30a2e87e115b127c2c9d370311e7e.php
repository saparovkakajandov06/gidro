
<?php echo $__env->make('administrator.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<br>

<br>

<br>
<div class="container">
    <div class="row" >
        <div class="col">
            <div class="section_title_container text-center">

                <?php if(count($errors) > 0): ?>

                    <div class="alert alert-danger">
                        Upload validation Error<br><br>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li> <?php echo e($error); ?> </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                    </div>

                <?php endif; ?>

                <form method="post" enctype="multipart/form-data" action="<?php echo e(url('/import_excel/import')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">

                        <table id="example1" class="table  ">
                            <tr>
                                <td width="40%" align="right"><label>Ýüklemek üçin faýly saýla!</label></td>
                                <td width="30%"><input type="file" name="select_file" ></td>
                                <td width="30%" align="left">
                                    <input type="submit" name="upload" class="btn btn-primary" value="Ýükle">
                                </td>
                            </tr>
                            <tr>
                                <td width="40%" align="right"></td>
                                <td width="30%"><span class="text-muted">.xls, .xlsx</span></td>
                                <td width="30%" align="left"></td>
                            </tr>

                        </table>

                    </div>

                </form>




            </div>
        </div>
    </div>



    <div class="container" style="margin-top:40px;">
        <div class="row">
            <div class="col-12">

                <table class="table ">
                    <thead class="bg-blue-light-4">
                    <tr>
                        <th scope="col" style="color: black; font-size: 15px;"><?php echo e(__('lang.time')); ?></th>
                        <th scope="col" style="color: black; font-size: 15px;"><?php echo e(__('lang.hady')); ?></th>
                        <th scope="col" style="color: black; font-size: 15px;"><?php echo e(__('lang.bas')); ?></th>
                        <th scope="col" style="color: black; font-size: 15px;"><?php echo e(__('lang.temp')); ?> (C)</th>
                        <th scope="col" style="color: black; font-size: 15px;"><?php echo e(__('lang.ugur')); ?></th>
                        <th scope="col" style="color: black; font-size: 15px;"><?php echo e(__('lang.tiz')); ?></th>
                        <th scope="col" style="color: black; font-size: 15px;"><?php echo e(__('lang.cyg')); ?></th>
                        <th scope="col" style="color: black; font-size: 15px;"><?php echo e(__('lang.edit')); ?></th>
                    </tr>
                    </thead>
                    <tbody style="color: black; font-size: large;" >
                    <?php $__currentLoopData = $caklamalar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caklamas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th align="center"  ><?php echo e($caklamas->time); ?> </th>
                                    <td align="center"><img style="width: 40px;height: 40px;" src="<?php echo e(url('storage/'.$caklamas->howayagday->images)); ?>"> </td>
                                    <td align="center"><?php echo e($caklamas->basys); ?> <?php echo e(__('lang.mm')); ?> </td>
                                    <td align="center"><?php echo e($caklamas->temp); ?>  </td>
                                    <td align="center"><img style="width: 40px;height: 40px;"  src="<?php echo e(url('storage/'.$caklamas->ugur->image)); ?>"> </td>
                                    <td align="center"><?php echo e($caklamas->tizlik); ?>  <?php echo e(__('lang.ms')); ?>  </td>
                                    <td align="center"><?php echo e($caklamas->cyg); ?> % </td>
                                    <td align="center"><a href=" <?php echo e(route('editcak',['cak_id'=>$caklamas->id])); ?> "> <img src="<?php echo e(asset('icon/1.png')); ?>" style="width: 30px;height: 30px;">   </a></td>
                                </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>





</div>
<?php /**PATH C:\xampp\htdocs\gidro\resources\views/caklama/index.blade.php ENDPATH**/ ?>