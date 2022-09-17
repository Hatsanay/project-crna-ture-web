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
    margin: 130px;
    margin-left: 250px;
    width: 110px;
    background-color: #003cff;
    border-color: #003cff;
  }
  .btn-primary:hover {
    color: #fff;
    background-color: #077e5b;
    border-color: #077e5b;
}
.btn2{
  margin-top: -370px;
    margin-left: 380px;
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
</style>

<body class="hold-transition sidebar-mini layout-fixed">

  <?php
        include "../navbar.php";
    ?>

  <!-- Sidebar -->
    <?php
      include "admin-list-side.php";
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

      <?php

        include "../connect.php";
        $rs= $_GET['detial_id'];
        // echo "$rs";
        $sql="SELECT * FROM request WHERE reqid='$rs'";
        // $sql="update request set reqstatus = '$y' where reqid = '$rs'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        // mysqli_close($con);



            // require_once('connecttion.php');
            // if(isset($_REQUEST['detial_id'])){
            //     try{
            //         $id = $_REQUEST['detial_id'];
            //         $select_stmt = $id->prepare("SELECT * FROM request WHERE reqid = :id");
            //         $select_stmt->bindParam(':id',$id);
            //         $select_stmt->execute();
            //         $row =$select_stmt->fetch(PDO::FETCH_ASSOC);
            //         extract($row);
            //         // $row[''];
            //     }catch(PDOException $e){
            //         $e->getMessage();

            //     }

            // }
        ?>

      <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">รายละเอียดคำร้องแจ้งซ่อมหอพัก</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="usereq.php" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>หมายเลขห้อง</label>
                        <input type="text" class="form-control" value=<?=$row['reqroom'];?> disabled >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>ชื่อ-นามสกุล</label>
                        <input type="text" class="form-control" value=<?=$row['name'];?> disabled>

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>ปัญหา</label>
                        <input type="text" class="form-control" value=<?=$row['reqproblem'];?> disabled>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>รายละเอียดเพิ่มเติม</label>
                        <input type="text" class="form-control" value=<?=$row['reqdetails'];?> disabled>
                        <!-- <textarea class="form-control" rows="3"  name="rqdetails" value=<?=$row['reqdetails']?>></textarea> -->
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>เบอร์โทร์</label>
                        <input type="text" class="form-control" value=<?=$row['reqtel'];?> disabled>
                        <!-- <textarea class="form-control" rows="1"  name="rqtel" value=<?=$row['reqtel']?> ></textarea> -->
                      </div>
                    </div>

                    


                    <div class="row">
                    <div class="col-sm-10">
                      <!-- textarea -->
                      <div class="form-group">
                      <a href="admin-list.php" class="btn btn-primary btn-block btn-lg btn1">ย้อนกลับ</a>
                        <!-- <button class="btn btn-primary btn-lg btn1" type="submit" value="">แจ้ง</button> -->
                      </div>
                      
                    </div>
                    </div>
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
<script>
  $(function () {

  })
</script>
</body>
</html>
