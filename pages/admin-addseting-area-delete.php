<?php
include "../connect.php";
$rs= $_GET['delete_id'];

// echo "$rs";
$sql="delete from area where areaid ='$rs'";
// $sql="update request set reqstatus = '$y' where reqid = '$rs'";
$result=mysqli_query($con,$sql);
mysqli_close($con);
echo "<meta http-equiv='refresh'content='0;URL=admin-addseting-area-list.php'/>";
?>