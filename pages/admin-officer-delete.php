<?php
include "../connect.php";
$rs= $_GET['delete_id'];
// echo "$rs";
$sql="delete from users where useid='$rs'";
// $sql="update request set reqstatus = '$y' where reqid = '$rs'";
$result=mysqli_query($con,$sql);
mysqli_close($con);
echo "<meta http-equiv='refresh'content='0;URL=admin-officer.php'/>";
?>