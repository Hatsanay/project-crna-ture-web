<?php
include "../connect.php";
$rr= $_POST['rqroom'];
$rn= $_POST['rqname'];
$rp= $_POST['rqproblem'];
$rd= $_POST['rqdetails'];
$rt= $_POST['rqtel'];
$date = date('Y-m-d');
$rs = 'N';

$sql="insert into request (reqroom,name,reqproblem,reqdetails,reqtel,reqdate,reqstatus) values('$rr','$rn','$rp','$rd','$rt','$date','$rs')";
$result=mysqli_query($con,$sql);
mysqli_close($con);
// echo "<script>";
//     echo "alert(\"แจ้งไปยังเจ้าหน้าที่หอพักเสร็จสิ้น\");"; 
//     echo "</script>";
 echo "<meta http-equiv='refresh'content='0;URL=usefrom.php'/>";
?>