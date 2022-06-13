
<!-- Header Bar -->

<div class="header_bar d-flex flex-row align-items-center justify-content-start">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">

        <ul class="d-flex flex-row align-items-center justify-content-start">            <!-- Phone -->


                <img src="<?php echo e(asset('images/gerb.png')); ?>" height="50px" alt="gerb" >
                <span style="font-size: large; color: white; text-align: center; ">

                <?php echo e(__('lang.main')); ?>



                </span>

            <!-- Address -->

        </ul>
            </div>
        </div>
    </div>

</div>

<nav class="navbar navbar-expand-lg navbar-light bg-white" >


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="container">
        <div class="row">
            <div class="col-md-12 offset-1">




                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav  " style="font-weight: bold; ">
                        <li class="nav-item active navbar-brand" >
                            <a class="nav-link" href="<?php echo e(route('index')); ?>"><?php echo e(__('lang.home')); ?> </a>
                        </li>
                        
                            
                        
                        <li class="nav-item dropdown active navbar-brand">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo e(__('lang.caklama')); ?>

                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href=" <?php echo e(action('IndexController@caks_detaile',[$ashgabat->wel_id])); ?>  "> <?php echo e(__('lang.ashgabat')); ?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href=" <?php echo e(action('IndexController@caks_detaile',[$ahal->wel_id])); ?> "> <?php echo e(__('lang.ahal')); ?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href=" <?php echo e(action('IndexController@caks_detaile',[$mary->wel_id])); ?> "> <?php echo e(__('lang.mary')); ?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href=" <?php echo e(action('IndexController@caks_detaile',[$lebap->wel_id])); ?> "> <?php echo e(__('lang.lebap')); ?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href=" <?php echo e(action('IndexController@caks_detaile',[$dashoguz->wel_id])); ?> "> <?php echo e(__('lang.dashoguz')); ?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href=" <?php echo e(action('IndexController@caks_detaile',[$balkan->wel_id])); ?> "> <?php echo e(__('lang.balkan')); ?></a>

                            </div>
                        </li>
                        <li class="nav-item active navbar-brand">
                            <a class="nav-link" href="<?php echo e(route('about')); ?>"><?php echo e(__('lang.about')); ?></a>
                        </li>

                        <li class="nav-item active navbar-brand">
                            <a class="nav-link" href="<?php echo e(route('contact')); ?>"><?php echo e(__('lang.contact')); ?></a>
                        </li>


                        <li class="nav-item dropdown active navbar-brand">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo e(__('lang.lang')); ?>

                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="nav-link" href="<?php echo e(route('locale', 'tm')); ?>"><img src="<?php echo e(asset('lang/tm.png')); ?>"> TM  </a>
                                <div class="dropdown-divider"></div>
                                <a class="nav-link" href="<?php echo e(route('locale', 'ru')); ?>"><img src="<?php echo e(asset('lang/ru.png')); ?>"> RU </a>
                                <div class="dropdown-divider"></div>
                                <a class="nav-link" href="<?php echo e(route('locale', 'en')); ?>"><img src="<?php echo e(asset('lang/en.png')); ?>"> EN  </a>
                            </div>

                        </li>








                    </ul>

                </div>


            </div>
        </div>
    </div>



</nav>

            <div class="slide" style="height: 400px;">
                <div class="background_image" style="background-image:url(<?php echo e(asset('images/img1.png')); ?>)"></div>
            </div>



<?php /**PATH C:\xampp\htdocs\gidro\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>