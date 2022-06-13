
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue" >




                <a class="nav-link link-with-badge" href="<?php echo e(route('locale', 'tm')); ?>">
                    <span class="nav-link-text"> <img src="<?php echo e(asset('lang/tm.png')); ?>"></span>
                </a>



                <a class="nav-link link-with-badge" href="<?php echo e(route('locale', 'ru')); ?>">
                    <span class="nav-link-text"><img src="<?php echo e(asset('lang/ru.png')); ?>"></span>
                </a>



                <a class="nav-link link-with-badge" href="<?php echo e(route('locale', 'en')); ?>">
                    <span class="nav-link-text"><img src="<?php echo e(asset('lang/en.png')); ?>"></span>
                </a>



        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">




        </nav>
        <!-- End Navbar -->
    </div>
<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div  align="center">
                    <img src="<?php echo e(asset('administrator/assets/img/avatar5.png')); ?>" alt="..." style="width: 80px;height: 80px;border-radius: 50%;">
                </div>
                <div class="info">

                    <div class="clearfix"></div>


                </div>
            </div>

            <ul class="nav nav-primary">


                <li class="nav-item">
                    <a href="<?php echo e(route('howayuz')); ?>">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;"><?php echo e(__('lang.weather')); ?></p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href=" <?php echo e(route('caks')); ?> ">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;"><?php echo e(__('lang.wel_cak')); ?></p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href=" <?php echo e(route('caklamalar')); ?> ">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;"><?php echo e(__('lang.cak')); ?></p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('welayatyuz')); ?>">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;"><?php echo e(__('lang.mows')); ?></p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('saheryuz')); ?>">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;"><?php echo e(__('lang.cities')); ?></p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('wels')); ?>">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;"><?php echo e(__('lang.welayat')); ?></p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('howayagdayyuz')); ?>">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;"> <?php echo e(__('lang.how_yag')); ?></p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('uguryuz')); ?>">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;"><?php echo e(__('lang.ugurs')); ?></p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('photo')); ?>">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;"><?php echo e(__('lang.photos')); ?> </p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('users')); ?>">
                        <i class="nav-icon far fa-users"></i>
                        <p style="color: black; font-size: large;"><?php echo e(__('lang.users')); ?> </p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('logs')); ?>">
                        <i class="nav-icon far fa-users"></i>
                        <p style="color: black; font-size: large;"><?php echo e(__('lang.logs')); ?> </p>

                    </a>
                </li>

                <li class="nav-item">
                    <a  href="<?php echo e(route('login')); ?>" onclick="return logout(event);">
                        <i class="fas fa-desktop"></i>
                        <p style="color: black; font-size: large;"><?php echo e(__('lang.exit')); ?></p>

                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </li>




            </ul>
        </div>



    </div>
</div>


<!-- End Sidebar -->
<?php /**PATH C:\xampp\htdocs\gidro\resources\views/administrator/sidebar.blade.php ENDPATH**/ ?>