<?php 
 session_start();
 if(!isset($_SESSION['po_user_id']))
    {
        header('location: ../logout');
    }

$po_user_id=$_SESSION['po_user_id'];

include'../conn.php';
$conn=db_connection();
$college_code=$_SESSION['college_code'];
$query="SELECT * FROM `college_info` WHERE `college_code`='$college_code'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($res);
$max_vol=$row['max_allot'];
//registration form for single student

if(@$_POST['register'])
{
    $first_name=filter_var($_POST['first_name'],FILTER_SANITIZE_STRING);
    $middle_name=filter_var($_POST['middle_name'],FILTER_SANITIZE_STRING);
    $last_name=filter_var($_POST['last_name'],FILTER_SANITIZE_STRING);
    $email_id=filter_var($_POST['email'],FILTER_SANITIZE_STRING);
    $contact=filter_var($_POST['contact'],FILTER_SANITIZE_STRING);
    $mother_name=$_POST['mother_name'];
    $invalid=0;
    $clg_name=$_SESSION['college_name'];

    $first_name=trim($first_name);
    $middle_name=trim($middle_name);
    $last_name=trim($last_name);
    $email_id=trim($email_id);
    $mother_name=trim($mother_name);
    $contact=($contact);
    $query_get_count="SELECT * FROM `po_login_details` WHERE `po_user_id`='$po_user_id'";
    $res=mysqli_query($conn,$query_get_count);
    $row=mysqli_fetch_assoc($res);
    $vol_count=$row['vol_count'];

    if($vol_count>=$max_vol)
    {
        echo "<script>alert('MAX REGISTRATION LIMIT REACHED')</script>";
        header('refresh:0;url=index');
    }
    else
    {

        //check if vol already exsists
        $query_check_vol="SELECT * FROM `volunteer_user_id_po` WHERE `email_id`='$email_id'";
        $res_check_vol=mysqli_query($conn,$query_check_vol);
        if(@mysqli_num_rows($res_check_vol)>0)
        {
            ?>
            <script>alert('VOLUNTEER ALREADY EXSIST')</script>
            <?php
            header("refresh: 0; url = registervolunteer");
        }
        else
        {
            //volunteer userid generation for volunteer
            $vol_count = $vol_count + 1;
            $vol_user_id = 'VOL' . $college_code . substr($first_name, 0, 3) . substr($last_name, 0, 3) . $vol_count;

            //generation password for volunteer
            do {
                $randstring = "1234567890QWERTYUPASDFGHJKLZXCVBNMqwertyuipasdfghjkzxcvbnm1234567890qazwsxedcrfvtgbyhnTGBRFVEDCWSXQAZ";
                $shuffled = str_shuffle($randstring);
                $password = substr($shuffled, 5, 6);
                $hashpassword = md5($password);

                //checking if password is unique;
                $query_check_pass = "SELECT * FROM `volunteer_user_id_po` WHERE `password`=$password";
                $res_check_pass = mysqli_query($conn, $query_check_pass);
            } while ($res_check_pass);

            // inserting data into temp database
            $query_insert_temp = "INSERT INTO `volunteer_user_id_po`(`college_code`, `first_name`, `middle_name`, `last_name`, `mother_name`, `contact`, `email_id` , `vol_user_id`, `password`, `college_name`, `invalid`) VALUES ('$college_code','$first_name','$middle_name','$last_name', '$mother_name', '$contact','$email_id','$vol_user_id', '$password','$clg_name','$invalid')";
            $res_temp = mysqli_query($conn, $query_insert_temp);

            // updating vol count
            $query_update_count = "UPDATE `po_login_details` SET `vol_count`= '$vol_count' WHERE `college_code`='$college_code' ";
            $res1 = mysqli_query($conn, $query_update_count);

            //inseting data into vol details
            $query_insert_vol = "INSERT INTO `vol_personal_details`(`college_code`,`first_name`, `middle_name`, `last_name`, `mother_name`, `contact`, `email_id`, `vol_user_id`, `password`, `college_name`) VALUES ('$college_code','$first_name','$middle_name','$last_name','$mother_name','$contact','$email_id','$vol_user_id', '$hashpassword','$clg_name')";
            $res_vol_final = mysqli_query($conn, $query_insert_vol);

            // sending volunteer mail with its login details.

            $subject = "Your login details of NSS registration";
            $message = 'You have been selected as NSS volunteer for your college. <br> Please find your login details below. <br> Username: - ' . $vol_user_id . '<br>' . 'Password: - ' . $password;
            $message= $message.'<br> To login <a href="www.betanss.mu.ac.in/login">Click Here</a>';

            //php mailer
            include '../mailsetup.php';
            $mail->addAddress($email_id);     // Add a recipient
            $mail->Subject = $subject;
            $mail->Body = $message;
            if ($mail->send()) 
            {
                ?>

                <script>alert('Volunteer enrolled successfully!\nEmail will be sent to the registered email address.')</script>
                <?php
                header("refresh: 0; url = registervolunteer");
            }
        }
    }
}
?>