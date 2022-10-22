<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('admin.layouts.head')
</head>

<body class="fixed-left" style="font-family: 'Cairo', sans-serif;">
    @include('admin.layouts.Loader')
    <div id="wrapper">
        @include('admin.layouts.LeftSidebar')
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                  <!-- TopBar Start -->
                  <div class="topbar">

                    <div class="topbar-left	d-none d-lg-block">
                        <div class="text-center">
                            <a href="{{route('home')}}" class="logo"><img src="{{ asset('dash/assets/images/logo (2).png') }}" width="150"  height="35" alt="logo"></a>
                        </div>
                    </div>

                    <nav class="navbar-custom">

                         <!-- Search input -->
                         <div class="search-wrap" id="search-wrap">
                            <div class="search-bar">
                                <input class="search-input" type="search" placeholder="Search" />
                                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                    <i class="mdi mdi-close-circle"></i>
                                </a>
                            </div>
                        </div>

                        <ul class="list-inline float-right mb-0">



                            <li class="list-inline-item dropdown notification-list nav-user">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('dash/assets/images/users/avatar-6.jpg') }}" alt="user" class="rounded-circle">
                                    <span class="d-none d-md-inline-block ml-1">{{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">


                                    <div class="dropdown-divider"></div>

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a class="dropdown-item" :href="route('logout')"
                                           onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="dripicons-exit text-muted"></i> تسجيل الخروج</a>
                                    </form>



                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                           <li class="list-inline-item">
                                <button type="button" class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>


                        </ul>


                    </nav>

                </div>
                <!-- Top Bar End -->

                <div class="page-content-wrapper ">

                    <div class="container-fluid">

                        @yield('content ')



                    </div><!-- container fluid -->

                </div> <!-- Page content Wrapper -->

                @yield('content')
            </div>

            @include('admin.layouts.footer')
        </div>
    </div>

    @include('admin.layouts.footerjs')

</body>

</html>
