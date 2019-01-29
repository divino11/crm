<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header class="topbar">
    <div class="container-fluid">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header"><a class="navbar-brand" href="https://full.mintone.xyz">
                    <!-- Logo icon -->
                    <b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="https://full.mintone.xyz/assets/imgs/logo-icon.png" alt="homepage" class="dark-logo">
                        <!-- Light Logo icon -->
                        <img src="https://full.mintone.xyz/assets/imgs/logo-light-icon.png" alt="homepage"
                             class="light-logo"> </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span>
          <!-- dark Logo text -->
          <img src="https://full.mintone.xyz/assets/imgs/logo-text.png" alt="homepage" class="dark-logo dark-logo2">
                        <!-- Light Logo text -->
          <img src="https://full.mintone.xyz/assets/imgs/logo-light-text.png" class="light-logo" alt="homepage"></span>
                </a></div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="top-bar-main">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <div class="float-left">
                    <ul class="navbar-nav">
                        <li class="nav-item "><a
                                    class="nav-link navbar-toggler sidebartoggler waves-effect waves-dark float-right"
                                    href="javascript:void(0)"><span class="navbar-toggler-icon"></span></a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down app-search">
                            <input type="text" class="form-control float-left" placeholder="Type for search...">
                        </li>
                    </ul>
                </div>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->

                <div class="float-right pr-3">
                    <ul class="navbar-nav my-lg-0 float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark"
                                                         href="" data-toggle="dropdown" aria-haspopup="true"
                                                         aria-expanded="false"> <i class="mdi mdi-bell"></i>
                                <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated fadeIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have <span class="highlighted">3 new</span>
                                            Notifications
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center ps ps--theme_default"
                                             data-ps-id="5c3ec03a-9709-cd4a-5718-dbdeec8325c9">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="mail-content"><i class="fas fa-envelope"></i> 2 new
                                                    messages
                                                    <span class="float-right text-light">15:07</span></div>
                                            </a>
                                            <!-- Message -->
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="mail-content"><i class="fas fa-comment"></i> 1 new
                                                    comment
                                                    <span class="float-right text-light">11.08.2018</span></div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="mail-content"><i class="fas fa-calendar-alt"></i> 2
                                                    Events
                                                    Soon <span class="float-right text-light">10.08.2018</span>
                                                </div>
                                            </a>
                                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                                <div class="ps__scrollbar-x" tabindex="0"
                                                     style="left: 0px; width: 0px;"></div>
                                            </div>
                                            <div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;">
                                                <div class="ps__scrollbar-y" tabindex="0"
                                                     style="top: 0px; height: 0px;"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a class="nav-link text-center" href="javascript:void(0);">See all
                                            notifications </a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark"
                                                         href="" id="2" data-toggle="dropdown" aria-haspopup="true"
                                                         aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right animated fadeIn" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have <span class="highlighted">7 new</span>
                                            messages
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center ps ps--theme_default"
                                             data-ps-id="bf48ab5c-bbd0-2880-a6f5-d6804034fb31">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"><img
                                                            src="https://full.mintone.xyz/assets/imgs/users/1.jpg"
                                                            alt="user" class="img-circle"> <span
                                                            class="profile-status online pull-right"></span></div>
                                                <div class="mail-content">
                                                    <div class="float-left">
                                                        <h5 class="mt-0 text-dark">Amanda Robertson</h5>
                                                        <span class="mail-desc text-light mt-1">Guterres was elec...</span>
                                                    </div>
                                                    <span class="float-right text-light text-right">11:18 <span
                                                                class="clearfix"></span> <span
                                                                class="label label-rounded label-primary">1</span> </span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"><img
                                                            src="https://full.mintone.xyz/assets/imgs/users/img2.jpg"
                                                            alt="user" class="img-circle"> <span
                                                            class="profile-status online pull-right"></span></div>
                                                <div class="mail-content">
                                                    <div class="float-left">
                                                        <h5 class="mt-0 text-dark">Danny Donavan</h5>
                                                        <span class="mail-desc text-light mt-1">Guterres was elec...</span>
                                                    </div>
                                                    <div class="float-right text-light text-right">09.07.2018 <span
                                                                class="clearfix"></span> <span
                                                                class="label label-rounded label-primary">2</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"><img
                                                            src="https://full.mintone.xyz/assets/imgs/users/1.jpg"
                                                            alt="user" class="img-circle"> <span
                                                            class="profile-status online pull-right"></span></div>
                                                <div class="mail-content">
                                                    <div class="float-left">
                                                        <h5 class="mt-0 text-dark">Frank Hendrics</h5>
                                                        <span class="mail-desc text-light mt-1">Guterres was elec...</span>
                                                    </div>
                                                    <div class="float-right text-light text-right">10.08.2018 <span
                                                                class="clearfix"></span> <span
                                                                class="label label-rounded label-primary">4</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                                <div class="ps__scrollbar-x" tabindex="0"
                                                     style="left: 0px; width: 0px;"></div>
                                            </div>
                                            <div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;">
                                                <div class="ps__scrollbar-y" tabindex="0"
                                                     style="top: 0px; height: 0px;"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a class="nav-link text-center" href="javascript:void(0);">See all
                                            notifications </a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>

                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
        </nav>
    </div>
