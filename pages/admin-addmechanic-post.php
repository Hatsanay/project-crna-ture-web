<?php
	include "../connect.php";


    $sqlmemid = "SELECT * FROM `members` ORDER BY memid DESC LIMIT 0,1";
	$all_sqlmemid = mysqli_query($con,$sqlmemid);

    while ($sqlmemid = mysqli_fetch_array(
        $all_sqlmemid,MYSQLI_ASSOC)):;
        $memmecid = $sqlmemid["memid"];
        $memmecid1 = $memmecid+1;
    endwhile;

    if(isset($_POST['submit']))
	{

    $memmecusername = $_POST['memmecusername'];
    $memmecpassword = $_POST['memmecpassword'];
    $memmecemail = $_POST['memmecemail'];
    $memmeclevel = '3';
    $memdate = date('Y-m-d');
    $memfullname = 'null';
    $memproflie = 'null';
    $memtel = 'null';

    $sql_insert =
    "INSERT INTO `members`(`memusername`,`mempassword`,`membersemail`,`memlavel`,`memdate`,`memfullname`,`memproflie`,`memtel`)
        VALUES ('$memmecusername','$memmecpassword','$memmecemail','$memmeclevel','$memdate','$memfullname','$memproflie','$memtel')";

    if(mysqli_query($con,$sql_insert))
    {
        // echo '<script>alert("บันทึกเสร็จสิ้น")</script>';
        // echo "<meta http-equiv='refresh'content='0;URL=admin-addgarage.php'/>";
        
    }



    

    $mecname = $_POST['mecname'];
    $memmecphone = $_POST['memmecphone'];
    $mechousenum = $_POST['mechousenum'];
    $mecgroup = $_POST['mecgroup'];
    $mecalley = $_POST['mecalley'];
    $mecroad = $_POST['mecroad'];
    $province = mysqli_real_escape_string($con,$_POST['Ref_prov_id']);
    $area = mysqli_real_escape_string($con,$_POST['Ref_dist_id']);
    $district = mysqli_real_escape_string($con,$_POST['Ref_subdist_id']);
    $postcode = mysqli_real_escape_string($con,$_POST['zip_code']);
    $sex = mysqli_real_escape_string($con,$_POST['sex']);

    $date1 = date("Ymd_His");
    $randoms = (mt_rand());
    $image = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $path_info = pathinfo($image_name);
    $extension = $path_info['extension'];
    $combined_name = $image_name;
    $path = "../assets/upload/machanic/";
    $_P_img = $path.$date1.$randoms.$image_name;
    // move_uploaded_file($image, "../assets/upload/garpro/$image_name");
    move_uploaded_file($image, $_P_img);

    $mechaniconoff = '1';
    $mechanicbirthday = date('Y-m-d');


    $sql_insert =
    "INSERT INTO `mechanic`(`mechanicfullname`,`mechanicsex`,`mechanictel`,`mechanichousenum`,`mechanicgroup`
    ,`mechanicroad`,`mechanicalley`,`mechanicdistrict`,`mechanicarea`,`mechanicprovince`,`mechanicpostcode`
    ,`memid`,`mechanicprofile`,`mechaniconoff`,`mechanicbirthday`)
        VALUES ('$mecname','$sex','$memmecphone','$mechousenum','$mecgroup','$mecroad'
        ,'$mecalley','$district','$area','$province','$postcode','$memmecid1','$_P_img','$mechaniconoff','$mechanicbirthday')";

    if(mysqli_query($con,$sql_insert))
    {
        echo '<script>alert("บันทึกเสร็จสิ้น")</script>';
        echo "<meta http-equiv='refresh'content='0;URL=admin-addmechanic.php'/>";
        
    }


    
		// $id = mysqli_real_escape_string($con,$_POST['province']);
		

	}
?>