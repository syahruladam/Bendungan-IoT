<?php
  require("connection.php"); // memanggil file koneksi.php untuk koneksi ke database
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="refresh" content="5">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bendungan</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">


        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/hydroelectricity.png" alt="hydroelectricity"
                    class="brand-image img-circle elevation-3 bg-white">
                <span class="brand-text font-weight-bolder">BENDUNGAN</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="brand-image img-circle elevation-3"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-bold">Admin</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/tables/simple.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Simple Tables</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/data.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>DataTables</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>jsGrid</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">


                                <div class="info-box-content">
                                    <a href="aksi.php?channel=1&state=1" class="btn btn-success">BUKA</a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">


                                <div class="info-box-content">
                                    <a href="aksi.php?channel=1&state=0" class="btn btn-danger">TUTUP</a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">


                                <div class="info-box-content">
                                    <span class="info-box-text text-bold">STATUS BENDUNGAN</span>
                                    <?php 
                        require("connection.php");
                        $sql = mysqli_query($dbConnect,"SELECT  * FROM tb_sensor");
                        while ($row = mysqli_fetch_assoc($sql)) {
                    if($row['Kondisi'] == 0) {
                        $state = "TUTUP";
                    } else {
                        $state = "BUKA";
                    }
                    echo $state;
                    ?>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">


                                <div class="info-box-content">
                                    <span class="info-box-text text-bold">STATUS AIR SAAT INI</span>
                                    <?php 
                        require("connection.php");
                        $sql = mysqli_query($dbConnect,"SELECT  * FROM datasensor");
                        while ($row = mysqli_fetch_assoc($sql)) {
                    if($row['data'] <= 1) {
                        $state = "KOSONG";
                    } else if($row['data'] >= 1 && $row['data'] <= 2) {
                        $state = "SANGAT RENDAH";
                    } else if($row['data'] >= 2 && $row['data'] <= 3) {
                        $state = "SEDANG";
                    } else if($$row['data'] >= 3 && $row['data'] <= 4) {
                        $state = "CUKUP";
                    } else if($row['data'] == 4) {
                        $state = "TINGGI";
                    }
                    echo $state;
                    ?>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->



                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-md-8 ">
                            <!-- TABLE: LATEST ORDERS -->
                            <div class="card ">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title text-bold">DATA KETINGGIAN AIR</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Data</th>
                                                    <th>Waktu</th>
                                                </tr>
                                                <?php

          $sql = mysqli_query($dbConnect, "SELECT * FROM datasensor ORDER BY id DESC");

          if(mysqli_num_rows($sql) == 0){ 
            echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>'; // jika tidak ada entri di database maka tampilkan 'Data Tidak Ada.'
          }else{ // jika terdapat entri maka tampilkan datanya
            $no = 1; // mewakili data dari nomor 1
            while($row = mysqli_fetch_assoc($sql)){ // fetch query yang sesuai ke dalam array
              echo '
              <tr>
                <td>'.$no.'</td>
                <td>'.$row['data'].'</td>
                <td>'.$row['waktu'].'</td>
              </tr>
              ';
              $no++; // mewakili data kedua dan seterusnya
            }
          }
          ?>
                                            </thead>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New
                                        Order</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All
                                        Orders</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->




                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
        </div>
        <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">Bendungan</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
    <?php
    }
?>
    <?php
    }
?>
</body>

</html>