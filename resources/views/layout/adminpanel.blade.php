<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agung Cargo|Kepegawaian</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css"
        integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .webcam-capture,
    .webcam-capture video {
        display: inline-block;
        width: 100% !important;
        margin: auto;
        height: auto !important;
        border-radius: 15px;
    }
</style>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                {{-- <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li> --}}

                <li class="nav-item dropdown user user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('dist/img/profile.png') }}" class="user-image img-circle elevation-2"
                            alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary">
                            <img src="{{ asset('dist/img/profile.png') }}" class="img-circle elevation-2"
                                alt="User Image">
                            <p>
                                {{ Auth::user()->name }}
                                <small></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        {{-- <li class="user-body">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li> --}}
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                {{-- <a href="{{ route('profile.edit') }}" class="btn btn-default btn-flat">Profile</a>
                                --}}
                                <x-dropdown-link :href="route('profile.edit')" class="btn btn-default btn-flat"
                                    style="color:black">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();" class="btn btn-default btn-flat"
                                        style="color:black">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- Notifications Dropdown Menu -->
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
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
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #5972b4 ">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                {{-- <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
                <span class="brand-text font-weight-light">Agung Cargo|Kepegawaian</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('dist/img/profile.png') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                {{-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> --}}

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        @role('user')
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'adminadmindashboard' ? 'active' : '' }}"
                                href="{{ url('/admin/admindashboard') }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'presensi.masuk' ? 'active' : '' }}"
                                href="{{ url('/presensi-karyawan') }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Presensi
                                </p>
                            </a>
                        </li>
                        @endrole
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'adminadmindashboard' ? 'active' : '' }}"
                                href="{{ url('/admin/admindashboard') }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'presensi.masuk' ? 'active' : '' }}"
                                href="{{ url('/presensi-karyawan') }}">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    Presensi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Roles & Permissions
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::route()->getName() == 'adminroles.index' ? 'active' : '' }}"
                                        href="{{ url('/admin/roles') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Roles</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::route()->getName() == 'adminpermissions.index' ? 'active' : '' }}"
                                        href="{{ url('/admin/permissions') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Permissions</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'adminuser.index' ? 'active' : '' }}"
                                href="{{ url('/admin/users') }}">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Akun
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Manajemen Karyawan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link fas fa-user {{ Request::route()->getName() == 'karyawan.index' ? 'active' : '' }}"
                                        href="{{ url('/karyawan') }}">
                                        <i></i>
                                        <p>Data Karyawan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fas fa-check{{ Request::route()->getName() == 'presensi.index' ? 'active' : '' }}"
                                        href="{{ url('/presensi') }}">
                                        <p>Data Presensi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fas fa-calendar{{ Request::route()->getName() == 'adminpermissions.index' ? 'active' : '' }}"
                                        href="{{ url('/admin/permissions') }}">
                                        <p>Cuti</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fas fa-arrow-up{{ Request::route()->getName() == 'promosi.index' ? 'active' : '' }}"
                                        href="{{ url('/promosi') }}">
                                        <p>Promosi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fas fa-suitcase{{ Request::route()->getName() == 'adminpermissions.index' ? 'active' : '' }}"
                                        href="{{ url('/admin/permissions') }}">
                                        <p>Mutasi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fas fa-arrow-down{{ Request::route()->getName() == 'adminpermissions.index' ? 'active' : '' }}"
                                        href="{{ url('/admin/permissions') }}">
                                        <p>Demosi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fas fa-window-close {{ Request::route()->getName() == 'adminpermissions.index' ? 'active' : '' }}"
                                        href="{{ url('/admin/permissions') }}">
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        <i></i>
                                        <p>PHK</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'karyawan.index' ? 'active' : '' }}"
                                href="{{ url('/karyawan') }}">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Data Karyawan
                                </p>
                            </a>
                        </li> --}}
                        {{-- <li>
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-window-close"></i>
                                <p>
                                    PHK
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'beritas.index' ? 'active' : '' }}"
                                href="{{ url('/beritas') }}">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Berita
                                </p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'karirs.index' ? 'active' : '' }}"
                                href="{{ url('/karirs') }}">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Karir | Loker
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'adminlamaran.edit' ? 'active' : '' }}"
                                href="{{ url('admin/data-lamaran') }}">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Lamaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'masterbanner.index' ? 'active' : '' }}"
                                href="{{ url('/masterbanner') }}">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Master Banner
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::url() == '/dashboard' ? 'active' : '' }}"
                                href="{{ url('/dashboard') }}">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Landing Page
                                </p>
                            </a>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('title')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">@yield('title')</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">@yield('title')</h3>
                    </div>
                    @if (Session::has('message'))
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-info"></i> Alert!</h5>
                        {{ Session::get('message') }}
                    </div>
                    @endif
                    <div class="card-body">
                        @yield('content')
                    </div>
                    <!-- /.card-body -->
                    {{-- <div class="card-footer">
                        Footer
                    </div> --}}
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2023 <a href="https://agungcargo.com">Agung Cargo</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->

    @include('layouts.script')
    {{-- <script>
        Webcam.set({
                width: 480,
                height: 640,
                image_format: 'jpeg',
                jpeg_quality: 75
            });
            Webcam.attach('.webcam-capture');
    </script> --}}
</body>

</html>