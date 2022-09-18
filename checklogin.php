<?php
session_start();
include "connect.php";
$u=$_POST['user'];
$p=$_POST['pwd'];
$sql="select * from users where username='$u' and password='$p'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
mysqli_close($con);
if($num==1){
//บันทึกแล้วกลับไปหน้าอื่น
    $row=mysqli_fetch_assoc($result);
    $_SESSION['name']=$row['usefname']." ".$row['uselname'];
    $_SESSION['user_id']=$row['id'];
    $_SESSION['user_level']=$row['level'];

if($_SESSION['user_level']==1){
     Header("Location: pages\admin-notify.php");
}elseif(($_SESSION['user_level']==2)){
     Header("Location: pages\officer-notification.php"); 
    // echo "<meta http-equiv='refresh'content='0;URL=index.php'/>";   
}
    // Header("Location: pages\admin-notify.php");

}

else
echo "<script>";
    echo "alert(\" ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง\");"; 
    echo "</script>";
    echo "<meta http-equiv='refresh'content='0;URL=login.php'/>";

?>