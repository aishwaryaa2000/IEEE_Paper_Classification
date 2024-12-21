<?php
ob_start();
session_start();
include '../conn.php';
$college_code = $_SESSION['college_code'];
$conn = db_connection();
if (isset($_POST['change']))
{
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $mother_name = $_POST['mother_name'];
    $email_id = $_POST['email'];
    $contact = $_POST['contact'];
    $vol_user_id = $_POST['vol_user_id'];
    $invalid=0;
    $clg_name=$_SESSION['college_name'];

    $first_name=trim($first_name);
    $middle_name=trim($middle_name);
    $last_name=trim($last_name);
    $mother_name=trim($mother_name);
    $email_id=trim($email_id);
    $contact=trim($contact);
    // removing old volunteer from db

    $query_remove = "DELETE FROM `vol_personal_details` WHERE `vol_user_id`='$vol_user_id' AND `college_code`='$college_code'";
    $query_remove1 = "DELETE FROM `volunteer_user_id_po` WHERE `vol_user_id`='$vol_user_id' AND `college_code`='$college_code'";
    $res_remove = mysqli_query($conn, $query_remove);
    $res_remove1 = mysqli_query($conn, $query_remove1);

    //creating new password
    $randstring = "1234567890QWERTYUPASDFGHJKLZXCVBNMqwertyuipasdfghjkzxcvbnm1234567890qazwsxedcrfvtgbyhnTGBRFVEDCWSXQAZ";
    $shuffled = str_shuffle($randstring);
    $password = substr($shuffled, 5, 6);
    $hashpassword = md5($password);

    //inserting into temp
    $query_insert_temp = "INSERT INTO `volunteer_user_id_po`(`college_code`, `first_name`, `middle_name`, `last_name`, `mother_name`, `contact`, `email_id` , `vol_user_id`, `password`, `college_name`, `invalid`) VALUES ('$college_code','$first_name','$middle_name','$last_name', '$mother_name', '$contact','$email_id','$vol_user_id', '$password','$clg_name','$invalid')";
    $res_temp = mysqli_query($conn, $query_insert_temp);


    //inseting data into vol details
    $query_insert_vol = "INSERT INTO `vol_personal_details`(`college_code`,`first_name`, `middle_name`, `last_name`, `mother_name`, `contact`, `email_id`, `vol_user_id`, `password`, `college_name`) VALUES ('$college_code','$first_name','$middle_name','$last_name','$mother_name','$contact','$email_id','$vol_user_id', '$hashpassword','$clg_name')";
    $res_vol_final = mysqli_query($conn, $query_insert_vol);

    if ($res_vol_final) 
    {
        // sending volunteer mail with its login details.

        $subject = "Your login details of NSS registration";
        $message = 'You have been selected as NSS volunteer for your college. <br>Please find your login details below. <br> Username: - ' . $vol_user_id . '<br>' . 'Password: - ' . $password;
        $message= $message.'<br> To login <a href="www.betanss.mu.ac.in/login">Click Here</a>';
        // phpmailer
        include '../mailsetup.php';
        $mail->addAddress($email_id);     // Add a recipient
        $mail->Subject = $subject;
        $mail->Body = $message;
        if ($mail->send()) 
        {
            unset($mail);
?>

            <script>
                alert('Volunteer enrolled successfully!\nEmail will be sent to the registered email address.')
            </script>
<?php
            header("refresh: 0; url = index");
        }
        else
        {
            echo"<script>alert('Registration Successful,check the list of enrolled students.')<script>";
        }
    }
}

?>