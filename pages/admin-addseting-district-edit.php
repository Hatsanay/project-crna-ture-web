<?php
		include "../connect.php";

    
    
    
    if(isset($_POST['submit']))
	{
    $olddistrictid = $_POST['olddistrictid'];
    $districtname = $_POST['districtname'];
	$districtdate = date('Y-m-d');
    $districttime = date('h:i:sa');
		// $id = mysqli_real_escape_string($con,$_POST['province']);
		$sql_insert =
		"UPDATE `district` SET `districtname` = '$districtname',`districtdate` = '$districtdate',
		`districttime` = '$districttime'
         WHERE `district`.`districtid` = $olddistrictid";
		if(mysqli_query($con,$sql_insert))
		{
			echo '<script>alert("บันทึกเสร็จสิ้น")</script>';
            echo "<meta http-equiv='refresh'content='0;URL=admin-addseting-district-list-edit.php'/>";    
		}

	}

?>