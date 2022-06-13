
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue" >




                <a class="nav-link link-with-badge" href="{{ route('locale', 'tm') }}">
                    <span class="nav-link-text"> <img src="{{ asset('lang/tm.png') }}"></span>
                </a>



                <a class="nav-link link-with-badge" href="{{ route('locale', 'ru') }}">
                    <span class="nav-link-text"><img src="{{ asset('lang/ru.png') }}"></span>
                </a>



                <a class="nav-link link-with-badge" href="{{ route('locale', 'en') }}">
                    <span class="nav-link-text"><img src="{{ asset('lang/en.png') }}"></span>
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
                    <img src="{{ asset('administrator/assets/img/avatar5.png') }}" alt="..." style="width: 80px;height: 80px;border-radius: 50%;">
                </div>
                <div class="info">

                    <div class="clearfix"></div>


                </div>
            </div>

            <ul class="nav nav-primary">


                <li class="nav-item">
                    <a href="{{ route('howayuz') }}">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;">{{ __('lang.weather') }}</p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href=" {{route('caks')}} ">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;">{{ __('lang.wel_cak') }}</p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href=" {{route('caklamalar')}} ">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;">{{ __('lang.cak') }}</p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('welayatyuz')}}">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;">{{ __('lang.mows') }}</p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('saheryuz')}}">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;">{{ __('lang.cities') }}</p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('wels')}}">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;">{{ __('lang.welayat') }}</p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('howayagdayyuz')}}">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;"> {{ __('lang.how_yag') }}</p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('uguryuz')}}">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;">{{ __('lang.ugurs') }}</p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('photo')}}">
                        <i class="nav-icon far fa-image"></i>
                        <p style="color: black; font-size: large;">{{ __('lang.photos') }} </p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('users')}}">
                        <i class="nav-icon far fa-users"></i>
                        <p style="color: black; font-size: large;">{{ __('lang.users') }} </p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('logs')}}">
                        <i class="nav-icon far fa-users"></i>
                        <p style="color: black; font-size: large;">{{ __('lang.logs') }} </p>

                    </a>
                </li>

                <li class="nav-item">
                    <a  href="{{route('login')}}" onclick="return logout(event);">
                        <i class="fas fa-desktop"></i>
                        <p style="color: black; font-size: large;">{{ __('lang.exit') }}</p>

                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>




            </ul>
        </div>



    </div>
</div>


<!-- End Sidebar -->
