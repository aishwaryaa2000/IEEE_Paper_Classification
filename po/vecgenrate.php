<?php
session_start();
include '../connect.php';
//include '../mailsetup.php';
$sql_q1  = "SELECT * FROM `vol_personal_details` WHERE `college_code` = '{$_SESSION['college_code']}' AND `verification` = 0 ORDER BY `last_name` ASC";
$verification=mysqli_query($conn,$sql_q1);
if(mysqli_num_rows($verification)>0){
    echo "<script>alert('Please first verify all the students.');</script>";
    echo "<script>window.location.href = 'index';</script>";
    
}else{
    try{
    $cnt = 1;
    $sql_q2  = "SELECT * FROM `vol_personal_details` WHERE `college_code` = '{$_SESSION['college_code']}' AND `verification` = 1 ORDER BY `last_name` ASC";
    $stu_data=mysqli_query($conn,$sql_q2);
    while($sd=mysqli_fetch_assoc($stu_data)){
        $vec = "MH09{$_SESSION['college_code']}20".str_pad($cnt, 3, '0', STR_PAD_LEFT);
        $sql_q3="UPDATE `vol_personal_details` SET `vol_user_id` = '{$vec}' WHERE `vol_user_id` = '{$sd['vol_user_id']}' AND `college_code` = '{$_SESSION['college_code']}' ";
        $sql_q4="UPDATE `volunteer_user_id_po` SET `vol_user_id` = '{$vec}' WHERE `vol_user_id` = '{$sd['vol_user_id']}' AND `college_name` = '{$sd['college_name']}' ";
        mysqli_query($conn,$sql_q3);
        mysqli_query($conn,$sql_q4);
        $cnt += 1; 
        $email_id = $sd['email_id'];
        $subject = "Registered successfully in NSS";
        $message = 'You have been successfully registered in NSS. <br> Your respective VEC is: - ' . $vec;
        $message = $message."<br> Use this code to login in your account, password is same as before.";
        $message = $message.'<br> To login <a href="www.betanss.mu.ac.in/login">Click Here</a>';
        
        try
        {
        // phpmailer
        include '../mailsetup.php';
        $mail->addAddress($email_id);     // Add a recipient
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->send();
        unset($mail);
        }
        catch(Exception $e)
        {

        }
    }
    $query = "UPDATE `po_login_details` SET `vec_gen` = 1 WHERE `po_user_id` = '{$_SESSION['po_user_id']}' ";
    mysqli_query($conn,$query);
    echo "<script>alert('VEC code has been successfully allocated to students');</script>";
    echo "<script>window.location.href = 'index';</script>";
}catch(Exception $e){
    echo "<script>alert('ERROR:".$e."\n unable to allot VEC');</script>";
    echo "<script>window.location.href = 'index';</script>";
}
}


?>