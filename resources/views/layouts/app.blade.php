<?php use App\User; ?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>AdminLTE 3</title>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('dist/js/adminlte.js') }}" defer></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-table-cards/tableToCards.js')}}"></script>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">


<!-- Fonts --> 
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div id="app">
<div class="wrapper">


<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<!-- Left navbar links -->
<ul class="navbar-nav">
    <li class="nav-item">

        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
</ul>

@yield('search')

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
    {{--     <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
        </a> --}}
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                    <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                        class="img-size-50 mr-3 img-circle">
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                            Brad Diesel
                            <span class="float-right text-sm text-danger"><i
                                    class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">Call me whenever you can...</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                    </div>
                </div>
                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                    <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                        class="img-size-50 img-circle mr-3">
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                            John Pierce
                            <span class="float-right text-sm text-muted"><i
                                    class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">I got your message bro</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>

                    </div>
                </div>
                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                    <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                        class="img-size-50 img-circle mr-3">
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                            Nora Silvester
                            <span class="float-right text-sm text-warning"><i
                                    class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">The subject goes here</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                    </div>
                </div>
                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
        {{-- <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
        </a> --}}
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>

            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
    </li>
</ul>
</nav>
<!-- /.navbar -->


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
<!-- Brand Logo -->
<a href="{{ url('/') }}" class="brand-link">
    <!--<img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">-->
    <span class="brand-text font-weight-light  " >Servicios Generales</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src={{asset('dist/img/user2-160x160.jpg')}} class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">
                @guest
                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                @else
                {{ Auth::user()->name }}
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    <p style="color:gray">Cerrar Sesión</p> 
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form>

                @endguest
            </a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">

            <li class="nav-item">
                <a href="/" class="{{ Request::path() === '/' ? 'nav-link active' : 'nav-link' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Inicio</p>
                </a>
            </li>


            @can('usuarios.index')

            <li class="nav-item">
                <a href="{{url('usuarios')}}"
                    class="{{ Request::path() === 'usuarios' ? 'nav-link active' : 'nav-link' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Usuarios
                        <?php  $users_count = User::all()->count(); ?>
                        
                        <span class="right badge badge-danger">{{ $users_count ?? '0' }}</span>
                    </p>
                </a>
            </li>
            
            @endcan
            
            <!--
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-sticky-note"></i>
                    <p>Notas<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{asset('notas/todas')}}"
                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Todas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{asset('notas/favoritas')}}"
                            class="{{ Request::path() === 'notas/favoritas' ? 'nav-link active' : 'nav-link' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Favoritas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{asset('notas/archivadas')}}"
                            class="{{ Request::path() === 'notas/archivadas' ? 'nav-link active' : 'nav-link' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Archivadas</p>
                        </a>
                    </li>
                </ul>
            </li>
        -->

        @can('desechos.create')
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    <p>Crear reporte <i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('reportes/compresor/create')}}"
                            class="{{ Request::path() === 'reportes/compresor/create' ? 'nav-link active' : 'nav-link' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Compresor</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('reportes/agua/create')}}"
                            class="{{ Request::path() === 'reportes/agua/create' ? 'nav-link active' : 'nav-link' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Agua</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('reportes/desechos/create')}}"
                            class="{{ Request::path() === 'reportes/desechos/create' ? 'nav-link active' : 'nav-link' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Deshechos</p>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan

            @can('desechos.show')
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-file-alt"></i>
                    <p>Ver reportes <i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('reportes/compresor')}}"
                            class="{{ Request::path() === 'reportes/compresor' ? 'nav-link active' : 'nav-link' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Compresor</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('reportes/agua')}}"
                            class="{{ Request::path() === 'reportes/agua' ? 'nav-link active' : 'nav-link' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Agua</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('reportes/desechos')}}"
                            class="{{ Request::path() === 'reportes/desechos' ? 'nav-link active' : 'nav-link' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Deshechos</p>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan
            @can('usuarios.index')
                <li class="nav-item has-treeview">
                    <a href="#" class="{{ Request::path() === 'emergencias/create' ? 'nav-link active' : 'nav-link' }}" >
                        
                        <i class="nav-icon fas fa-exclamation-triangle"></i>
                        <p>Emergencias <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('emergencias/create')}}"
                                class="{{ Request::path() === 'emergencias/create' ? 'nav-link active' : 'nav-link' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Crear reporte</p>
                            </a>
                        </li>
                        @can('usuarios.show')
                        <li class="nav-item">
                            <a href="{{url('emergencias')}}"
                                class="{{ Request::path() === 'emergencias/index' ? 'nav-link active' : 'nav-link' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ver reportes</p>
                            </a>
                        </li>
                        @endcan

                        @endcan
                    </ul>
                </li>
        
        </ul>

    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">

</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    @yield('content')
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
<!-- NO QUITAR -->
<strong>Servicios generales
    <div class="float-right d-none d-sm-inline-block">
        <b>Version 1.0</b> 
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
</div>
</body>

</html>