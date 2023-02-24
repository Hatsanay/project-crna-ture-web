<?php
session_start();
// include "connect.php";

$con=mysqli_connect("localhost","adminroot","1234")or dir("error1");
mysqli_select_db($con,"db_crna") or die ("error2");
// mysqli_select_db($con,"project_nsdr") or die ("error2");
// $con=mysqli_connect("localhost","userp24","dbp241234")or dir("error1");
// mysqli_select_db($con,"dbp24") or die ("error2");
mysqli_query($con,"SET NAMES utf8");


$u=$_POST['user'];
$p=$_POST['pwd'];
$sql="select * from members where memusername='$u' and mempassword='$p'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
mysqli_close($con);
if($num==1){
//บันทึกแล้วกลับไปหน้าอื่น
    $row=mysqli_fetch_assoc($result);
    // $_SESSION['name']=$row['usefname']." ".$row['uselname'];
    $_SESSION['user_id']=$row['memid '];
    $_SESSION['user_level']=$row['memlavel'];

if($_SESSION['user_level']==5){
     Header("Location: pages\admin-dashboard.php");
}else{
    
    echo "<meta http-equiv='refresh'content='0;URL=index.php'/>";   
}
// elseif(($_SESSION['user_level']==2)){
//      Header("Location: pages\officer-notification.php"); 
//     // echo "<meta http-equiv='refresh'content='0;URL=index.php'/>";   
// }
    // Header("Location: pages\admin-notify.php");

}

else
echo "<script>";
    echo "alert(\" ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง\");"; 
    echo "</script>";
    echo "<meta http-equiv='refresh'content='0;URL=login.php'/>";

?>

