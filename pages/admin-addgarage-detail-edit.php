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

    $sql_provinces = "SELECT * FROM provinces WHERE name_th LIKE 'กระบี่'";
  $query = mysqli_query($con, $sql_provinces);

  $sql_provinces = "SELECT * FROM amphures WHERE province_id = 64 ";
  $query1 = mysqli_query($con, $sql_provinces);

  $sql_provinces = "SELECT * FROM districts WHERE amphure_id = 867 ";
  $query2 = mysqli_query($con, $sql_provinces);



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

  
  // use a while loop to fetch data
  // from the $all_categories variable
  // and individually display as an option
  // while ($sqlgarid = mysqli_fetch_array(
  //     $all_sqlgarid,MYSQLI_ASSOC)):;
  //     $memgarid = $sqlgarid["garageid"];
  //     $memgarid1 = $memgarid+1;
  // endwhile;
  // While loop must be terminated

  
// 	if(isset($_POST['submit']))
// 	{
//     $name = mysqli_real_escape_string($con,$_POST['province']);
//     $name1 = mysqli_real_escape_string($con,$_POST['area']);
//     $name2 = mysqli_real_escape_string($con,$_POST['district']);
//     $name3 = mysqli_real_escape_string($con,$_POST['postcode']);
//     $graname = $_POST['graname'];
//     $grahousenum = $_POST['garhousenum'];
//     $gargroup = $_POST['gargroup'];
//     $garalley = $_POST['garalley'];
//     $garroad = $_POST['garroad'];
// 		// $id = mysqli_real_escape_string($con,$_POST['province']);
// 		$sql_insert =
// 		"INSERT INTO `garage`(`garageprovince`,`garagearea`,`garagedistrict`,`garagepostcode`
//     ,`garagename`,`garagehousenum`,`garagegroup`,`garagealley`,`garageroad`)
// 			VALUES ('$name','$name1','$name2','$name3','$graname','$grahousenum','$gargroup','$garalley'
//       ,'$garroad')";
// 		if(mysqli_query($con,$sql_insert))
// 		{
// 			// echo '<script>alert("Product added successfully")</script>';
// 		}

//     $ownname = mysqli_real_escape_string($con,$_POST['province1']);
//     $ownname1 = mysqli_real_escape_string($con,$_POST['area1']);
//     $ownname2 = mysqli_real_escape_string($con,$_POST['district1']);
//     $ownname3 = mysqli_real_escape_string($con,$_POST['postcode1']);
//     $sex = mysqli_real_escape_string($con,$_POST['sex']);
//     $ownfname = $_POST['ownfname'];
//     $ownlname = $_POST['ownlname'];
//     $ownhousenum = $_POST['ownhousenum'];
//     $owngroup = $_POST['owngroup'];
//     $ownalley = $_POST['ownalley'];
//     $ownroad = $_POST['ownroad'];
// 		// $id = mysqli_real_escape_string($con,$_POST['province']);
// 		$sql_insert =
// 		"INSERT INTO `owner`(`ownprovince`,`ownarea`,`owndistrict`,`ownpostcode`
//     ,`ownerfname`,`ownerlname`,`ownhousenum`,`owngroup`,`ownalley`,`ownroad`,`ownersex`)
// 			VALUES ('$ownname','$ownname1','$ownname2','$ownname3','$ownfname','$ownlname','$ownhousenum'
//       ,'$owngroup','$ownalley','$ownroad','$sex')";
// 		if(mysqli_query($con,$sql_insert))
// 		{
// 			// echo '<script>alert("Product added successfully")</script>';
// 		}

//     $memgaremail = $_POST['memgaremail'];
//     $memgarusername = $_POST['memgarusername'];
//     $memgarpassword = $_POST['memgarpassword'];
//     $memgarlevel = '2';
//     $memdate = date('Y-m-d');
// 		// $id = mysqli_real_escape_string($con,$_POST['province']);
// 		$sql_insert =
// 		"INSERT INTO `members`(`memusername`,`mempassword`,`membersemail`,`memlavel`,`memdate`,`garageid`)
// 			VALUES ('$memgarusername','$memgarpassword','$memgaremail','$memgarlevel','$memdate','$memgarid1')";
// 		if(mysqli_query($con,$sql_insert))
// 		{
// 			echo '<script>alert("Product added successfully")</script>';
// 		}

// 	}
?>


