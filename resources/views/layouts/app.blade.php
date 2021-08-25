<?php use App\User; ?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Servicios Generales</title>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('dist/js/adminlte.js') }}" defer></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-table-cards/tableToCards.js') }}"></script>
    <script src="{{ asset('plugins/popper/umd/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Script de Google charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">





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
                    <!--<img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">-->
                    <span class="brand-text font-weight-light  ">Servicios Generales</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src={{ asset('dist/img/user2-160x160.jpg') }} class="img-circle elevation-2"
                                alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" style="font-weight: bold; font-size: 18px;" class="d-block">
                                {{ Auth::user()->name }}
                            </a>
                            @guest
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                            @else
                                <a class=""  href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    Cerrar Sesión
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                            @endguest
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            <li class="nav-item">
                                <a href="{{ url('/') }}" class="{{ Request::path() === '/' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>Inicio</p>
                                </a>
                            </li>


                            @can('usuarios.index')

                                <li class="nav-item">
                                    <a href="{{ url('usuarios') }}"
                                        class="{{ Request::path() === 'usuarios' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>
                                            Usuarios
                                            <?php $users_count = User::all()->count(); ?>

                                            <span class="right badge badge-light">{{ $users_count ?? '0' }}</span>
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
                        <a href="{{ asset('notas/todas') }}"
                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Todas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ asset('notas/favoritas') }}"
                            class="{{ Request::path() === 'notas/favoritas' ? 'nav-link active' : 'nav-link' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Favoritas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ asset('notas/archivadas') }}"
                            class="{{ Request::path() === 'notas/archivadas' ? 'nav-link active' : 'nav-link' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Archivadas</p>
                        </a>
                    </li>
                </ul>
            </li>
        -->

                            {{-- @can('desechos.create')
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
            @endcan --}}
                                @canany(['compresor.index', 'agua.index', 'desechos.index'])
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-file-alt"></i>
                                    <p>Reportes <i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-tlarareeview">
                                    @can('compresor.index')
                                        <li class="nav-item">
                                            <a href="{{ url('reportes/compresor') }}"
                                                class="{{ Request::path() === 'reportes/compresor' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Compresor</p>
                                            </a>
                                        </li>
                                    @endcan
                                    @can('agua.index')
                                        <li class="nav-item">
                                            <a href="{{ url('reportes/agua') }}"
                                                class="{{ Request::path() === 'reportes/agua' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Agua</p>
                                            </a>
                                        </li>
                                    @endcan
                                    @can('desechos.index')
                                        <li class="nav-item">
                                            <a href="{{ url('reportes/desechos') }}"
                                                class="{{ Request::path() === 'reportes/desechos' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Deshechos</p>
                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                            @endcanany
                            @canany(['vehiculos.indexuser','vehiculos.indexadmin'])
                           
                                        <li class="nav-item has-treeview">
                                            <a href="#"
                                                class="{{ Request::path() === 'vehiculos/index' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-car"></i>
                                                <p>Préstamo vehicular <i class="fas fa-angle-left right"></i></p>
                                            </a>
                                            {{--  --}}
                                            <ul class="nav nav-treeview">
                                                    <li class="nav-item">
                                                        <a href="{{ url('vehiculos') }}"
                                                            class="{{ Request::path() === 'vehiculos' ? 'nav-link active' : 'nav-link' }}">
                                                            <i class="far fa-circle nav-icon"></i>
                                                            <p>En proceso</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ url('vehiculos/finalizados') }}"
                                                            class="{{ Request::path() === 'vehiculos/finalizados' ? 'nav-link active' : 'nav-link' }}">
                                                            <i class="far fa-circle nav-icon"></i>
                                                            <p>Finalizados</p>
                                                        </a>
                                                    </li>
                                            </ul>
                                            {{--  --}}
                                        </li>

                                @endcanany
                            <li class="nav-item has-treeview">
                                <a href="#"
                                    class="{{ Request::path() === 'emergencias/create' ? 'nav-link active' : 'nav-link' }}">

                                    <i class="nav-icon fas fa-exclamation-triangle"></i>
                                    <p>Emergencias <i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('emergencias/create') }}"
                                            class="{{ Request::path() === 'emergencias/create' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Crear reporte</p>
                                        </a>
                                    </li>
                                    @can('usuarios.show')
                                        <li class="nav-item">
                                            <a href="{{ url('emergencias') }}"
                                                class="{{ Request::path() === 'emergencias/index' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Ver reportes</p>
                                            </a>
                                        </li>
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

    {{-- scrips--------------------------- --}}
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{ asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <!-- InputMask -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- bootstrap color picker -->
    <script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Bootstrap Switch -->
    <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <!-- AdminLTE App -->
    {{-- <script src="{{ asset('dist/js/adminlte.min.js') }}"></script> --}}
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset(dist/js/demo.js) }}"></script> --}}
    <!-- Page script -->

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            });

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });

        })

    </script>


</body>

</html>
