

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
    $districtname = $_POST['districtname'];
    $districtdate = date('Y-m-d');
    $districttime = date('h:i:sa');
		// $id = mysqli_real_escape_string($con,$_POST['province']);
		$sql_insert =
		"INSERT INTO `district`(`districtname`,`districtdate`,`districttime`)
			VALUES ('$districtname','$districtdate','$districttime')";
		if(mysqli_query($con,$sql_insert))
		{
			echo '<script>alert("บันทึกเสร็จสิ้น")</script>';
            echo "<meta http-equiv='refresh'content='0;URL=admin-addseting-district-list.php'/>";
            
		}

	}

?>