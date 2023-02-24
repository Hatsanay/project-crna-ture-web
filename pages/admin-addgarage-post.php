


<?php
	include "../connect.php";



    $sqlmemid = "SELECT * FROM `members` ORDER BY memid DESC LIMIT 0,1";
	$all_sqlmemid = mysqli_query($con,$sqlmemid);

    $sqlownerid = "SELECT * FROM `owner` ORDER BY ownerid DESC LIMIT 0,1";
	$all_sqlownerid = mysqli_query($con,$sqlownerid);


  
  // use a while loop to fetch data
  // from the $all_categories variable
  // and individually display as an option
  while ($sqlmemid = mysqli_fetch_array(
      $all_sqlmemid,MYSQLI_ASSOC)):;
      $memgarid = $sqlmemid["memid"];
      $memgarid1 = $memgarid+1;
  endwhile;

  while ($sqlownerid = mysqli_fetch_array(
    $all_sqlownerid,MYSQLI_ASSOC)):;
    $garownerid = $sqlownerid["ownerid"];
    $garownerid1 = $garownerid+1;
endwhile;

    if(isset($_POST['submit']))
	{

   
    // $name = mysqli_real_escape_string($con,$_POST['Ref_prov_id']);

    $name1 = mysqli_real_escape_string($con,$_POST['Ref_dist_id']);
    $name2 = mysqli_real_escape_string($con,$_POST['Ref_subdist_id']);
    $name3 = mysqli_real_escape_string($con,$_POST['zip_code']);
    $graname = $_POST['graname'];
    $granamephone = $_POST['granamephone'];
    $grahousenum = $_POST['garhousenum'];
    $gargroup = $_POST['gargroup'];
    $garalley = $_POST['garalley'];
    $garroad = $_POST['garroad'];
    $latti = $_POST['latti'];
    $loggi = $_POST['loggi'];

    $date1 = date("Ymd_His");
    $randoms = (mt_rand());
    $image = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $path_info = pathinfo($image_name);
    $extension = $path_info['extension'];
    $combined_name = $image_name;
    $path = "../assets/upload/garpro/";
    $_P_img = $path.$date1.$randoms.$image_name;
    // move_uploaded_file($image, "../assets/upload/garpro/$image_name");
    move_uploaded_file($image, $_P_img);

    
    $name = '64';
    $garageimgid = 'null';
    $garageonoff = '1';
    $garagedeegree = '0';



		// $id = mysqli_real_escape_string($con,$_POST['province']);
		$sql_insert =
		"INSERT INTO `garage`(`garageprovince`,`garagearea`,`garagedistrict`,`garagepostcode`
    ,`garagename`,`garagetel`,`garagehousenum`,`garagegroup`,`garagealley`,`garageroad`,`ownerid`,`memid`
    ,`garageprofile`,`garagelattitude`,`garagelonggitude`,`garageonoff`,`garageimgid`,`garagedeegree`)
			VALUES ('$name','$name1','$name2','$name3','$graname','$granamephone','$grahousenum','$gargroup','$garalley'
      ,'$garroad','$garownerid1','$memgarid1','$_P_img','$latti','$loggi','$garageonoff','$garageimgid','$garagedeegree')";
		if(mysqli_query($con,$sql_insert))
		{
			// echo '<script>alert("Product added successfully")</script>';
		}

    $ownname = mysqli_real_escape_string($con,$_POST['province1']);
    $ownname1 = mysqli_real_escape_string($con,$_POST['area1']);
    $ownname2 = mysqli_real_escape_string($con,$_POST['district1']);
    $ownname3 = mysqli_real_escape_string($con,$_POST['postcode1']);
    $sex = mysqli_real_escape_string($con,$_POST['sex']);
    $ownfname = $_POST['ownfname'];
    $ownlname = $_POST['ownlname'];
    $ownphone = $_POST['ownphone'];
    $ownhousenum = $_POST['ownhousenum'];
    $owngroup = $_POST['owngroup'];
    $ownalley = $_POST['ownalley'];
    $ownroad = $_POST['ownroad'];
    $ownerbirthday = date('Y-m-d');


    
		// $id = mysqli_real_escape_string($con,$_POST['province']);
		$sql_insert =
		"INSERT INTO `owner`(`ownprovince`,`ownarea`,`owndistrict`,`ownpostcode`
    ,`ownerfname`,`ownerlname`,`ownhousenum`,`owngroup`,`ownalley`,`ownroad`,`ownersex`,`ownertel`,`ownerbirthday`)
			VALUES ('$ownname','$ownname1','$ownname2','$ownname3','$ownfname','$ownlname','$ownhousenum'
      ,'$owngroup','$ownalley','$ownroad','$sex','$ownphone','$ownerbirthday')";
		if(mysqli_query($con,$sql_insert))
		{
			// echo '<script>alert("Product added successfully")</script>';
		}

    $memgaremail = $_POST['memgaremail'];
    $memgarusername = $_POST['memgarusername'];
    $memgarpassword = $_POST['memgarpassword'];
    $memgarlevel = '2';
    $memdate = date('Y-m-d');
    $memfullname = 'null';
    $memproflie = 'null';
    $memtel = 'null';


		// $id = mysqli_real_escape_string($con,$_POST['province']);
		$sql_insert =
		"INSERT INTO `members`(`memusername`,`mempassword`,`membersemail`,`memlavel`,`memdate`,`memfullname`,`memproflie`,`memtel`)
			VALUES ('$memgarusername','$memgarpassword','$memgaremail','$memgarlevel','$memdate','$memfullname','$memproflie','$memtel')";
		if(mysqli_query($con,$sql_insert))
		{
			echo '<script>alert("บันทึกเสร็จสิ้น")</script>';
            echo "<meta http-equiv='refresh'content='0;URL=admin-addgarage.php'/>";
            
		}

	}

?>