<?php

session_start();
    if(!isset($_SESSION['vol_user_id']))
    {
        header('location:../logout');   
    }
    
    include '../connect.php';
    
    if(isset($_POST['submit']))
    {
        $vol_user_id=$_SESSION['vol_user_id'];

        $new=$_POST['new'];
        $confrim=$_POST['confrim'];
        if($new==$confrim)
        {
            $hashpassword=md5($new);
            $query_update_password="UPDATE `vol_personal_details` SET `password`='$hashpassword' WHERE vol_user_id='$vol_user_id'";
            $res=mysqli_query($conn,$query_update_password);
            if($res==1)
            {
                $query_change="UPDATE `volunteer_user_id_po` SET `password`= NULL, `invalid`= 1 WHERE vol_user_id='$vol_user_id'";
                $res1=mysqli_query($conn,$query_change);
                echo "<script>alert('PASSWORD UPDATED')</script>";
                header("refresh: 0; url = index");
            }
        }
        else
        {   
            echo "<script>alert('PASSWORD MISMATCH')</script>";
            header("refresh: 0; url = index");
        }  
    }
?>