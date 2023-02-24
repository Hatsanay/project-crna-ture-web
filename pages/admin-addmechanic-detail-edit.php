<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Garage</title>

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
<?php
  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    // The user is logged in, so retrieve their name from the session
    $user_name = $_SESSION['user_fullname'];
  } else {
    // The user is not logged in, so redirect them to the login page
    header('Location: ../login.php');
    exit;
  }
?>

<?php
	include "../connect.php";

	
	$sql = "SELECT * FROM `province`";
	$all_province = mysqli_query($con,$sql);

  $sql1 = "SELECT * FROM `area`";
	$all_area = mysqli_query($con,$sql1);

  $sql2 = "SELECT * FROM `district`";
	$all_district = mysqli_query($con,$sql2);

	$sql3 = "SELECT * FROM `postcode`";
	$all_postcode = mysqli_query($con,$sql3);

  $sql4 = "SELECT * FROM `sex`";
	$all_sex = mysqli_query($con,$sql4);



  $sqlo = "SELECT * FROM `province`";
	$all_province1 = mysqli_query($con,$sqlo);

  $sqlo1 = "SELECT * FROM `area`";
	$all_area1 = mysqli_query($con,$sqlo1);

  $sqlo2 = "SELECT * FROM `district`";
	$all_district1 = mysqli_query($con,$sqlo2);

	$sqlo3 = "SELECT * FROM `postcode`";
	$all_postcode1 = mysqli_query($con,$sqlo3);

	$sqlgarid = "SELECT * FROM `garage` ORDER BY garageid DESC LIMIT 0,1";
	$all_sqlgarid = mysqli_query($con,$sqlgarid);

  
  $sqlownerid = "SELECT * FROM `owner` ORDER BY ownerid DESC LIMIT 0,1";
	$all_sqlownerid = mysqli_query($con,$sqlownerid);

  
  
?>


<script type="text/javascript">
function fncSubmit()
{
    if(document.getElementById('mecname').value == "")
    {
        alert('กรุณากรอกขื่อ-นามสกุล');
        return false;
    }

    else if(document.getElementById('memmecemail').value == "")
    {
        alert('กรุณากรอกอีเมล์');
        return false;
    }

    else if(document.getElementById('memmecphone').value == "")
    {
        alert('กรุณากรอกเบอร์โทร');
        return false;
    }

    else if(document.getElementById('memmecusername').value == "")
    {
        alert('กรุณากรอก Username');
        return false;
    }

    else if(document.getElementById('memmecpassword').value == "")
    {
        alert('กรุณากรอก Password');
        return false;
    }

    else if(document.getElementById('mechousenum').value == "" || 
    document.getElementById('mecgroup').value == "" ||
    document.getElementById('mecalley').value == "" || 
    document.getElementById('mecroad').value == "" )
    {
        alert('กรุณากรอกที่อยู่เจ้าของอู่ให้ครบถ้วน');
        return false;
    }

    
  
    
}
</script>

<?php

        include "../connect.php";
        $rs= $_GET['detial_id'];
        // echo "$rs";
        $sql="SELECT * FROM mechanic 
        INNER JOIN members ON members.memid = mechanic.memid
        WHERE mechanicid='$rs'";
        // $sql="update request set reqstatus = '$y' where reqid = '$rs'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        // mysqli_close($con);

        


            
        ?>
