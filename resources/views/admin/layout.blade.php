<!Doctype html>
<html>
<head>
    <meta property="og:locale" content="en_US">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>{{ env('APP_NAME') }} - {{ $page_title }}</title>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{url('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('assets/admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="{{url('assets/admin/bower_components/morris.js/morris.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/admin/bower_components/fullcalendar/dist/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/admin/bower_components/fullcalendar/dist/fullcalendar.print.min.css')}}" media="print">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('assets/admin/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/admin/plugins/pace/pace.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/admin/dist/css/bootstrap-datepicker.min.css')}}">

    <!-- jQuery 3 -->
    <script src="{{url('assets/admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="{{url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{url('assets/admin/bower_components/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.5.0/sweet-alert.css">
    <!-- folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('assets/admin/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('assets/admin/css/style.css')}}">
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="{{url('/')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>{{env('APP_NAME')}}</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>{{env('APP_NAME')}}</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs">{{ucwords(auth()->user()->full_name)}}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>

                <li>
                    <a href="{{url('admin/dashboard')}}">
                        <i class="fa fa-home text-primary "></i>
                        <span>Dashboard</span>
                    </a>
                </li>



                <li>
                    <a href="{{url('admin/logout')}}">
                        <em class="fa fa-sign-out text-danger"></em>
                        <div class="label label-primary pull-right"></div>
                        <span>Logout</span>
                    </a>
                </li>
                <!-- END Menu-->
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{$page_title}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-home"></i> Dashboard</a></li>
                <li class="active">{{$page_title}}</li>
            </ol>
        </section>

        <section class="content">

            @include('flash')

            <div class="row">

                @yield('content')

            </div>
        </section>
    </div>
    <footer class="main-footer">
        <!-- <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.0.0-alpha
        </div> -->
        <span>Copyright &copy; 2020 - <?= date('Y'); ?>  <a href="{{url('/')}}" target="_blank">{{ env('APP_NAME') }}</a>.</span> All rights
        reserved.
    </footer>
</div>

<!-- /.control-sidebar -->
<!-- Bootstrap 3.3.7 -->
<script src="{{url('assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('assets/admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- PACE -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{url('assets/admin/bower_components/PACE/pace.min.js')}}"></script>
<script src="{{url('assets/admin/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{url('assets/admin/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{url('assets/admin/bower_components/morris.js/morris.min.js')}}"></script>
<!-- DataTables -->
<script src="{{url('assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('assets/admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- Slimscroll -->
<script src="{{url('assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('assets/admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('assets/admin/dist/js/adminlte.min.js')}}"></script>
<!-- Select2 -->
<script src="{{url('assets/admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->

<script src="{{url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{url('assets/admin/bower_components/ckeditor/ckeditor.js')}}"></script>
<script src="{{url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{url('assets/admin/dist/js/demo.js')}}"></script>
<script src="{{url('assets/admin/js/main.js')}}"></script>
<!-- fullCalendar -->
<script src="{{url('assets/admin/bower_components/moment/moment.js')}}"></script>
<script src="{{url('assets/admin/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
</body>
</html>