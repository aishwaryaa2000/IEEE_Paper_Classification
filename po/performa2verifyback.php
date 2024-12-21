<?php
 session_start();
if(!isset($_SESSION['po_user_id']))
{
    header('location: ../logout');
}
 include '../conn.php';
 $conn=db_connection();

 $vol_id=$_SESSION['vol_id'];
 if(isset($_POST['submit']))
 {
     $query="UPDATE `vol_personal_details` SET `verification`= '1' WHERE `vol_user_id`='$vol_id'";
     $res=mysqli_query($conn,$query);
     if($res)
     {
         
         echo "<script>alert('Proforma-II has been verified')</script>";
         header('refresh:1, url=verifystudent');
     }
 }
?>