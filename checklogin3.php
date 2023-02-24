
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
// login.php

// Start a session
session_start();

// Get the username and password from the form
$username = $_POST['user'];
$password = $_POST['pwd'];

// Connect to the database
// $conn = mysqli_connect('localhost', 'adminroot', '1234', 'db_crna');
include "connect.php";

// Check the connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// Escape the username and password to prevent SQL injection attacks
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

// Check if the username and password are correct
$query = "SELECT members.*,admin.*,CONCAT(admin.adminfname, ' ',admin.adminlname) AS fullname ,CONCAT( '../assets/upload/admin/',admin.adminprofile) AS adminimg FROM members
INNER JOIN admin ON admin.memid = members.memid
WHERE memusername = '$username' AND mempassword = '$password'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) == 1) {
  // The login is successful, so set the logged_in session variable to true and redirect the user to the protected page
  $_SESSION['logged_in'] = true;
  // Retrieve the user's ID and level from the database and store them in the session
  $row = mysqli_fetch_assoc($result);

  $user_id = $row['memid'];
  $_SESSION['user_id'] = $user_id;

  $user_level = $row['memlavel'];
  $_SESSION['user_level'] = $user_level;

  $user_mempassword	 = $row['mempassword'];
  $_SESSION['mempassword'] = $user_mempassword;

  $user_memusername = $row['memusername'];
  $_SESSION['user_memusername'] = $user_memusername;

  $user_fullname = $row['fullname'];
  $_SESSION['user_fullname'] = $user_fullname;

  $admin_adminprofile = $row['adminimg'];
  $_SESSION['admin_adminprofile'] = $admin_adminprofile;

  $admin_adminfname = $row['adminfname'];
  $_SESSION['adminfname'] = $admin_adminfname;

  $admin_adminlname = $row['adminlname'];
  $_SESSION['adminlname'] = $admin_adminlname;

  $admin_membersemail = $row['membersemail'];
  $_SESSION['membersemail'] = $admin_membersemail;



 






  // Check the user's level
  if ($user_level == '5') {
    // The user is an admin, so redirect them to the admin page
    // header('Location: pages\admin-dashboard.php');
    echo "<meta http-equiv='refresh'content='0;URL=pages\admin-dashboard.php'/>";   
    exit;
  } else{
    header('Location: login.php');
  }
} else {
  // The login is unsuccessful, so set the error session variable and redirect the user back to the login page
  $_SESSION['error'] = 'Invalid username or password';
  
  header('Location: login.php');
  exit;
}

// Close the connection
mysqli_close($con);
?>

<!-- <script>
			setTimeout(function() {
			swal({
					title: "เกิดข้อผิดพลาด", //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
					text: "ไม่มีบัญชีนี้อยู่ในระบบ", //ข้อความเปลี่ยนได้ตามการใช้งาน
					type: "false", //success, warning, danger
					timer: 3000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
					showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
				}, function(){
					window.location.href = "login.php"; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
					});
			});
		</script> -->

<!-- <script>
    function callAlert() {
        Swal.fire({
            title: 'ยินดีต้อนรับ',
            text: 'เข้าสู่เว็บไซต์ Devdit',
            icon: 'success',
            confirmButtonText: 'ยอดเยี่ยมเลย'
        });
    }
</script> -->

