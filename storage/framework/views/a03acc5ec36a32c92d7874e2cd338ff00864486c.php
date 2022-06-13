<?php $__env->startSection('title'); ?> <?php echo e(__('lang.home')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row" >
        <div class="col">
            <div class="section_title_container text-center">

                <div class="section_title">
                    <h1>
                       <?php if($caks->wel->id == '1'): ?>
                            <?php echo e(__('lang.ashgabat')); ?>

                        <?php endif; ?>
                           <?php if($caks->wel->id == '2'): ?>
                               <?php echo e(__('lang.ahal')); ?>

                           <?php endif; ?>
                           <?php if($caks->wel->id == '3'): ?>
                               <?php echo e(__('lang.mary')); ?>

                           <?php endif; ?>
                           <?php if($caks->wel->id == '4'): ?>
                               <?php echo e(__('lang.lebap')); ?>

                           <?php endif; ?>
                           <?php if($caks->wel->id == '5'): ?>
                               <?php echo e(__('lang.dashoguz')); ?>

                           <?php endif; ?>
                           <?php if($caks->wel->id == '6'): ?>
                               <?php echo e(__('lang.balkan')); ?>

                           <?php endif; ?>
                    </h1>
                </div>


            </div>
        </div>
    </div>

    <div class="row" >
        <div class="col">
            <div class="section_title_container text-center">

                <div class="section_title">
                    <h1>
                        <?php $__currentLoopData = $welayat_one; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e(date('d.m.Y', strtotime($wel->ady))); ?>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </h1>
                </div>


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
                </tr>
                </thead>
                <tbody style="color: black; font-size: large;" >

                <?php $__currentLoopData = $welayat_caklamalar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caklamas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                    <tr>
                        <th align="center"  ><?php echo e($caklamas->time); ?></th>
                        <td align="center"><img style="width: 40px;height: 40px;" src="<?php echo e(url('storage/'.$caklamas->howayagday->images)); ?>"></td>
                        
                        <td align="center"><?php echo e($caklamas->basys); ?> <?php echo e(__('lang.mm')); ?></td>
                        <td align="center"><?php echo e($caklamas->temp); ?> </td>
                        <td align="center"><img style="width: 40px;height: 40px;"  src="<?php echo e(url('storage/'.$caklamas->ugur->image)); ?>"></td>
                        <td align="center"><?php echo e($caklamas->tizlik); ?>  <?php echo e(__('lang.ms')); ?></td>
                        <td align="center"><?php echo e($caklamas->cyg); ?> %</td>
                    </tr>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </tbody>
            </table>

        </div>

    </div>
</div>


    <div class="row" >
        <div class="col">
            <div class="section_title_container text-center">

                <div class="section_title"><h1>

                        <?php $__currentLoopData = $welayat_two; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e(date('d.m.Y', strtotime($wel->ady))); ?>



                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </h1></div>


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
                    </tr>
                    </thead>
                    <tbody style="color: black; font-size: large;" >

                    <?php $__currentLoopData = $welayat_caklamalar_two; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caklamas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th align="center"  ><?php echo e($caklamas->time); ?></th>
                                    <td align="center"><img style="width: 40px;height: 40px;" src="<?php echo e(url('storage/'.$caklamas->howayagday->images)); ?>"></td>
                                    
                                    <td align="center"><?php echo e($caklamas->basys); ?> <?php echo e(__('lang.mm')); ?></td>
                                    <td align="center"><?php echo e($caklamas->temp); ?> </td>
                                    <td align="center"><img style="width: 40px;height: 40px;"  src="<?php echo e(url('storage/'.$caklamas->ugur->image)); ?>"></td>
                                    <td align="center"> <?php echo e($caklamas->tizlik); ?> <?php echo e(__('lang.ms')); ?></td>
                                    <td align="center"><?php echo e($caklamas->cyg); ?> % </td>
                                </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </tbody>
                </table>

            </div>

        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gidro\resources\views/caklama/cak.blade.php ENDPATH**/ ?>