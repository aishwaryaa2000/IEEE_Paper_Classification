<?php 
ob_start();
session_start();
//include '../mailsetup.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imported students</title>
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->
    <!-- Bootstrap core CSS -->
    <link href="../Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../Assets/bootstrap-4.5.0-dist/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../Assets/bootstrap-4.5.0-dist/css/style.min.css" rel="stylesheet">
    <script src="../Assets/bootstrap-4.5.0-dist/js/onlynum.js"></script>
    <script type="text/javascript" src="../Assets/bootstrap-4.5.0-dist/js/vanilla.js/js/v7.js"></script>
    <style>
         mark{
    background-color: #5fdde5;
    color:#fff;
    border-radius:2rem;  
    padding:0.5rem; font-weight:500;     
  }
  .card{
    border-radius: 1rem;
    -webkit-box-shadow: 10px 10px 25px 0px rgba(221,221,221,1);
-moz-box-shadow: 10px 10px 25px 0px rgba(221,221,221,1);
box-shadow: 10px 10px 25px 0px rgba(221,221,221,1);

  }
  .mynav2{
    margin-top:1.5rem;
    margin-bottom: 2.5rem;
    -webkit-box-shadow: 0px 10px 41px 0px rgba(230,230,230,0.69);
-moz-box-shadow: 0px 10px 41px 0px rgba(230,230,230,0.69);
box-shadow: 0px 10px 41px 0px rgba(230,230,230,0.69);

    background: #36D1DC; 
background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC); 
background: linear-gradient(to right, #5B86E5, #36D1DC); 
  }
.navbar>li{
  border-right: 1px solid #fff;
}
.navbar>li:last-child{
   border: none;
}
@media only screen and (max-width: 580px) {
  .navbar>li{
  border:none;
}
}

.navbar{
    -webkit-box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
-moz-box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
}
    </style>

</head>

