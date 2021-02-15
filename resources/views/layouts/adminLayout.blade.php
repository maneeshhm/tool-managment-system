<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- jQuery -->
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('backend/plugins/jquery-ui/jquery-ui.min.js') }}""></script>
    <!-- Font Awesome -->
     <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    {{-- database table for data searching in admin users  --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <!-- <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <!-- <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css"> -->
    <!-- summernote -->
    <!-- <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css"> -->
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    {{-- sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="http://127.0.0.1:8000/" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/logout') }}" class="nav-link">Logout</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">

                <li class="nav-item dropdown">
                    {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a> --}}

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

                </li>
                <!--  <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-clipboard"></i>
                                <p>
                                    Order Manage
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('view.order') }}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Orders</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-box-open"></i>
                                <p>
                                    Product Manage
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.toolsadd') }}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Tool</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.toolsview') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Tool</p>
                                    </a>
                                </li>
                            </ul>
                            
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>
                                    User Manage
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.register') }}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>User Register</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.view') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View User</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-address-book"> </i>
                                <p>
                                    Contact
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

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
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            {{-- <h1 class="m-0 text-dark">title</h1> --}}
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                {{-- content body start --}}
                <div class="container">

                    <div class="row">
                        <div class="col">
                            @yield('content')
                            @yield('scripts')
                        </div>

                    </div>

                </div>

                {{-- content body end --}}
            </div>
            <!-- /.content-header -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"]);

    <!-- ./wrapper -->


    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>

    {{-- for datatables start --}}
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    {{-- for datatables end --}}


    <!-- Bootstrap 4 -->
    <script src=" {{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <!-- <script src="plugins/chart.js/Chart.min.js"></script> -->
    <!-- Sparkline -->
    <!-- <script src="plugins/sparklines/sparkline.js"></script> -->
    <!-- JQVMap -->
    <!-- <script src="plugins/jqvmap/jquery.vmap.min.js"></script> -->
    <!-- <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
    <!-- jQuery Knob Chart -->
    <!-- <script src="plugins/jquery-knob/jquery.knob.min.js"></script> -->
    <!-- daterangepicker -->
    <!-- <script src="plugins/moment/moment.min.js"></script> 
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    
    <!-- Summernote -->
    <!-- <script src="plugins/summernote/summernote-bs4.min.js"></script> -->
    <!-- overlayScrollbars -->
    <script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="{{ asset('backend/dist/js/pages/dashboard.js') }}"></script> --}}
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="dist/js/demo.js"></script> -->
    <!-- Tempusdominus Bootstrap 4 -->
    {{-- <script src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script> --}}

    <script>
        $('[data-widget="pushmenu"]').PushMenu('toggle')

    </script>
</body>

</html>
