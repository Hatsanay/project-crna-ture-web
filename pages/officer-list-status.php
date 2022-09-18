<?php
include "../connect.php";
$rs= $_GET['updatestatus_id'];
$y='Y';
$c='C';
$date = date('Y-m-d');
// echo "$rs";
$sql="update request set reqconfirm = '$y',reqstatus = '$c',reqrepairdate = '$date' where reqid = '$rs'";
$result=mysqli_query($con,$sql);
mysqli_close($con);
echo "<meta http-equiv='refresh'content='0;URL=officer-list.php'/>";
?>