<?php
		include "../connect.php";

    
    
    
    if(isset($_POST['submit']))
	{
    $oldareaid = $_POST['oldareaid'];
    $areaname = $_POST['areaname'];
	$areadate = date('Y-m-d');
    $areatime = date('h:i:sa');
		// $id = mysqli_real_escape_string($con,$_POST['province']);
		$sql_insert =
		"UPDATE `area` SET `areaname` = '$areaname',`areadate` = '$areadate',
		`areatime` = '$areatime'
         WHERE `area`.`areaid` = $oldareaid";
		if(mysqli_query($con,$sql_insert))
		{
			echo '<script>alert("บันทึกเสร็จสิ้น")</script>';
            echo "<meta http-equiv='refresh'content='0;URL=admin-addseting-area-list-edit.php'/>";    
		}

	}

?>