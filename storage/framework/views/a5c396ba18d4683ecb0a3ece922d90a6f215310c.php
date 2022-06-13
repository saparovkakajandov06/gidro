


<?php echo $__env->make('administrator.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<br> <br> <br>

<div align="center" style="margin-top: 50px; "> <?php echo e(__('lang.caklama')); ?><h4 style="font-size: large;"> </h4>  </div>
<hr>


<br> <br> <br>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="col-md-3 btn btn-sm btn-primary m-4  ">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo e(__('lang.ashgabat')); ?>

                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo e(action('CaksController@caks_detaile',[$ashgabat->wel_id])); ?>">   <?php $__currentLoopData = $welayat_one; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e(date('d.m.Y', strtotime($wel->ady))); ?>   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  </a>
                    <a class="dropdown-item" href="<?php echo e(action('CaksController@caks_detaile_two',[$ashgabat->wel_id])); ?>">   <?php $__currentLoopData = $welayat_two; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e(date('d.m.Y', strtotime($wel->ady))); ?>   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  </a>
                </div>
            </div>

            <div class="col-md-3 btn btn-sm btn-primary m-4  ">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo e(__('lang.ahal')); ?>

                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo e(action('CaksController@caks_detaile',[$ahal->wel_id])); ?>"> <?php $__currentLoopData = $welayat_one; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e(date('d.m.Y', strtotime($wel->ady))); ?>   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  </a>
                    <a class="dropdown-item" href="<?php echo e(action('CaksController@caks_detaile_two',[$ahal->wel_id])); ?>"> <?php $__currentLoopData = $welayat_two; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e(date('d.m.Y', strtotime($wel->ady))); ?>   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  </a>
                </div>
            </div>

            <div class="col-md-3 btn btn-sm btn-primary m-4  ">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo e(__('lang.mary')); ?>

                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo e(action('CaksController@caks_detaile',[$mary->wel_id])); ?>"> <?php $__currentLoopData = $welayat_one; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e(date('d.m.Y', strtotime($wel->ady))); ?>   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  </a>
                    <a class="dropdown-item" href="<?php echo e(action('CaksController@caks_detaile_two',[$mary->wel_id])); ?>"> <?php $__currentLoopData = $welayat_two; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e(date('d.m.Y', strtotime($wel->ady))); ?>   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  </a>
                </div>
            </div>

            <br> <br> <br>

            <div class="col-md-3 btn btn-sm btn-primary m-4  ">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo e(__('lang.lebap')); ?>

                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo e(action('CaksController@caks_detaile',[$lebap->wel_id])); ?>"> <?php $__currentLoopData = $welayat_one; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e(date('d.m.Y', strtotime($wel->ady))); ?>   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  </a>
                    <a class="dropdown-item" href="<?php echo e(action('CaksController@caks_detaile_two',[$lebap->wel_id])); ?>"> <?php $__currentLoopData = $welayat_two; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e(date('d.m.Y', strtotime($wel->ady))); ?>   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  </a>
                </div>
            </div>


            <div class="col-md-3 btn btn-sm btn-primary m-4  ">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo e(__('lang.dashoguz')); ?>

                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo e(action('CaksController@caks_detaile',[$dashoguz->wel_id])); ?>"> <?php $__currentLoopData = $welayat_one; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e(date('d.m.Y', strtotime($wel->ady))); ?>   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  </a>
                    <a class="dropdown-item" href="<?php echo e(action('CaksController@caks_detaile_two',[$dashoguz->wel_id])); ?>"> <?php $__currentLoopData = $welayat_two; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e(date('d.m.Y', strtotime($wel->ady))); ?>   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  </a>
                </div>
            </div>


            <div class="col-md-3 btn btn-sm btn-primary m-4  ">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo e(__('lang.balkan')); ?>

                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo e(action('CaksController@caks_detaile',[$balkan->wel_id])); ?>"> <?php $__currentLoopData = $welayat_one; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e(date('d.m.Y', strtotime($wel->ady))); ?>   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  </a>
                    <a class="dropdown-item" href="<?php echo e(action('CaksController@caks_detaile_two',[$balkan->wel_id])); ?>"> <?php $__currentLoopData = $welayat_two; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e(date('d.m.Y', strtotime($wel->ady))); ?>   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  </a>
                </div>
            </div>


        </div>
    </div>
</div>





    
        
            
                
                
                    
                    
                    
                    

                    
                    
                    
                    
                    
                    
                    
                    
                    
                

                


                

                
                


                    

                        

                        
                        
                        
                        
                        
                        
                        
                        

                        
                                    
                                    

                        
                                    
                                    


                        
                        

                    
                
                








            
















<?php /**PATH C:\xampp\htdocs\gidro\resources\views/cak/caks.blade.php ENDPATH**/ ?>