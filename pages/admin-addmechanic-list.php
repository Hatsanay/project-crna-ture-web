<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>list garage</title>

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
    margin-left: 60px;
    width: 100px;
  }
  .btn-a2{
    margin-left: 30px;
    width: 50px;
    background-color: #efdc01;
    border-color: #efdc01;
    color: black;
  }
  .btn-danger{
    /* margin-left: 30px; */
    width: 80px;
  }
</style>

<?php
  session_start();
  // Check if the user is logged in
  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    // The user is logged in, so retrieve their name from the session
    $user_name = $_SESSION['user_fullname'];
  } else {
    // The user is not logged in, so redirect them to the login page
    header('Location: ../login.php');
    exit;
  }
?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php
        include "../navbar-admin.php";
    ?>
  <!-- /.navbar -->

  <!-- Sidebar -->
    <?php
      include "admin-addmechanic-list-side.php";
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
                <h3 class="card-title">รายชื่อช่างอิสระ</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="notifytable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>รหัส</th>
                    <th>ชื่อ</th>
                    <th>ที่อยู่</th>
                    <th>เบอร์โทร</th>
                    <th>เพศ</th>
                    <th>แก้ไข</th>

                    
                    <!-- <th>ลบ</th> -->
                  </tr>
                  </thead>
                  <tbody>

      <?php
        include "connectpdo.php";
          $stmt = $conn->query("SELECT mechanic.*,sex.sexname AS mecsex,CONCAT(mechanic.mechanichousenum, ' ', 'หมู่',mechanic.mechanicgroup, ' ', 'ถนน',mechanic.mechanicroad, ' ', 'ซอย', mechanic.mechanicalley, ' ', 'ตำบล',districts.name_th, ' ', 'อำเภอ',amphures.name_th, ' ', 'จังหวัด',provinces.name_th,' ', mechanic.mechanicpostcode) AS mecaddress FROM `mechanic` INNER JOIN sex ON sex.sexid = mechanic.mechanicsex INNER JOIN provinces ON mechanic.mechanicprovince = provinces.id INNER JOIN amphures ON mechanic.mechanicarea = amphures.id INNER JOIN districts ON mechanic.mechanicdistrict = districts.id");
          $stmt->execute();

          $reqs= $stmt->fetchAll();
          foreach($reqs as $requ){
      ?> 
                  <tr>
                  <td><?php echo $requ['mechanicid']?></td>
                    <td><?php echo $requ['mechanicfullname']?></td>
                    <td><?php echo $requ['mecaddress']?></td>
                    <td><?php echo $requ['mechanictel']?></td>
                    <td><?php echo $requ['mecsex']?></td>

                    <td align = "center">    
                    <a href="admin-addmechanic-detail-edit.php?detial_id=<?php echo $requ['mechanicid']?>" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                    </td>
                    
                    <!-- <td>    
                        <a href="admin-officer-delete.php?delete_id=<?php echo $requ['useid']?>" class="btn btn-danger btn-a1">ลบ</a>
                    </td> -->
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
