


<?php
include "../connect.php";




    $sqlmemid = "SELECT * FROM `members` ORDER BY memid DESC LIMIT 0,1";
	$all_sqlmemid = mysqli_query($con,$sqlmemid);

    $sqlownerid = "SELECT * FROM `owner` ORDER BY ownerid DESC LIMIT 0,1";
	$all_sqlownerid = mysqli_query($con,$sqlownerid);


  
  // use a while loop to fetch data
  // from the $all_categories variable
  // and individually display as an option
//   while ($sqlmemid = mysqli_fetch_array(
//       $all_sqlmemid,MYSQLI_ASSOC)):;
//       $memgarid = $sqlmemid["memid"];
//       $memgarid1 = $memgarid+1;
//   endwhile;

//   while ($sqlownerid = mysqli_fetch_array(
//     $all_sqlownerid,MYSQLI_ASSOC)):;
//     $garownerid = $sqlownerid["ownerid"];
//     $garownerid1 = $garownerid+1;
// endwhile;

    if(isset($_POST['submit']))
	{   
        $date1 = date("Ymd_His");
        $randoms = (mt_rand());
        $image = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $path_info = pathinfo($image_name);
        $extension = $path_info['extension'];
        $combined_name = $image_name;
        $path = "../assets/upload/admin/";
        $_P_img = $path.$date1.$randoms.$image_name;
        $_P_img2 = $date1.$randoms.$image_name;
        // move_uploaded_file($image, "../assets/upload/garpro/$image_name");
        move_uploaded_file($image, $_P_img);


        $editaddname = $_POST['editaddname'];
        $editaddlname = $_POST['editaddlname'];
        $editaddemail = $_POST['editaddemail'];
        // $editaddpassword = $_POST['editaddpassword'];
        $editnewaddpassword = $_POST['editnewaddpassword'];
        $editconaddpassword = $_POST['editconaddpassword'];
        $editimg = $_POST['editimg'];
        $editmemid = $_POST['editmemid'];

        if($editnewaddpassword == ''){
            $password = $editconaddpassword;
        }else{
            $password = $editnewaddpassword;
        }

        // if($image_name == ''){
        //     $adimg = $_P_img2;
        // }else{
        //     $adimg = $_P_img2;
        // }
        

      
            // $id = mysqli_real_escape_string($con,$_POST['province']);
            $sql_update1 =
            "UPDATE admin SET 
            adminfname = '$editaddname',
            adminlname = '$editaddlname'
            ,adminprofile = '$_P_img2'
            WHERE memid = '$editmemid'";
            
            if(mysqli_query($con,$sql_update1))
            {
                // echo '<script>alert("บันทึกเสร็จสิ้น")</script>';
                // echo "<meta http-equiv='refresh'content='0;URL=admin-addgarage.php'/>";
                
            }

            $sql_update2 =
            "UPDATE members  SET 
            membersemail = '$editaddemail',
            mempassword = '$password'
            WHERE memid = '$editmemid'";
            if(mysqli_query($con,$sql_update2))
            {
                echo '<script>alert("บันทึกเสร็จสิ้น")</script>';
                echo "<meta http-equiv='refresh'content='0;URL=../login.php'/>";
                
            }

	}

?>