<body class="hold-transition sidebar-mini layout-fixed">

  <?php
        include "../navbar.php";
    ?>

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
                <h3 class="card-title">เพิ่มช่างอิสระ</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body-sm">
                <form action="admin-addmechanic-detail-edit-post.php"  method="POST" onSubmit="JavaScript:return fncSubmit();" >
                  <div class="row pd">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>ขื่อ-นามสกุล</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['mechanicfullname'];?> name="mecname" id="mecname">
                        <input type="hidden" class="form-control" placeholder="" name="memidpost" id="memidpost" value="<?=$row['memid'];?>">
                        <input type="hidden" class="form-control" placeholder="" name="mechanicidpost" id="mechanicidpost" value="<?=$row['mechanicid'];?>">
                      </div>
                    </div>

                    <div class="col-sm-1">
                       <div class="form-group">
                        <label>เพศ</label>
                    <select name="sex" class="form-control">
                      <?php
                        // use a while loop to fetch data
                        // from the $all_categories variable
                        // and individually display as an option
                        while ($sex = mysqli_fetch_array(
                            $all_sex,MYSQLI_ASSOC)):;
                      ?>
                        <option value="<?php echo $sex["sexid"];
                          // The value we usually set is the primary key
                        ?>">
                          <?php echo $sex["sexname"];
                            // To show the category name to the user
                          ?>
                        </option>
                      <?php
                        endwhile;
                        // While loop must be terminated
                      ?>
                    </select>
                  </div>
                      </div>
                    
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>อีเมล์</label>
                        <input type="email" class="form-control" placeholder="" value=<?=$row['membersemail'];?>  name="memmecemail" id="memmecemail">
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>เบอร์โทร</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['mechanictel'];?> name="memmecphone" id="memmecphone">
                      </div>
                    </div>
                  </div>


                  <div class="row pd">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>username</label>
                        <input type="hidden" class="form-control" placeholder="" value=<?=$row['memusername'];?> name="memmecusername" id="memmecusername">
                        <input type="text" class="form-control" placeholder="" value=<?=$row['memusername'];?> name="" id="" disabled>
                      </div>
                    </div>
                    
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>password</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['mempassword'];?> name="memmecpassword" id="memmecpassword">
                      </div>
                    </div>
            
                  </div>
                  
                  <div class="row pd">
                    <!-- <div class="col-sm-12">
                       <div class="form-group">
                        <label>ที่อยู่</label>
                        <textarea class="form-control" rows="3" placeholder="" name="apassword"></textarea>
                      </div> -->
                      <!-- textarea -->
                      <!-- <div class="form-group">
                        <label>ชื่อผู้ใช้(Username)</label>
                        <textarea class="form-control" rows="1" placeholder="somsuk" name="ausername"></textarea>
                      </div> -->
                    </div>

                    <div class="col-sm-6">
                      
                      <!-- <div class="form-group">
                        <label>รหัส(Password)</label>
                        <textarea class="form-control" rows="3" placeholder="12345678" name="apassword"></textarea>
                      </div> -->

                      <!-- <div class="form-group">
                        <button class="btn btn-primary btn-lg btn1" type="submit" value="">เพิ่ม</button>
                        <button class="btn btn-lg btn2" type="reset" value="">ลบ</button>
                      
                      </div> -->
                      <!-- <div class="form-group">
                        <button class="btn btn-lg btn2" type="reset" value="">ลบ</button>
                      </div> -->
                    </div>
                  </div>
                

                    
      



              <div class="card-header">
                <h3 class="card-title">ที่อยู่ช่าง</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body-sm">
                <!-- <form action="admin-setting-add.php" method="post"> -->

                  <div class="row-sm">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <!-- <div class="form-group">
                        <label>ที่อยู่</label>
                        <textarea class="form-control" rows="3" placeholder="" name=""></textarea>

                      </div> -->
                    </div>
                    <div class="col-sm-6">
                      <!-- <div class="form-group">
                        <label>นามสกุล</label>
                        <input type="text" class="form-control" placeholder="ใจดี" name="alname">
                      </div> -->
                    </div>
                  </div>
                  <div class="row pd">
                    <div class="col-sm-3">
                       <div class="form-group">
                        <label>บ้านเลขที่</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['mechanichousenum'];?>  name="mechousenum" id="mechousenum">
                      </div>
                    </div>

                     <div class="col-sm-1">
                       <div class="form-group">
                        <label>หมู่</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['mechanicgroup'];?> name="mecgroup" id="mecgroup">
                      </div>
                    </div>

                    <div class="col-sm-3">
                       <div class="form-group">
                        <label>ซอย ( ไม่มีใส่ - )</label> 
                        <input type="text" class="form-control" placeholder="" value=<?=$row['mechanicalley'];?> name="mecalley" id="mecalley">
                      </div>
                    </div>

                    <div class="col-sm-3">
                       <div class="form-group">
                        <label>ถนน ( ไม่มีใส่ - )</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['mechanicroad'];?> name="mecroad"  id="mecroad">
                      </div>
                    </div>

                  </div>
                
                  <div class="row pd">
                  <div class="col-sm-3">
                       <div class="form-group">
                        <label>ตำบล</label>
                    <select name="district" class="form-control">
                      <?php
                        // use a while loop to fetch data
                        // from the $all_categories variable
                        // and individually display as an option
                        while ($district = mysqli_fetch_array(
                            $all_district,MYSQLI_ASSOC)):;
                      ?>
                        <option value="<?php echo $district["districtname"];
                          // The value we usually set is the primary key
                        ?>">
                          <?php echo $district["districtname"];
                            // To show the category name to the user
                          ?>
                        </option>
                      <?php
                        endwhile;
                        // While loop must be terminated
                      ?>
                    </select>
                  </div>
                      </div>


                  <div class="col-sm-3">
                       <div class="form-group">
                        <label>อำเภอ</label>
                    <select name="area" class="form-control">
                      <?php
                        // use a while loop to fetch data
                        // from the $all_categories variable
                        // and individually display as an option
                        while ($area = mysqli_fetch_array(
                            $all_area,MYSQLI_ASSOC)):;
                      ?>
                        <option value="<?php echo $area["areaname"];
                          // The value we usually set is the primary key
                        ?>">
                          <?php echo $area["areaname"];
                            // To show the category name to the user
                          ?>
                        </option>
                      <?php
                        endwhile;
                        // While loop must be terminated
                      ?>
                    </select>
                  </div>
                      </div>


                      <div class="col-sm-3">
                       <div class="form-group">
                        <label>จังหวัด</label>
                    <select name="province" class="form-control">
                      <?php
                        // use a while loop to fetch data
                        // from the $all_categories variable
                        // and individually display as an option
                        while ($province = mysqli_fetch_array(
                            $all_province,MYSQLI_ASSOC)):;
                      ?>
                        <option value="<?php echo $province["provincename"];
                          // The value we usually set is the primary key
                        ?>">
                          <?php echo $province["provincename"];
                            // To show the category name to the user
                          ?>
                        </option>
                      <?php
                        endwhile;
                        // While loop must be terminated
                      ?>
                    </select>
                  </div>
                      </div>


                      <div class="col-sm-2">
                       <div class="form-group">
                        <label>รหัสไปรษณีย์</label>
                    <select name="postcode" class="form-control">
                      <?php
                        // use a while loop to fetch data
                        // from the $all_categories variable
                        // and individually display as an option
                        while ($postcode = mysqli_fetch_array(
                            $all_postcode,MYSQLI_ASSOC)):;
                      ?>
                        <option value="<?php echo $postcode["postcodename"];
                          // The value we usually set is the primary key
                        ?>">
                          <?php echo $postcode["postcodename"];
                            // To show the category name to the user
                          ?>
                        </option>
                      <?php
                        endwhile;
                        // While loop must be terminated
                      ?>
                    </select>
                  </div>
                      </div>
                  </div>

                  

                    <div class="row">
                    <div class="col-sm-10">
                    
                    <div class="form-group">
                        <!-- <button class="btn btn-primary btn-lg btn1" type="submit" value="">เพิ่ม</button>
                        <button class="btn btn-lg btn2" type="reset" value="">ลบ</button> -->
                      
                      </div>
                    
                      
                    </div>
                    </div>
                    
                  </div>
                  


                  <!-- <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">อัพโหลดโปรไฟล์ช่าง</h3>
              </div>

              <div class="card-body-sm">
                <form  method="POST">
                  <div class="row-sm">
                    <div class="col-sm-6">

                      <div class="form-group">
                      <label for="Image" class="form-label">โปรดเลือกอัพโหลดโปรไฟล์อู่</label>
                      <input class="form-control " type="file" id="formFile" onchange="preview()">
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

                  
                 
                    </div>
                  </div> -->


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
