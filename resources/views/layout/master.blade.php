<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BANK PAPUA</title>
  <link rel = "icon" href ="https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200X200.png" type = "image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="shortcut icon" href="/favicon.ico" />
  <!-- DataTables -->
  <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/dist/img/Logo Bank Papua.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">Bank Papua</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="/divisi" class="nav-link">
              <i class="nav-icon fas fa-divide"></i>
              <p>
                Dashboard 1
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/divisi" class="nav-link">
              <i class="nav-icon fas fa-divide"></i>
              <p>
                Dashboard 2
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a class="nav-link">
              &nbsp;<i class=" fas fa-users"></i>
              <p>
                &nbsp;&nbsp;User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/jenis_user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis User</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/divisi" class="nav-link">
              <i class="nav-icon fas fa-divide"></i>
              <p>
                Division
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/cabang" class="nav-link">
              <i class="nav-icon fas fa-code-branch"></i>
              <p>
                Branch
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/question" class="nav-link">
              <i class="nav-icon fas fa-question"></i>
              <p>
                Question
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/answer" class="nav-link">
              <i class="nav-icon fas fa-reply"></i>
              <p>
                Answer
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-header">SETTING</li>
          <li class="nav-item has-treeview">
            <a class="nav-link">
              &nbsp;<i class=" fas fa-cog"></i>
              <p>
                &nbsp;&nbsp;Pengaturan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/change_password" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ubah Password</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              &nbsp;&nbsp;<i class="fas fa-sign-out-alt" aria-hidden="true"></i>
              <p>
              &nbsp;&nbsp;Logout
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
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="/adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- ChartJS -->
<script src="/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- overlayScrollbars -->
<script src="/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- jQuery Mapael -->
<script src="/adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/adminlte/plugins/raphael/raphael.min.js"></script>
<script src="/adminlte/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/adminlte/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- PAGE SCRIPTS -->
<script src="/adminlte/dist/js/pages/dashboard2.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
