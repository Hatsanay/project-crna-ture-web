

<!-- <script type="text/javascript">
function fncSubmit()
{
     if(document.getElementById('typememid').value ==  $all_sqltypememid)
    {
        alert('ID นี้มีอยู่แล้ว');
        return false;
    }

}
</script> -->


<?php
		include "../connect.php";

    
    
    
    if(isset($_POST['submit']))
	{ 
    $areaname = $_POST['areaname'];
    $areadate = date('Y-m-d');
    $areatime = date('h:i:sa');
		// $id = mysqli_real_escape_string($con,$_POST['province']);
		$sql_insert =
		"INSERT INTO `area`(`areaname`,`areadate`,`areatime`)
			VALUES ('$areaname','$areadate','$areatime')";
		if(mysqli_query($con,$sql_insert))
		{
			echo '<script>alert("บันทึกเสร็จสิ้น")</script>';
            echo "<meta http-equiv='refresh'content='0;URL=admin-addseting-area-list.php'/>";
            
		}

	}

?>