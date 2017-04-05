<!DOCTYPE html>
<html>
<head>
    @include($header)
    @yield('extra-css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        @include($nav_bar)
    </header>
    <!-- Left side column. contains the logo and sidebar -->
@include($sidebar)
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->
            @yield('dashboard-content')
            <!-- /.row -->
            @yield('main-content')

            <!-- /.row -->
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->

<script src="{{asset($js_path.'jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset($js_path.'bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset($js_path.'fastclick.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset($js_path.'app.min.js')}}"></script>
{{--<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->--}}
<script src="{{asset($js_path.'jquery.slimscroll.min.js')}}"></script>
{{--<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>--}}
@yield('extra-scripts')
</body>
</html>
