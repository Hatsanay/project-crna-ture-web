<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Level</title>

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
</head>

<style>
  .content-wrapper.kanban .card .card-body {
    padding: 0.5rem;
    height: 550px;
  }
  .card-warning:not(.card-outline)>.card-header {
    background-color: #20c997;
  }
  .card-title {
    float: left;
    font-size: 1.1rem;
    font-weight: 400;
    margin: 0;
    color: white;
  }
  .btn1{
    /* margin: 130px;
    margin-left: 250px; */
    width: 110px;
    background-color: #20c997;
    border-color: #20c997;
  }
  .btn-primary:hover {
    color: #fff;
    background-color: #077e5b;
    border-color: #077e5b;
}
.btn2{
  /* margin-top: -370px;
    margin-left: 380px; */
    width: 108px;
    background-color: red;
    border-color: red;
    color: white;  
}

.btn2:hover{
    background-color: #881111;
    border-color: #881111; 
    color: white; 
}
.pd{
  padding-left: 5px;
}
</style>


<?php
		include "../connect.php";

	
    $sqltypememid = "SELECT * FROM `distric`";
	$all_sqltypememid = mysqli_query($con,$sqltypememid);
  
    // while ($sqltypememid = mysqli_fetch_array(
    //     $all_sqltypememid,MYSQLI_ASSOC)):;
    //     $memtypememid = $sqltypememid["typememid"];
    // endwhile;
?>


<script type="text/javascript">
function fncSubmit()
{
    if(document.getElementById('districtname').value == "")
    {
        alert('กรุณากรอกชื่อตำบล');
        return false;
    }

    // else if(document.getElementById('typememid').value ==  $all_sqltypememid)
    // {
    //     alert('ID นี้มีอยู่แล้ว');
    //     return false;
    // }


    
  
    
}
</script>

<body class="hold-transition sidebar-mini layout-fixed">

  <?php
        include "../navbar.php";
    ?>

  <!-- Sidebar -->
    <?php
      include "admin-addseting-side.php";
    ?>
  <!-- Sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper kanban">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <!-- <h1>ส่งคำร้องแจ้งซ่อมบำรุง</h1> -->
          </div>
          <div class="col-sm-6 d-none d-sm-block">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">แจ้งซ่อม</a></li> -->
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div>

      <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">เพิ่มตำบล</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body-sm">
                <form action="admin-addseting-district-post.php"  method="POST" onSubmit="JavaScript:return fncSubmit();" >
                  <div class="row pd">
                    <!-- <div class="col-sm-1">
                      <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" placeholder="" name="typememid" id="typememid">
                      </div>
                    </div> -->

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>ชื่อตำบล</label>
                        <input type="text" class="form-control" placeholder="" name="districtname" id="districtname">
                      </div>
                    </div>


                    <div class="col-sm-1">
                      <div class="form-group btnpd">
                      <label>ดูตำบล</label>
                     
                      <a href="admin-addseting-district-list.php" class="btn btn-success"><i class="fas fa-eye"></i></a>
                        <!-- <a href=""><input type="button" class="btn btn-primary btn-block" value="เพิ่มสิทธิ์"></a> -->
                      </div>
                    </div>

                  </div>

                  
                  

                  </div>
                

                    
      



                  


                


                  <div class="row pd">
                    <div class="col-sm-6">
                      
                      <!-- <div class="form-group">
                        <label>รหัส(Password)</label>
                        <textarea class="form-control" rows="3" placeholder="12345678" name="apassword"></textarea>
                      </div> -->

                      <div class="form-group">
                        <button class="btn btn-primary btn-lg btn1" type="submit" value="" name="submit">เพิ่ม</button>
                        <button class="btn btn-lg btn2" type="reset" value="">ลบ</button>
                      
                      </div>
                      <!-- <div class="form-group">
                        <button class="btn btn-lg btn2" type="reset" value="">ลบ</button>
                      </div> -->
                    </div>
                  </div>
                

                    <div class="row">
                    <div class="col-sm-10">
                      <!-- textarea -->
                      
                    </div>
                </form>
              </div>
      </div>
    </section>

    <!-- <section class="content pb-3">
      
    </section> -->
  </div>

  <footer class="main-footer">
    <?php
        // include "../footter.php";
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
<script>
  $(function () {

  })
</script>
</body>
</html>
