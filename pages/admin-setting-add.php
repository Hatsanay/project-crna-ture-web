<?php
include "../connect.php";
$rfn= $_POST['afname'];
$rln= $_POST['alname'];
$ru= $_POST['ausername'];
$rp= $_POST['apassword'];
$rl = 1;

$sql="insert into users (usefname,uselname,username,password,level)values('$rfn','$rln','$ru','$rp','$rl')";
$result=mysqli_query($con,$sql);
mysqli_close($con);
// echo "<script>";
//     echo "alert(\"แจ้งไปยังเจ้าหน้าที่หอพักเสร็จสิ้น\");"; 
//     echo "</script>";
 echo "<meta http-equiv='refresh'content='0;URL=admin-setting.php'/>";
?>