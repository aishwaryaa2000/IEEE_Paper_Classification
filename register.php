<?php 
ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="Assets/logos/nss.ico"/>
    <title>Register college</title>
      <!-- Font Awesome -->
      <link href="Assets/bootstrap-4.5.0-dist/css/loader.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="Assets/bootstrap-4.5.0-dist/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="Assets/bootstrap-4.5.0-dist/css/style.min.css" rel="stylesheet">
    <script type="text/javascript" src="Assets/bootstrap-4.5.0-dist/js/vanilla.js/js/v8.js"></script>
     <script src="Assets/bootstrap-4.5.0-dist/js/onlynum.js"></script>

<style>

.form-signin
 {
  width: 100%;
  max-width: 420px;
  padding: 15px;
  margin: auto;
}

.form-group 
{
  position: relative;
  margin-bottom: 1rem;
}

.form-group > input,
.form-group > label 
{
  height: 2.8rem;
  padding: .75rem;
}

.form-group > label
 {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0; 
  line-height: 1.5;
  color: #495057;
  pointer-events: none;
  cursor: text; 
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-group input::-webkit-input-placeholder 
{
  color: transparent;
}

.form-group input::-ms-input-placeholder 
{
  color: transparent;
}

.form-group input::-moz-placeholder 
{
  color: transparent;
}

.form-group input::placeholder
{
  color: transparent;
}

.form-group input:not(:placeholder-shown) 
{
  padding-top: 1.25rem;
  padding-bottom: .25rem;
}

.form-group input:not(:placeholder-shown) ~ label
 {
  padding-top: .25rem;
  padding-bottom: .25rem;
  font-size: 12px;
  color: #777;
}

@supports (-ms-ime-align: auto)
{
  .form-group > label
   {
    display: none;
   }
  .form-group input::-ms-input-placeholder 
  {
    color: #777;
  }
}


@media all and (-ms-high-contrast: none), (-ms-high-contrast: active)
 {
  .form-group > label 
  {
    display: none;
  }
  .form-group input:-ms-input-placeholder
   {
    color: #777;
  }
}


  .form-control:focus 
{
 
  -webkit-box-shadow: none;
  box-shadow: none;
  border-top:0px solid !important;
  border-right:0px solid !important;
  border-left:0px solid !important;
  transition: 0.4s;
  border :3px solid #77a1d3;
}

.form-control
{ border: 1px solid #ced4da;
  border-top:0px;
  border-left:0px;
  border-right:0px;
}

.custom-select
{
  border: 1px solid #ced4da;
  border-top:0px;
  border-right:0px;

}


.custom-select:focus
 {
  
  -webkit-box-shadow: none;
  box-shadow: none;
  border-top:0px solid !important;
  border-right:0px solid !important;
  border-left:1px solid #ced4da !important;
  transition: 0.4s;
  border :3px solid #007bff;
}



.btn{
	display: block;
	width: 30%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, #24243e, #302b63, #0f0c29); 
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
 
 
}

.btn:hover
{
background-position: right;
-webkit-box-shadow: 10px 10px 9px -8px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 9px -8px rgba(0,0,0,0.75);
box-shadow: 10px 10px 9px -8px rgba(0,0,0,0.75);
color:white;
}


.card
{

border-radius: 1.25rem;
-webkit-box-shadow: 10px 10px 45px -12px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 45px -12px rgba(0,0,0,0.75);
box-shadow: 10px 10px 45px -12px rgba(0,0,0,0.75);

}


.card-header:first-child
{
      border-radius: 1.25rem 1.25rem 0 0;
}
 


 @media screen and (max-width: 730px)
{
  #head{
          font-size:2rem;
          margin-bottom:5rem;
       }

 } 

 @media screen and (max-width: 430px) 
 {
  #head{
          font-size:1.6rem;
          margin-bottom:2rem;
        }
 }

  @media screen and (max-width: 352px) 
{

  #head{
          font-size:1.3rem;
          margin-bottom:0rem;
        }
}

