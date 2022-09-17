<?php
include "../connect.php";
$rs= $_GET['update_id'];
$y='Y';
// echo "$rs";
$sql="update request set reqstatus = '$y' where reqid = '$rs'";
$result=mysqli_query($con,$sql);
mysqli_close($con);
echo "<meta http-equiv='refresh'content='0;URL=admin-notify.php'/>";
?>