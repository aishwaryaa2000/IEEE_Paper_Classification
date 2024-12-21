<!DOCTYPE html>
<html lang="en">


<?php

ob_start();
session_start();
if (!isset($_SESSION['principal_user_id'])) {
  header('location:../logout');
}
include '../conn.php';
$conn = db_connection();

?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register PO</title>
  <link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/style.min.css" rel="stylesheet">
  <link href="../Assets/bootstrap-4.5.0-dist/css/loader.css" rel="stylesheet">
  <script type="text/javascript" src="../Assets/bootstrap-4.5.0-dist/js/vanilla.js/js/v7.js"></script>
  <script src="../Assets/bootstrap-4.5.0-dist/js/onlynum.js"></script>



  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }


    .form-signin {
      width: 100%;
      max-width: 420px;
      padding: 15px;
      margin: auto;
    }

    .form-group {
      position: relative;
      margin-bottom: 1rem;
    }

    .form-group>input,
    .form-group>label {
      height: 2.8rem;
      padding: .75rem;
    }

    .form-group>label {
      position: absolute;
      top: 0;
      left: 0;
      display: block;
      width: 100%;
      margin-bottom: 0;
      /* Override default `<label>` margin */
      line-height: 1.5;
      color: #495057;
      pointer-events: none;
      cursor: text;
      /* Match the input under the label */
      border: 1px solid transparent;
      border-radius: .25rem;
      transition: all .1s ease-in-out;
    }

    .form-group input::-webkit-input-placeholder {
      color: transparent;
    }

    .form-group input:-ms-input-placeholder {
      color: transparent;
    }

    .form-group input::-ms-input-placeholder {
      color: transparent;
    }

    .form-group input::-moz-placeholder {
      color: transparent;
    }

    .form-group input::placeholder {
      color: transparent;
    }

    .form-group input:not(:placeholder-shown) {
      padding-top: 1.25rem;
      padding-bottom: .25rem;
    }

    .form-group input:not(:placeholder-shown)~label {
      padding-top: .25rem;
      padding-bottom: .25rem;
      font-size: 12px;
      color: #777;
    }

    /* Fallback for Edge
-------------------------------------------------- */
    @supports (-ms-ime-align: auto) {
      .form-group>label {
        display: none;
      }

      .form-group input::-ms-input-placeholder {
        color: #777;
      }
    }

    /* Fallback for IE
-------------------------------------------------- */
    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
      .form-group>label {
        display: none;
      }

      .form-group input:-ms-input-placeholder {
        color: #777;
      }
    }


    .form-control:focus {

      -webkit-box-shadow: none;
      box-shadow: none;
      border-top: 0px solid !important;
      border-right: 0px solid !important;
      border-left: 0px solid !important;
      transition: 0.4s;
      border: 3px solid #77a1d3;
    }

    .form-control {
      border: 1px solid #ced4da;
      border-top: 0px;
      border-left: 0px;
      border-right: 0px;
    }

    .custom-select {
      border: 1px solid #ced4da;
      border-top: 0px;

      border-right: 0px;

    }


    .custom-select:focus {
      /* border-color: inherit; */
      -webkit-box-shadow: none;
      box-shadow: none;
      border-top: 0px solid !important;
      border-right: 0px solid !important;
      border-left: 1px solid #ced4da !important;
      transition: 0.4s;
      border: 3px solid #007bff;
    }


    /* button */
    .btn {
      display: block;
      width: 30%;
      height: 50px;
      border-radius: 25px;
      outline: none;
      border: none;
      background-image: linear-gradient(to right, #2c3e50, #2980b9);
      background-size: 200%;
      font-size: 1.2rem;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      text-transform: uppercase;
      margin: 1rem 0;
      cursor: pointer;
      transition: .5s;
    }

    .btn:hover {
      background-position: right;
      color: #fff;
      -webkit-box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
    }

    /* button over */

    /* card shadow */
    .card {
      /* -webkit-box-shadow: 10px 10px 5px 0px rgba(107,57,115,0.43);
-moz-box-shadow: 10px 10px 5px 0px rgba(107,57,115,0.43);
box-shadow: 10px 10px 5px 0px rgba(107,57,115,0.43); */

      border-radius: 1rem;
      -webkit-box-shadow: 10px 10px 25px 0px rgba(221, 221, 221, 1);
      -moz-box-shadow: 10px 10px 25px 0px rgba(221, 221, 221, 1);
      box-shadow: 10px 10px 25px 0px rgba(221, 221, 221, 1);


      /* webkit-box-shadow: 10px 10px 5px 0px rgba(81,37,89,0.64);
-moz-box-shadow: 10px 10px 5px 0px rgba(81,37,89,0.64);
box-shadow: 10px 10px 5px 0px rgba(81,37,89,0.64); */

    }


    @media screen and (max-width: 820px) {


      #regis {
        display: block;
        width: 50%;
        height: 30px;
        border-radius: 25px;
        outline: none;
        border: none;
        text-align: center;
        background-image: linear-gradient(to right, #142850, #0F3E82);
        background-size: 200%;
        font-size: 0.8rem;
        color: #fff;
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
        margin: 1rem 0;
        cursor: pointer;
        transition: .5s;
      }

      #mail {
        font-size: 0.8rem;
      }
    }

    .card-header:first-child {
      border-radius: 1.25rem 1.25rem 0 0;
    }

    .card,
    .card-body {
      border-radius: 1.5rem;
    }


    .card-header {
      color: #fff;
      background: #2980b9;
      background: -webkit-linear-gradient(to right, #2c3e50, #2980b9);
      background: linear-gradient(to right, #2c3e50, #2980b9);
    }

    .navbar {
      -webkit-box-shadow: 0px 10px 15px -8px rgba(203, 203, 203, 1);
      -moz-box-shadow: 0px 10px 15px -8px rgba(203, 203, 203, 1);
      box-shadow: 0px 10px 15px -8px rgba(203, 203, 203, 1);
    }
  </style>
</head>

<body  onload="myFunction()">
<div id="loading">


<!-- <img class="loader"src="Assets/logos/nss.png" > -->
  
	<h1 id="h1">IEEE-Institute of Electrical and Electronics Engineers.</h1>
<h2 id="h2"></h2>
<h3 id="h3">Loading..</h3>
</div>


  <nav class="navbar navbar-light bg-white sticky-top justify-content-center">

    <img onclick="loaddata()" src="../Assets/logos/NSS_LOGO.png" width="80" height="80" class="m" alt="">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <ul class="navbar-nav">
      <li class="nav-item">
        <center>
          <h4>NSS Programme Officer</h4>
        </center>
      </li>
    </ul>

  </nav>

  <!-- <div>
<a href="home"><button class="btn btn-primary">BACK</button></a>
</div> -->
  <?php

  // check if PO is already registered for the year
  $year = date('Y');
  $principal_user_id = $_SESSION['principal_user_id'];
  $college_name = $_SESSION['college_name'];
  $college_code = $_SESSION['college_code'];
  $query_check_po = "SELECT * FROM `po_login_details` WHERE `po_year`='$year' AND  `college_code`='$college_code'";
  $res_po = mysqli_query($conn, $query_check_po);

  if (mysqli_num_rows($res_po) > 0) {
    while ($row = mysqli_fetch_assoc($res_po)) {

      $name = $row['po_name'];
      $no = $row['po_contact'];
      $email = $row['po_email'];
    }

  ?>
  
    <br>
    <br>

    <div class="row">

      <div class="col-sm-4 xs-4 ">

        <img  src="../Assets/SVG/prin_showPOdetails.svg" width="95%" height="100%">

      </div>

      <div class="col-sm-7 xs-7">
        <br>

        <div class="container">
          <!-- card starts -->
          <div class="card">
            <div class="card-header text-center">
              <b> PROGRAMME OFFICER DETAILS</b>
            </div>
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">

                <div class="alert  alert-primary">
                  <p>Programme officer has already been registered for the current year
                  </p>
                </div>


                <div class="form-group ">
                  <input type="" type="text" class="form-control" id="" disabled name="name" placeholder=" " required id="name">
                  <label for="name"><b>Name</b> - <?php echo "$name" ?> </label>
                </div>

                <div class="form-group ">
                  <input type="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" disabled id="" name="mail" placeholder=" " required id="mail">
                  <label for="mail" disabled id="mail"><b>Email ID</b> - <?php echo "$email" ?> </label>
                </div>

                <div class="form-group ">
                  <input type="" type="text" class="form-control" disabled id="" name="con" placeholder=" " required id="con">
                  <label for="con"><b>Number</b> - <?php echo "$no" ?></label>
                </div>


                <!-- <i> yoyoyo</i> -->





                <form method="POST" action="index">
                  <center> <input type="submit" value="BACK" class="btn"> </center>
                </form>
              </p>
            </div>
            <!-- card body ends -->
          </div>
          <!-- card ends -->
        </div>
      </div>
      <!-- col ends -->



    </div>

    <!-- row ends -->



  <?php
  } else {
  ?>
    <br>
    <div class="row">

      <div class="col-sm-4 xs-4 ">

        <img src="../Assets/SVG/prin_poregister.svg" width="100%" height="100%">

      </div>

      <div class="col-sm-7 xs-7">
        <br>

        <div class="container">
          <!-- card starts -->
          <div class="card">
            <div class="card-header text-center">
              <b> ENTER DETAILS OF THE PROGRAMME OFFICER</b>
            </div>
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">

                <form class="needs-validation" method="POST" action="" novalidate>

                  <div class="form-group ">
                    <input type="" type="text" class="form-control" id="" name="po_name" placeholder=" " required id="name">
                    <label for="name">Enter Name</label>
                  </div>

                  <div class="form-group ">
                    <input type="" type="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" id="" name="po_email" placeholder=" " required id="mail">
                    <label for="mail">Enter Email ID</label>
                  </div>

                  <div class="form-group ">

                    <input type="text" name="po_contact" pattern="[1-9]{1}[0-9]{9}" class="form-control" id="con" placeholder=" " required>
                    <label for="con">Enter Contact number</label>
                  </div>




                  <center> <input type="submit" name="register" value="REGISTER" id="regis" class="btn"> </center>

                  <!-- <label>Program Officer's Name</label>
                        <input type="text" name="po_name" id="po_name" required><br><br>

                        <label>Email Id</label>
                        <input type="email" name="po_email" id="po_email" required><br><br>

                        <label>Contact Number</label>
                        <input type="text" name="po_contact" id="po_contact" required><br><br>

                        <input type="submit" value="Register" name="register"> -->

                </form>
              </p>
            </div>
            <!-- card body ends -->

          </div>
          <!-- card ends -->
        </div>
      </div>
      <!-- col ends -->





    </div>
    <!-- row ends -->


  <?php
  }


  if (@isset($_POST['register'])) {
    $po_name = $_POST['po_name'];
    $po_email = $_POST['po_email'];
    $po_contact = $_POST['po_contact'];

    // generate po_ userid

    $po_user_id = "PO" . $college_code . $year;

    //generate po_password

    $randstring = "1234567890QWERTYUPASDFGHJKLZXCVBNMqwertyuipasdfghjkzxcvbnm1234567890qazwsxedcrfvtgbyhnTGBRFVEDCWSXQAZ";
    $shuffled = str_shuffle($randstring);
    $password = substr($shuffled, 6, 6);
    $hashpassword = md5($password);

    // invalid older po's
    $query_invalid = "UPDATE `po_login_details` SET `po_invalid`='1' WHERE `college_code`='$college_code'";
    $res_invalid = mysqli_query($conn, $query_invalid);

    //insert new po

    $query_insert_po = "INSERT INTO `po_login_details`(`college_name`, `college_code`, `po_user_id`, `po_password`, `po_name`, `po_email`, `po_contact`, `po_year`) VALUES ('$college_name','$college_code','$po_user_id','$hashpassword','$po_name','$po_email','$po_contact','$year')";
    $res_insert = mysqli_query($conn, $query_insert_po);
    if ($res_insert) 
    {
      include '../mailsetup.php';
      $to = $po_email;
      $subject = "NSS login credentials";
      $body = "Your credentials for login are <br> User ID: - $po_user_id <br> Password: - $password";
      $body = $body . '<br> To login <a href="http://betanss.mu.ac.in/login">Click Here</a>';

      $mail->addAddress($to, $po_name);     // Add a recipient
      $mail->Subject = $subject;
      $mail->Body = $body;
      //$headers="content-type:text/html";
      if ($mail->send()) {
        echo "<script>alert('Programme Officer has been registered successfully. Login credentials sent to the entered Mail ID.')</script>";
        header('refresh:1,url=home');
      } 
      else 
      {
        echo $mail->ErrorInfo;
      }
    } 
    else 
    {
      echo "<script>alert('Programme Officer Registration unsuccessful.PLEASE TRY AGAIN')</script>";
    }
  }

  ob_flush();
  ?>


  <!-- Form Validation -->
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
   <script src="../Assets/bootstrap-4.5.0-dist/js/loader.js"></script>
</body>

</html>