<body>

    <nav class="navbar navbar-light bg-white sticky-top justify-content-around ">
        <img src="../Assets/logos/NSS_LOGO.png" onclick="loaddata()" width="80" height="80" class="m" alt="">
        <ul class="navbar-nav">
            <li class="nav-item">
                <center><h4>LIST OF IMPORTED STUDENTS</h4></center>
            </li>
        </ul>
        <button type="button" class="btn btn-primary" style="border-radius: 24px;" onclick="location.href='registervolunteer'">BACK</button>
    </nav>

    <div class="container jumbotron-fluid">   
        <ul class="navbar font-weight-bold mynav2">
            <li class="nav-item list-unstyled col-sm-6 md-6 xl-6">
                <div id="succon" class="nav-link text-white text-center mylabels">Number of students added: </a>
              </li>
              <li class="nav-item list-unstyled col-sm-6 md-6 xl-6">
                <a class="nav-link text-white text-center mylabels" href="index">Home</a>
              </li>             
        </ul>

        <div class="card">
            <div class="card-body table-responsive">
                <table class="table table-borderless table-hover text-center">
                    <thead>
                      <tr>
                      <th scope="col">Sr No</th>                      
                        <th scope="col">First Name</th>
                        <th scope="col">Middle Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Mother's Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Contact number</th>
                        <th scope="col">UserID of volunteer</th>
                        <th scope="col">Password</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr> -->
                      <?php
        $po_user_id = $_SESSION['po_user_id'];
        include '../conn.php';
        $conn = db_connection();
        $college_code = $_SESSION['college_code'];
        $query = "SELECT * FROM `college_info` WHERE `college_code`='$college_code'";
        $res = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($res);
        $max_vol = $row['max_allot'];
        //registration via csv bulk registration
        if (@$_POST['register_csv']) 
        {

            $csvfile = $_FILES["details"]; 
                $regs = fopen($_FILES['details']['tmp_name'], "r");
                $data = fgetcsv($regs, "1000");
                $success = 0;
                $unsuccessful = 0;
                $notentered = array();
                $present = 0;
                $entriespresent = array();
                $mailnotsent = 0;
                $mailnotsent_name = array();
                $mailnotsent_contact = array();
                $mailnotsent_uid = array();
                $mailnotsent_pass = array();
                $srno = 0;
                while ($data = fgetcsv($regs, "1000")) {

                    $first_name = $data[0];
                    $middle_name = $data[1];
                    $last_name = $data[2];
                    $mother_name = $data[3];
                    $contact = $data[4];
                    $email_id = $data[5];
                    $invalid = 0;
                    $college_name = $_SESSION['college_name'];

                    $first_name=trim($first_name);
                    $middle_name=trim($middle_name);
                    $last_name=trim($last_name);
                    $email_id=trim($email_id);
                    $mother_name=trim($mother_name);
                    $contact=trim($contact);
                    // checking if number of volunteers execeed
                    //getting latest count of volunteers
                    $query_get_count = "SELECT * FROM `po_login_details` WHERE `po_user_id`='$po_user_id'";
                    $res = mysqli_query($conn, $query_get_count);
                    $row = mysqli_fetch_assoc($res);
                    $vol_count = $row['vol_count'];

                    if ($vol_count >= $max_vol)
                    {
                        echo "<script>alert('MAXIMUM REGISTRATION LIMIT REACHED!')</script>";
                        //header('refresh:0;url=index');
                        break;
                    } 
                    else
                    {
                        //check if vol already exsists
                        $query_check_vol="SELECT * FROM `volunteer_user_id_po` WHERE `email_id`='$email_id'";
                        $res_check_vol=mysqli_query($conn,$query_check_vol);
                        if(@mysqli_num_rows($res_check_vol)>0)
                        {
                           $present++;
                         $fullname=$first_name." ".$middle_name." ".$last_name;
                        array_push($entriespresent,$fullname);
                            continue;
                        }
                        else
                        {


                            // userid generation for volunteer
                            $vol_count = $vol_count + 1;
                            $vol_user_id = 'VOL' . $college_code . substr($first_name, 0, 3) . substr($last_name, 0, 3) . $vol_count;

                            //password generation for volunteer
                            do 
                            {

                                $randstring = "1234567890QWERTYUPASDFGHJKLZXCVBNMqwertyuipasdfghjkzxcvbnm1234567890qazwsxedcrfvtgbyhnTGBRFVEDCWSXQAZ";
                                $shuffled = str_shuffle($randstring);
                                $password = substr($shuffled, 5, 6);
                                $hashpassword = md5($password);

                                //checking if password is unique;
                                $query_check_pass = "SELECT * FROM `volunteer_user_id_po` WHERE `password`=$password";
                                $res_check_pass = mysqli_query($conn, $query_check_pass);
                            } while ($res_check_pass);

                            // inserting data into temp database
                            // $query_insert_temp = "INSERT INTO `volunteer_user_id_po`(`first_name`, `middle_name`, `last_name`, `contact`, `email_id` , `vol_user_id`, `password`, `college_name`, `invalid`) VALUES ('$first_name','$middle_name','$last_name','$contact','$email_id','$vol_user_id', '$password','$college_name','$invalid')";
                            $query_insert_temp = "INSERT INTO `volunteer_user_id_po`(`college_code`, `first_name`, `middle_name`, `last_name`, `mother_name`, `contact`, `email_id` , `vol_user_id`, `password`, `college_name`, `invalid`) VALUES ('$college_code','$first_name','$middle_name','$last_name', '$mother_name', '$contact','$email_id','$vol_user_id', '$password','$college_name','$invalid')";
                            $res_temp = mysqli_query($conn, $query_insert_temp);
                            if ($res_temp == 1) 
                            {

                                //inseting data into vol details
                                $query_insert_vol = "INSERT INTO `vol_personal_details`(`college_code`,`first_name`, `middle_name`, `last_name`, `mother_name`, `contact`, `email_id`, `vol_user_id`, `password`, `college_name`) VALUES ('$college_code','$first_name','$middle_name','$last_name','$mother_name', '$contact','$email_id','$vol_user_id', '$hashpassword','$college_name')";
                                $res_vol_final = mysqli_query($conn, $query_insert_vol);

                                if ($res_vol_final == 1) 
                                {
                                    $srno++;
                                    // displaying entered volunteer details
                                    ?>
                                    <tr>
                                        <td><?php echo $srno; ?></td>
                                        <td><?php echo $first_name; ?></td>
                                        <td><?php echo $middle_name; ?></td>
                                        <td><?php echo $last_name; ?></td>
                                        <td><?php echo $mother_name; ?></td>
                                        <td><?php echo $email_id; ?></td>
                                        <td><?php echo $contact; ?></td>
                                        <td><?php echo $vol_user_id; ?></td>
                                        <td><?php echo $password; ?></td>
                                    </tr>
                    </tbody>
                    <?php
                                    // updating vol count
                                    $query_update_count = "UPDATE `po_login_details` SET `vol_count`= '$vol_count' WHERE `po_user_id`='$po_user_id' ";
                                    $res1 = mysqli_query($conn, $query_update_count);
                                    $success++;
                                    // sending volunteer mail with its login details.
                                    $subject = "Your login details of NSS registration";
                                    $message = 'You have been selected as NSS volunteer for your college. <br> Please find your login details below. <br> Username: - ' . $vol_user_id . '<br>' . 'Password: - ' . $password;
                                    $message= $message.'<br> To login <a href="www.betanss.mu.ac.in/login">Click Here</a>';
                                    try
                                    {
                                        include '../mailsetup.php';
                                        $mail->addAddress($email_id);     // Add a recipient
                                        $mail->Subject = $subject;
                                        $mail->Body = $message;
                                        if ($mail->send()) 
                                        {
                                            // echo $first_name;
                                            unset($mail);
                                        }
                                        // if mail not sent
                                        else
                                        {
                                            unset($mail);
                                            $mailnotsent++;
                                            $fullname=$first_name." ".$middle_name." ".$last_name;
                                            array_push($mailnotsent_name,$fullname);
                                            array_push($mailnotsent_contact, $contact);
                                            array_push($mailnotsent_uid, $vol_user_id);
                                            array_push($mailnotsent_pass, $password);   
                                        }
                                    }
                                    // if error thrown by phpmailer
                                    catch(Exception $e)
                                    {
                                        unset($mail);
                                        $mailnotsent++;
                                        $fullname=$first_name." ".$middle_name." ".$last_name;
                                        array_push($mailnotsent_name,$fullname);
                                        array_push($mailnotsent_contact, $contact);
                                        array_push($mailnotsent_uid, $vol_user_id);
                                        array_push($mailnotsent_pass, $password);
                                    }
                                }
                                // if data is not entered in  table vol_personal_details remove from volunteer_user_id_po
                                else 
                                {
                                    $query_remove_entery = "DELETE FROM `volunteer_user_id_po` WHERE `vol_user_id`='$vol_user_id'";
                                    $res_delete = mysqli_query($conn, $query_remove_entery);
                                    $unsuccessful++;
                                    $fullname = $first_name . " " . $middle_name . " " . $last_name;
                                    array_push($notentered, $fullname);
                                }
                            } 
                            else
                            // if data is not entered in volunteer_user_id_po
                            {
                                $unsuccessful++;
                                $fullname = $first_name . " " . $middle_name . " " . $last_name;
                                array_push($notentered, $fullname);
                            }
                        }
                    }
                }
                // displaying count of successfull and unscussefull entries

                if ($success > 0) 
                {
                    //echo "<h6>" . $success . " Entries imported successfully !</h6>";
                }
                if ($unsuccessful > 0) 
                {
                    echo "<br>" . $unsuccessful . " Entries unsuccessful. Try again ";
                    echo "<br> Name of Volunteers";
                    foreach ($notentered as $value) 
                    {
                        echo "<br> " . $value;
                    }
                }
                
            ?>
            </table>
            </div>
          </div> 

          <script>
    document.getElementById('succon').innerHTML = "Number of students added: <?php echo $success; ?>";
</script>
<?php
        if ($mailnotsent > 0) {
                                    ?>
        <br><br>
        <div class="card">
        
            <div class="card-body table-responsive">
            <div class="alert alert-danger" role="alert">
            <?php
        echo "Unable to send E-mails to " . $mailnotsent . " volunteers";  
        ?>
        </div>
                <table class="table table-borderless table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">Sr No</th>
                            <!-- <th scope="col">First Name</th> -->
                            <!-- <th scope="col">Middle Name</th> -->
                            <!-- <th scope="col">Last Name</th> -->
                            <th scope="col">Volunteer Name</th>
                            <th scope="col">Contact number</th>
                            <th scope="col">UserID of volunteer</th>
                            <th scope="col">Password</th>
                        </tr>
                    </thead>
                  
                    <tbody>
                    <?php for($i=0; $i<$mailnotsent;$i++){ ?>
                        <tr>
                            <td><?php echo $i+1; ?></td>
                            <td><?php echo $mailnotsent_name[$i]; ?></td>
                            <td><?php echo $mailnotsent_contact[$i]; ?></td>
                            <td><?php echo $mailnotsent_uid[$i]; ?></td>
                            <td><?php echo $mailnotsent_pass[$i]; ?></td>
                        </tr>
                    <?php   } ?>
                    </tbody>
                </table>
            </div>
        </div>




            <?php
        }
        if($present>0)
        {
            echo "<script>alert('Volunteer with the same email ID has already registered.')</script>";
        }
    }

        ?>
                   
</div>
</body>
</html>