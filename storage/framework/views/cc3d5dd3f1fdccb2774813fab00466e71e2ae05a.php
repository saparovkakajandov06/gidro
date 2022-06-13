<?php $__env->startSection('title'); ?> <?php echo e(__('lang.home')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row" >
    <div class="col">
        <div class="section_title_container text-center">

            <div class="section_title"><h1><?php echo e(__('lang.weather')); ?></h1></div>



        </div>
    </div>
</div>

<!-- <div class="row" >
    <div class="col">
        <div class="section_title_container text-center">

            <div class="section_title"><h1>
                 
            <?php if($ashgabat): ?>
            <?php echo e(__('lang.ashgabat')); ?>

            <?php endif; ?>

            

           
                </h1></div>


        </div>
    </div>
</div> -->



 <div class="row" >
    <div class="col">
        <div class="section_title_container text-center">

            <div class="section_title"><h1>
         
            <!-- <?php echo date('d.m.Y', strtotime($today)); ?>   -->

            <?php $__currentLoopData = $welayat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $welayat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             
            <!-- <?php echo date('d.m.Y', strtotime($welayat->ady)); ?>   -->
            <?php echo date('d.m.Y', strtotime($today)); ?>


              <?php echo e($welayat->wagt); ?>

           
              
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
                </h1></div>


        </div>
    </div>
</div>   



<!-- <div class="container" style="margin-top:40px;">
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

           

             <?php $__currentLoopData = $ashgabat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ashgabat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                     <tr>
                        <th align="center"  ><?php echo e($ashgabat->time); ?></th>
                        <td align="center"><img style="width: 40px;height: 40px;" src="<?php echo e(url('storage/'.$ashgabat->howayagday->images)); ?>"></td>
                        <td align="center"><?php echo e($ashgabat->basys); ?> <?php echo e(__('lang.mm')); ?></td>
                        <td align="center"><?php echo e($ashgabat->temp); ?> </td>
                        <td align="center"><img style="width: 40px;height: 40px;"  src="<?php echo e(url('storage/'.$ashgabat->ugur->image)); ?>"></td>
                        <td align="center"><?php echo e($ashgabat->tizlik); ?>  <?php echo e(__('lang.ms')); ?></td>
                        <td align="center"><?php echo e($ashgabat->cyg); ?> %</td>
                    </tr> 

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </tbody>
            </table>

        </div>

    </div>
</div> -->



<div class="container" style="margin-top:40px;">
    <div class="row">
        <div class="col-12">

            <table class="table ">
                <thead class="bg-blue-light-4">
                <tr>
                    <th scope="col" style="color: black; font-size: 15px;"><?php echo e(__('lang.city')); ?></th>
                    <th scope="col" style="color: black; font-size: 15px;"><?php echo e(__('lang.temp')); ?></th>
                    <th scope="col" style="color: black; font-size: 15px;"><?php echo e(__('lang.hady')); ?></th>
                    <th scope="col" style="color: black; font-size: 15px;"><?php echo e(__('lang.bas')); ?></th>
                    <th scope="col" style="color: black; font-size: 15px;"><?php echo e(__('lang.cyg')); ?></th>
                    <th scope="col" style="color: black; font-size: 15px;"><?php echo e(__('lang.ugur')); ?></th>
                    <th scope="col" style="color: black; font-size: 15px;"><?php echo e(__('lang.tiz')); ?></th>
                </tr>
                </thead>
                <tbody style="color: black; font-size: large;" >
                <?php $__currentLoopData = $how; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $how): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th align="center"  ><?php echo e($how->saher->name); ?></th>
                    <td align="center"><?php echo e($how->temp); ?> C</td>
                    <td align="center"><img  height="40px" src="<?php echo e(url('storage/'.$how->howayagday->images)); ?>"></td>
                    <td align="center"><?php echo e($how->basys); ?> <?php echo e(__('lang.mm')); ?></td>
                    <td align="center"><?php echo e($how->cyg); ?> %</td>
                    <td align="center"><img height="40px" src="<?php echo e(url('storage/'.$how->ugur->image)); ?>"></td>
                    <td align="center"><?php echo e($how->tizlik); ?>  <?php echo e(__('lang.ms')); ?></td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </tbody>
            </table>

        </div>

    </div>
</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gidro\resources\views/index.blade.php ENDPATH**/ ?>