</header>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div id="app" class="position-fixed">
                    <nav class="navbar navbar-expand-md navbar-light h100vh">
                        <aside class="left-sidebar">
                            <div class="w-100 text-center">
                                <a class="navbar-brand" href="{{ url('/') }}">
                                    {{ config('app.name', 'Laravel') }}
                                </a>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <nav class="sidebar-nav">
                                    <ul id="sidebarnav">
                                        <li class="clearfix"></li>

                                        <li class="menu_dropdown"><a class="has-arrow waves-effect waves-dark" href="#"
                                                                     aria-expanded="false"><i
                                                        class="fa fa-desktop"></i><span
                                                        class="hide-menu">Dashboard</span></a>
                                            <ul aria-expanded="false" class="collapse">
                                                <li><a href="https://full.mintone.xyz/server"
                                                       class="menu_dropdown">Server</a>
                                                </li>
                                                <li><a href="https://full.mintone.xyz/project"
                                                       class="menu_dropdown">Project</a>
                                                </li>
                                                <li><a href="https://full.mintone.xyz/analytics"
                                                       class="menu_dropdown">Analytics</a></li>
                                                <li><a href="https://full.mintone.xyz/shop"
                                                       class="menu_dropdown">Shop</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li><a href="https://full.mintone.xyz/role-management"><i
                                                        class="fa fa-folder"></i><span
                                                        class="hide-menu">Role Management</span></a>
                                        </li>

                                        <li class="menu_dropdown"><a class="has-arrow waves-effect waves-dark" href="#"
                                                                     aria-expanded="false"><i
                                                        class="fa fa-users"></i><span
                                                        class="hide-menu">Clients</span></a>
                                            <ul aria-expanded="false" class="collapse">
                                                <li><a href="{{ route('clients.index') }}" class="menu_dropdown">Manage
                                                        Clients</a></li>
                                                <li><a href="https://full.mintone.xyz/user/create"
                                                       class="menu_dropdown">Add
                                                        New
                                                        Client</a>
                                                </li>
                                                <li><a href="https://full.mintone.xyz/user/deleted"
                                                       class="menu_dropdown">Deleted
                                                        Client</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <hr>
                                        </li>
                                        <li><a href="https://full.mintone.xyz/crud-generator"><i
                                                        class="fa fa-th-large"></i><span
                                                        class="hide-menu">CRUD Generator</span></a>
                                        </li>
                                        <li class="menu_dropdown"><a class="has-arrow waves-effect waves-dark" href="#"
                                                                     aria-expanded="false"><i
                                                        class="fa fa-eye"></i><span
                                                        class="hide-menu">Logs</span></a>
                                            <ul aria-expanded="false" class="collapse">
                                                <li><a href="https://full.mintone.xyz/log-viewer" class="menu_dropdown">Laravel
                                                        Logs</a>
                                                </li>
                                                <li><a href="https://full.mintone.xyz/activity-log"
                                                       class="menu_dropdown">Activity
                                                        Logs</a>
                                                </li>
                                            </ul>
                                        </li>


                                        <li class="menu_dropdown"><a class="has-arrow waves-effect waves-dark" href="#"
                                                                     aria-expanded="false"><i
                                                        class="fa fa-comment"></i><span
                                                        class="hide-menu">Blog</span></a>
                                            <ul aria-expanded="false" class="collapse">
                                                <li><a href="https://full.mintone.xyz/blog-category">Blog Categories</a>
                                                </li>

                                                <li><a href="https://full.mintone.xyz/blog">Blog List</a></li>

                                                <li><a href="https://full.mintone.xyz/blog/create">Add New Blog</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="https://full.mintone.xyz/account-settings"><i
                                                        class="fa fa-cog"></i><span
                                                        class="hide-menu">Account Settings</span></a>
                                        </li>
                                        <li>
                                            <hr>
                                        </li>

                                        <li><a href="https://full.mintone.xyz/calendar" class="menu_dropdown"><i
                                                        class="fa fa-calendar"></i><span
                                                        class="hide-menu">Calendar</span></a>
                                        </li>

                                        <li><a href="https://full.mintone.xyz/mail"><i class="fa fa-envelope"></i><span
                                                        class="hide-menu">Mail</span></a>
                                        </li>
                                        <li><a href="https://full.mintone.xyz/chat"><i class="fa fa-comments"></i><span
                                                        class="hide-menu">Chat</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </aside>
                    </nav>
                </div>
            </div>
            <div class="col-md-10">
                <div class="content-main">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
