<?php
$con=mysqli_connect("localhost","root","")or dir("error1");
mysqli_select_db($con,"project_nsdr") or die ("error2");
// $con=mysqli_connect("localhost","userp24","dbp241234")or dir("error1");
// mysqli_select_db($con,"dbp24") or die ("error2");
mysqli_query($con,"SET NAMES utf8");
?> 