body 
{
overflow: hidden; 
/* background: #41295A;  
background: -webkit-linear-gradient(to right, #203A43, #0F2027);  
background: linear-gradient(to right, #41295A, #2F0743);  */

/* background: #0f0c29;  fallback for old browsers */
/* background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);  Chrome 10-25, Safari 5.1-6 */
/* background: linear-gradient(to right, #24243e, #302b63, #0f0c29); W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


background: #41295a;  
background: linear-gradient(to right,#035aa6 , #120136);

}

/* PARTICLE */
Canvas {
  display: block;
  /* vertical-align : bottom; */
}

#particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
  /* background: #00356B; */
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


<div id="particles-js"></div>

<nav class="navbar navbar-light sticky-top justify-content-center" style="margin-top:15px;margin-right:20px;" id="nav1">
  
            <img onclick="loaddata()" src="Assets/logos/NSS_LOGO.png" width="142rem" height="142rem" class="m" alt="">
            &nbsp;&nbsp;
            <div class="navbar-nav">
              <div class="nav-item">
                      <h2 class="cover-heading" id="head" style="color:#ffff; font-family : Lucida Bright;">College Registration</h1>
                </div>
            </div>
</nav>

<br>
<br>

<?php

ob_start();

include 'connect.php';
//$conn = db_connection();
$query_select_aided = "SELECT * FROM `college_info` WHERE `status`='GOVT. AIDED' ORDER BY `college_name` ASC";
$res_aided = mysqli_query($conn, $query_select_aided);
//print_r($res_aided);

$query_select_unaided = "SELECT * FROM `college_info` WHERE `status`='SELFFINANCE' ORDER BY `college_name` ASC";
$res_unaided = mysqli_query($conn, $query_select_unaided);
//  print_r($res_unaided);

?>
<div class="row">

<div class="col-sm-2">

</div>

<div class="col-sm-8">
<!-- card starts -->
<div class="card" >  


  <div class="card-header text-center" style="background-image: linear-gradient(to right, #24243e, #302b63, #0f0c29 ); color: white;" >


   <h5><b> PLEASE REGISTER YOUR COLLEGE HERE</b></h5>
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">     
    <form class="needs-validation" method="post" action="" novalidate>  
                            <div class="input-group mb-3" class="drop">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="nsspo1">
                                        GRANT</label>
                                    </div>
                                    

                                    <select class="custom-select" id="funding" required> 
                                            <option selected value="">Choose</option>
                                            <option value="Aided"> Government Aided</option>
                                            <option value="Unaided"> SELF FINANCE</option>
                                    </select>
                            </div>

                            <div class="input-group mb-3" id="lab" style="display:none" >
                                        <div class="input-group-prepend">
                                            <label class="input-group-text">
                                            College Name</label>
                                        </div>
                                        <select class="custom-select" id="aided" style="display:none" name='funding' required>
                                                <option selected value="">Choose your govt aided college</option>
                                                <?php

                                                while ($row = mysqli_fetch_assoc($res_aided)) {
                                                ?>
                                                    <option value="<?php echo $row['college_name']."#@#".$row['college_code']."#@#".$row['college_email']; ?>"><?php echo $row['college_name'] ?></option>
                                                <?php
                                                }
                                                ?>
                                        </select>

                                        <select id="unaided" class="custom-select" required style="display:none" name='funding1'>
                                        <option selected value="">Choose your self finance college</option>
                                        <?php

                                        while ($row1 = mysqli_fetch_assoc($res_unaided)) {
                                        ?>
                                            <option value="<?php echo $row1['college_name']."#@#".$row1['college_code']."#@#".$row1['college_email']; ?>"><?php echo $row1['college_name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                   
                            </div>
                          

                            <div class="form-group ">
                                        <input type="" type="text" class="form-control"  name="principal_name" placeholder=" " required id="name">
                                        <label for="name" >Principal Name</label>
                            </div>

                            

                            <div class="form-group ">

                                            <input type="text"  class="form-control" name="principal_contact"  placeholder=" " onkeypress="return isNumberKey(event)" pattern="[1-9]{1}[0-9]{9}" required id="con" >
                                            <label for="con" >Principal Contact number</label>
                            </div>
    
    
<center>  <input type="submit" value="SUBMIT" name="submit" class="btn"> </center>
</form>
</p>
</div>
<!-- card body ends -->
</div>
<!-- card ends -->

</div>
<!-- col ends -->



<div class="col-sm-2">

</div>

</div>
<!-- row ends -->


    <?php
    if (@$_POST['submit']) {
        $college = '';
        if (isset($_POST['funding'])) {
            $college = $_POST['funding'];
            // echo $status;
        } else {
            $college = $_POST['funding1'];
            // echo $status;
        }
        $arra = explode("#@#",$college);
        //print_r($arra);
        $college_name=$arra[0];
        $college_code=$arra[1];
        $principal_email=$arra[2];
        $principal_name=$_POST['principal_name'];
        //$principal_email=$_POST['principal_email'];
        $principal_contact=$_POST['principal_contact'];
        $query_check="SELECT * FROM `principal_login_details` WHERE `college_code` = '$college_code'";
        $res_check=mysqli_query($conn,$query_check);
        if(mysqli_num_rows($res_check)>0)
        {
            echo "<script>alert('Principal Already Registered')</script>";
            header('refresh:0,url=register');
        }
        else
        {
            //generation principal id
            $principal_user_id="PRIN".$college_code;
            // generating password
            $randstring="1234567890QWERTYUPASDFGHJKLZXCVBNMqwertyuipasdfghjkzxcvbnm1234567890qazwsxedcrfvtgbyhnTGBRFVEDCWSXQAZ";
            $shuffled=str_shuffle($randstring);
            $password=substr($shuffled,5,6);
            $hashpassword=md5($password);

            //inserting data into principal_login_details
            $query_insert="INSERT INTO `principal_login_details`(`college_name`, `college_code`, `principal_user_id`, `password`, `principal_name`, `principal_email`, `principal_contact`) VALUES ('$college_name','$college_code','$principal_user_id','$hashpassword','$principal_name','$principal_email','$principal_contact')";
        $res = mysqli_query($conn, $query_insert);
        if ($res) 
        {
          echo "<script>alert('Principal Registered Successfully')</script>";
          //PHP MAILER
          include 'mailsetup.php';
          $message = 'Registation succesfull. <br> Please find your login details below. <br> Username: - ' . $principal_user_id . '<br>' . 'Password: - ' . $password;
          $message = $message . '<br> To login <a href="www.betanss.mu.ac.in/login">Click Here</a>';
          $mail->addAddress($principal_email, $college_name);     // Add a recipient
          $mail->Subject = 'Your login details of NSS';
          $mail->Body = $message;

          // $subject="Your login details of NSS";
          // $headers="Content-type: text/html". "\r\n";
          // $headers .= "From: nss@nssmu.in" . "\r\n";
          if ($mail->send()) {
            echo "<script>alert('Registration Successful. Check mail for login details.')</script>";
            header("refresh: 0, url = login");
          }
          else
          {
            echo $mail->ErrorInfo;
          }
        } 
        else 
        {
          echo "<script>alert('Registration Unsuccessful. Try Again Later')</script>";
        }
      }
    }

    ?>

    <!-- Displaying College names -->
    <script>
        document.getElementById('funding').onclick = function() {
            $var = document.getElementById('funding').value;
            console.log($var);
            if ($var == "Aided") {
                document.getElementById('lab').style.display = "flex";
                document.getElementById('aided').style.display = "flex";
                document.getElementById('unaided').style.display = "none";
                document.getElementById("unaided").disabled = true;
                document.getElementById("aided").disabled = false;
            }
            if ($var == "Unaided") {
                document.getElementById('lab').style.display = "flex";
                document.getElementById('aided').style.display = "none";
                document.getElementById('unaided').style.display = "flex";
                document.getElementById("unaided").disabled = false;
                document.getElementById("aided").disabled = true;
            }
        };

        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
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



    <script>

      </script>
<script src='https://cldup.com/S6Ptkwu_qA.js'></script>
<script id="rendered-js">
// ParticlesJS Config.
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 120,
      "density": {
        "enable": true,
        "value_area": 700 } },


    "color": {
      "value": "#000000" },

    "shape": {
      "type": "triangle",
      "stroke": {
        "width": 0,
        "color": "#000000" },

      "polygon": {
        "nb_sides": 5 } },


    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false } },


    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false } },


    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1.5 },

    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200 } } },



  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab" },

      "onclick": {
        "enable": true,
        "mode": "push" },

      "resize": true },

    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1 } },


      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3 },

      "repulse": {
        "distance": 200,
        "duration": 0.4 },

      "push": {
        "particles_nb": 4 },

      "remove": {
        "particles_nb": 2 } } },



  "retina_detect": true });

    </script> 
     <script src="Assets/bootstrap-4.5.0-dist/js/loader.js"></script>
</body>

</html>