<script type="text/javascript">
function fncSubmit()
{
    if(document.getElementById('graname').value == "")
    {
        alert('กรุณากรอกชื่ออู่');
        
        return false;
    }

    if(document.getElementById('granamephone').value == "")
    {
        alert('กรุณากรอกเบอร์โทรอู่');
        return false;
    }

    else if(document.getElementById('memgaremail').value == "")
    {
        alert('กรุณากรอกอีเมล์');
        return false;
    }

    else if(document.getElementById('memgarusername').value == "")
    {
        alert('กรุณากรอก Username');
        return false;
    }

    else if(document.getElementById('memgarpassword').value == "")
    {
        alert('กรุณากรอก Password');
        return false;
    }

    else if(document.getElementById('garhousenum').value == "")
    {
        alert('กรุณากรอกบ้านเลขที่');
        return false;
    }

    else if(document.getElementById('gargroup').value == "")
    {
        alert('กรุณากรอกหมู่');
        return false;
    }

    else if(document.getElementById('garalley').value == "")
    {
        alert('กรุณากรอกซอย');
        return false;
    }

    else if(document.getElementById('garroad').value == "")
    {
        alert('กรุณากรอกถนน');
        return false;
    }

    else if(document.getElementById('ownfname').value == "")
    {
        alert('กรุณากรอกชื่อเจ้าของอู่');
        return false;
    }

    else if(document.getElementById('ownlname').value == "")
    {
        alert('กรุณากรอกนามสกุลเจ้าของอู่');
        return false;
    }
    
    else if(document.getElementById('ownphone').value == "")
    {
        alert('กรุณากรอกเบอร์โทรเจ้าของอู่');
        return false;
    }

    else if(document.getElementById('ownhousenum').value == "" || 
    document.getElementById('owngroup').value == "" ||
    document.getElementById('ownalley').value == "" || 
    document.getElementById('ownroad').value == "" )
    {
        alert('กรุณากรอกที่อยู่เจ้าของอู่ให้ครบถ้วน');
        return false;
    }

    // $('.toastrDefaultSuccess').click(function() {
    //   toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    // });

    
  
    
}
</script>

