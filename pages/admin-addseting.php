


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <<!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
  .pd{
  padding-left: 5px;
}
.btnpd{
  padding-top: 10px;
}
.btnw{
  width: 500px;
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
.profile-user-img {
    border: 3px solid #adb5bd;
    margin: 0 auto;
    padding: 3px;
    width: 150px;
}

</style>

<?php
  session_start();
  // Check if the user is logged in
  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    // The user is logged in, so retrieve their name from the session
    $user_name = $_SESSION['user_fullname'];
    $admin_adminprofile = $_SESSION['admin_adminprofile'];
    $admin_adminfname = $_SESSION['adminfname'];
    $admin_adminlname = $_SESSION['adminlname'];
    $admin_membersemail = $_SESSION['membersemail'];
    $user_mempassword = $_SESSION['mempassword'];
    $user_id = $_SESSION['user_id'];
  } else {
    // The user is not logged in, so redirect them to the login page
    header('Location: ../login.php');
    exit;
  }
?>

<script type="text/javascript">
function fncSubmit()
{
  if (document.getElementById('editnewaddpassword').value != '')
  { 
      if(document.getElementById('editoldaddpassword').value == ''){
        alert('โปรดกรอกรหัสผ่านเก่า');
        
        return false;
      }
      else if(document.getElementById('editoldaddpassword').value != document.getElementById('editconaddpassword').value)
      {
          alert('รหัสผ่านเก่าไม่ถูกต้อง');
          
          return false;
      }


    // if(document.getElementById('editoldpassword').value == '')
    // {
    //     alert('โปรดกรอกรหัสผ่านเก่า');
        
    //     return false;
    // }
    // else if(document.getElementById('editoldpassword').value != document.getElementById('editconaddpassword').value)
    //   {
    //       alert('รหัสผ่านไม่ตรงกัน');
          
    //       return false;
    //   }
  }


    // $('.toastrDefaultSuccess').click(function() {
    //   toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    // });

    
  
    
}
</script>

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
      include "admin-addseting-side.php";
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

      <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">ตั้งค่าโปรไฟล์</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body-sm">
              <form action="admin-addseting-editprofile-post.php"  method="POST" onSubmit="JavaScript:return fncSubmit();" enctype="multipart/form-data">
                <div class="row pd">
                    <div class="col-sm-12">
                      <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src=<?php echo$admin_adminprofile; ?>
                       alt="User profile picture">
                </div>
                    </div>
                    </div>
                <div class="row pd">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>ชื่อ</label>
                        <input type="text" class="form-control" placeholder="" name="editaddname" id="editaddname" value="<?php echo$admin_adminfname; ?>">
                        <input type="hidden" class="form-control" placeholder="" name="editmemid" id="editmemid" value="<?php echo$user_id; ?>">
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>นามสกุล</label>
                        <input type="text" class="form-control" placeholder="" name="editaddlname" id="editaddlname" value="<?php echo$admin_adminlname; ?>">
                      </div>
                    </div>
                    
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>อีเมล์</label>
                        <input type="email" class="form-control" placeholder="" name="editaddemail" id="editaddemail" value="<?php echo$admin_membersemail; ?>">
                      </div>
                    </div>
                  </div>


                  <div class="row pd">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>username</label>
                        <input type="text" class="form-control" placeholder="" name="" id="" value="<?php echo$user_memusername; ?>" disabled>
                      </div>
                    </div>
                    
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>รหัสผ่านใหม่</label>
                        <input type="text" class="form-control" placeholder="" name="editnewaddpassword" id="editnewaddpassword">
                        <!-- <input type="hidden" class="form-control" placeholder="" name="editconaddpassword" id="editconaddpassword" value="<?php echo$user_mempassword; ?>"> -->
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>รหัสผ่านเก่า</label>
                        <input type="text" class="form-control" placeholder="" name="editoldaddpassword" id="editoldaddpassword">
                        <input type="hidden" class="form-control" placeholder="" name="editconaddpassword" id="editconaddpassword" value="<?php echo$user_mempassword; ?>">
                        <input type="hidden" class="form-control" placeholder="" name="editimg" id="editimg" value="<?php echo$admin_adminprofile; ?>">
                      </div>
                    </div>

                    
            
                  </div>


                  <div class="row-sm">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                      <label for="Image" class="form-label">โปรดเลือกอัพโหลดโปรไฟล์อู่</label>
                      <input class="form-control " type="file" id="formFile" name="image" value="" onchange="preview()">
                      <button onclick="clearImage()" class="btn btn-primary mt-3 btn2">ล้าง</button>
                      <img id="frame" src="" class="img-fluid" />
                      <script>
                    function preview() {
                        frame.src = URL.createObjectURL(event.target.files[0]);
                    }
                    function clearImage() {
                        document.getElementById('formFile').value = null;
                        frame.src = "";
                    }
        </script>
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
