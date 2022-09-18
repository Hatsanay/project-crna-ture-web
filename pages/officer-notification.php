<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>From Notify</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">


</head>


<style>
  .btn-a{
    margin-left: 40px;
    width: 70px;
  }
  .btn-a1{
    width: 70px;
  }
  .btn-a2{
    margin-left: 30px;
    width: 50px;
    background-color: #efdc01;
    border-color: #efdc01;
    color: black;
  }
</style>




<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


<!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../assets\logo2.png" alt="" height="500" width="666">
  </div> -->
  <!-- Navbar -->
  <?php
        include "../navbar-admin.php";
    ?>
  <!-- /.navbar -->

  <!-- Sidebar -->
    <?php
      include "officer-notification-side.php";
    ?>
  <!-- Sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper kanban">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <!-- <h1>แจ้งเตือน</h1> -->
          </div>
          <div class="col-sm-6 d-none d-sm-block">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">รอยืนยัน</a></li> -->
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div>

      <div class="card">
              <div class="card-header">
                <h3 class="card-title">รอยืนยันการแจ้งซ่อม</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="notifytable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>รหัส</th>
                    <th>หมายเลขห้อง</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ปัญหา</th>
                    <th>รายละเอียดเพิ่มเติม</th>
                    <th>เบอร์โทร</th>
                    <th>วันที่แจ้ง</th>
                    <th>รายละเอียด</th>
                    <th>ยืนยันแจ้งซ่อม</th>
                  </tr>
                  </thead>
                  <tbody>

      <?php
        include "connectpdo.php";
          $stmt = $conn->query("SELECT * FROM `request` WHERE reqstatus LIKE 'N'");
          $stmt->execute();

          $reqs= $stmt->fetchAll();
          foreach($reqs as $requ){
      ?> 
                  <tr>
                    <td><?php echo $requ['reqid']?></td>
                    <td><?php echo $requ['reqroom']?></td>
                    <td><?php echo $requ['name']?></td>
                    <td><?php echo $requ['reqproblem']?></td>
                    <td><?php echo $requ['reqdetails']?></td>
                    <td><?php echo $requ['reqtel']?></td>
                    <td><?php echo $requ['reqdate']?></td>
                    <td>    
                        <a href="officer-notification-detial.php?detial_id=<?php echo $requ['reqid']?>" class="btn btn-primary btn-a2"><i class="nav-icon fas fa-eye"></i></a>
                        <!-- <a href="admin-notify-status.php?update_id=<?php echo $requ['reqid']?>" class="btn btn-danger">ลบ</a> -->
                    </td>
                    
                    <td>    
                        <a href="officer-notification-status.php?update_id=<?php echo $requ['reqid']?>" class="btn btn-primary btn-a">ยืนยัน</a>
                        <a href="officer-notification-delete.php?delete_id=<?php echo $requ['reqid']?>" class="btn btn-danger btn-a1">ลบ</a>
                    </td>
                    
                  </tr>    
      <?php
          }
      ?>
          </tbody>
          </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

    </section>

    
  </div>

  <footer class="main-footer">
    <?php
        include "../footter.php";
    ?>
    <!-- <strong>Copyright &copy; 2022 <a href="">Hatsanai</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div> -->
  </footer>
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Filterizr-->
<script src="../plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->

<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script>
  $(function () {

  })
</script>

<script>
  $(document).ready( function () {
    $('#notifytable').DataTable();
} );
</script>
</body>
</html>