<?php

        include "../connect.php";
        $rs= $_GET['detial_id'];
        // echo "$rs";
        $sql="SELECT * FROM garage 
        INNER JOIN members ON members.memid = garage.memid 
        INNER JOIN owner ON garage.ownerid = owner.ownerid
        WHERE garageid='$rs'";
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
      include "admin-addgarage-list-side.php";
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
                <h3 class="card-title">เพิ่มอู่</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body-sm">
                <form action="admin-addgarage-detail-edit-post.php"  method="POST" onSubmit="JavaScript:return fncSubmit();"  >
                  <div class="row pd">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>ขื่ออู่</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['garagename'];?> name="graname" id="graname">
                        <input type="hidden" class="form-control" placeholder="" name="memidpost" id="memidpost" value="<?=$row['memid'];?>">
                        <input type="hidden" class="form-control" placeholder="" name="garageidpost" id="garageidpost" value="<?=$row['garageid'];?>">
                        <input type="hidden" class="form-control" placeholder="" name="owneridpost" id="owneridpost" value="<?=$row['ownerid'];?>">
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>เบอร์โทรอู่</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['garagetel'];?> name="granamephone" id="granamephone">
                      </div>
                    </div>
                    
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>อีเมล์</label>
                        <input type="email" class="form-control" placeholder="" value=<?=$row['membersemail'];?> name="memgaremail" id="memgaremail">
                        
                      </div>
                    </div>
                  </div>


                  <div class="row pd">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>username</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['memusername'];?> name="" id="" disabled>
                        <input type="hidden" class="form-control" placeholder="" value=<?=$row['memusername'];?> name="memgarusername" id="memgarusername">
                      </div>
                    </div>
                    
                    <!-- <div class="col-sm-4">
                      <div class="form-group">
                        <label>password</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['mempassword'];?>  name="memgarpassword" id="memgarpassword">
                      </div>
                    </div> -->
            
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
                <h3 class="card-title">ที่อยู่อู่</h3>
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
                        <input type="text" class="form-control" placeholder="" value=<?=$row['garagehousenum'];?>  name="garhousenum" id="garhousenum">
                      </div>
                    </div>

                     <div class="col-sm-1">
                       <div class="form-group">
                        <label>หมู่</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['garagegroup'];?>  name="gargroup" id="gargroup">
                      </div>
                    </div>

                    <div class="col-sm-3">
                       <div class="form-group">
                        <label>ซอย ( ไม่มีใส่ - )</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['garagealley'];?>  name="garalley" id="garalley">
                      </div>
                    </div>

                    <div class="col-sm-3">
                       <div class="form-group">
                        <label>ถนน ( ไม่มีใส่ - )</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['garageroad'];?>  name="garroad"  id="garroad">
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
                        <select class="form-control" name="name_th" id="provinces">
                              <option value="" selected disabled>-กรุณาเลือกจังหวัด-</option>
                              <?php foreach ($query as $value) { ?>
                                <option value="<?=$value['id']?>" <?php if($value['id'] == $row['garageprovince']) echo 'selected'; ?> >
                              <?=$value['name_th']?>
                          </option>
                              <?php } ?>
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

                  <div class="row pd">
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>ละติจูด</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['garagelattitude'];?> name="latti">
                      </div>                                        
                    </div>

                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>ลองจิจูด</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['garagelonggitude'];?> name="loggi">
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
                  

                  <div class="card-header">
                <h3 class="card-title">ข้อมูลเจ้าของอู่</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body-sm">
                <form  method="POST">
                  <div class="row pd">
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>ชื่อ</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['ownerfname'];?> name="ownfname" id="ownfname">
                      </div>
                    </div>

                    
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>นามสกุล</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['ownerlname'];?> name="ownlname" id="ownlname">
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
                        <label>เบอร์โทร</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['ownertel'];?> name="ownphone" id="ownphone">
                      </div>
                    </div>
                  </div>
                  <div class="row pd">
                    <div class="col-sm-3">
                       <div class="form-group">
                        <label>บ้านเลขที่</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['ownhousenum'];?> name="ownhousenum" id="ownhousenum">
                      </div>
                    </div>

                     <div class="col-sm-1">
                       <div class="form-group">
                        <label>หมู่</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['owngroup'];?> name="owngroup" id="owngroup">
                      </div>
                    </div>

                    <div class="col-sm-3">
                       <div class="form-group">
                        <label>ซอย ( ไม่มีใส่ - )</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['ownalley'];?> name="ownalley" id="ownalley">
                      </div>
                    </div>

                    <div class="col-sm-3">
                       <div class="form-group">
                        <label>ถนน ( ไม่มีใส่ - )</label>
                        <input type="text" class="form-control" placeholder="" value=<?=$row['ownroad'];?> name="ownroad" id="ownroad">
                      </div>
                    </div>

                  </div>
                
                  <div class="row pd">
                  <div class="col-sm-3">
                       <div class="form-group">
                        <label>ตำบล</label>
                    <select name="district1" class="form-control">
                      <?php
                        // use a while loop to fetch data
                        // from the $all_categories variable
                        // and individually display as an option
                        while ($district1 = mysqli_fetch_array(
                            $all_district1,MYSQLI_ASSOC)):;
                      ?>
                        <option value="<?php echo $district1["districtname"];
                          // The value we usually set is the primary key
                        ?>">
                          <?php echo $district1["districtname"];
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
                    <select name="area1" class="form-control">
                      <?php
                        // use a while loop to fetch data
                        // from the $all_categories variable
                        // and individually display as an option
                        while ($area1 = mysqli_fetch_array(
                            $all_area1,MYSQLI_ASSOC)):;
                      ?>
                        <option value="<?php echo $area1["areaname"];
                          // The value we usually set is the primary key
                        ?>">
                          <?php echo $area1["areaname"];
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
                    <select name="province1" class="form-control">
                      <?php
                        // use a while loop to fetch data
                        // from the $all_categories variable
                        // and individually display as an option
                        while ($province1 = mysqli_fetch_array(
                            $all_province1,MYSQLI_ASSOC)):;
                      ?>
                        <option value="<?php echo $province1["provincename"];
                          // The value we usually set is the primary key
                        ?>">
                          <?php echo $province1["provincename"];
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
                    <select name="postcode1" class="form-control">
                      <?php
                        // use a while loop to fetch data
                        // from the $all_categories variable
                        // and individually display as an option
                        while ($postcode1 = mysqli_fetch_array(
                            $all_postcode1,MYSQLI_ASSOC)):;
                      ?>
                        <option value="<?php echo $postcode1["postcodename"];
                          // The value we usually set is the primary key
                        ?>">
                          <?php echo $postcode1["postcodename"];
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


                  <!-- <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">อัพโหลดโปรไฟล์อู่</h3>
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
