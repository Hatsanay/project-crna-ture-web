<?php
$con=mysqli_connect("localhost","adminroot","1234")or dir("error1");
mysqli_select_db($con,"db_crna") or die ("error2");
// mysqli_select_db($con,"project_nsdr") or die ("error2");
// $con=mysqli_connect("localhost","userp24","dbp241234")or dir("error1");
// mysqli_select_db($con,"dbp24") or die ("error2");
mysqli_query($con,"SET NAMES utf8");

// $con=mysqli_connect("localhost","dikitcom_adminroot","h3PaC*4B3^2T")or dir("error1");
// mysqli_select_db($con,"dikitcom_db_crna") or die ("error2");
// // mysqli_select_db($con,"project_nsdr") or die ("error2");
// // $con=mysqli_connect("localhost","userp24","dbp241234")or dir("error1");
// // mysqli_select_db($con,"dbp24") or die ("error2");
// mysqli_query($con,"SET NAMES utf8");
?> 