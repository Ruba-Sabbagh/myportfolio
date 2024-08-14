<!DOCTYPE html>
<html>
@include('backend.dashboard.components.head')
<body class="hold-transition sidebar-mini layout-fixed">
<!-- ./wrapper -->
<div class="wrapper">
    @include('backend.layouts.sidebar')
    @yield('content')
    @include('backend.layouts.footer')
 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
     
</div>
</body>
</html>