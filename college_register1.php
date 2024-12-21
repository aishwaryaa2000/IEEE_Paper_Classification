<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register college</title>
      <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->
    <!-- Bootstrap core CSS -->
    <link href="Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="Assets/bootstrap-4.5.0-dist/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="Assets/bootstrap-4.5.0-dist/css/style.min.css" rel="stylesheet">

     <script src="Assets/bootstrap-4.5.0-dist/js/onlynum.js"></script>

<style>
.bd-placeholder-img
 {
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

.form-group > input,
.form-group > label {
  height: 2.8rem;
  padding: .75rem;
}

.form-group > label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0; /* Override default `<label>` margin */
  line-height: 1.5;
  color: #1A2226;
  pointer-events: none;
  cursor: text; /* Match the input under the label */
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

.form-group input:not(:placeholder-shown) ~ label {
  padding-top: .25rem;
  padding-bottom: .25rem;
  font-size: 12px;
  color: #777;
}

/* Fallback for Edge
-------------------------------------------------- */
@supports (-ms-ime-align: auto) {
  .form-group > label {
    display: none;
  }
  .form-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */
@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .form-group > label {
    display: none;
  }
  .form-group input:-ms-input-placeholder {
    color: #777;
  }
}
    </style>
    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
    
  <style>


  .form-control:focus {
    background : #1A2226;
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
   background : #1A2226;
  border-top:0px;
  border-left:0px;
  border-right:0px;
  /* font-color :white; */
}

.custom-select{
  border: 1px solid #ced4da;
  border-top:0px;
  
  border-right:0px;

}


.custom-select:focus {
  /* border-color: inherit; */
  -webkit-box-shadow: none;
  box-shadow: none;
  border-top:0px solid !important;
  border-right:0px solid !important;
  border-left:1px solid #ced4da !important;
  transition: 0.4s;
  border :3px solid #007bff;
}


/* button */
.btn{
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
      -webkit-box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
    }
/* button over */

/* card shadow */
.card
{background-color: #1A2226;
  opacity: 0.65;

  margin-top:180px;
/* -webkit-box-shadow: 10px 10px 5px 0px rgba(107,57,115,0.43);
-moz-box-shadow: 10px 10px 5px 0px rgba(107,57,115,0.43);
box-shadow: 10px 10px 5px 0px rgba(107,57,115,0.43); */

-webkit-box-shadow: 10px 10px 5px 0px rgba(81,37,89,0.58);
-moz-box-shadow: 10px 10px 5px 0px rgba(81,37,89,0.58);
box-shadow: 10px 10px 5px 0px rgba(81,37,89,0.58);


/* webkit-box-shadow: 10px 10px 5px 0px rgba(81,37,89,0.64);
-moz-box-shadow: 10px 10px 5px 0px rgba(81,37,89,0.64);
box-shadow: 10px 10px 5px 0px rgba(81,37,89,0.64); */

}

/* 
Background */


.animation-area{
/* #614385, #516395 */

background: #36D1DC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #5B86E5, #36D1DC); 





   width: 100%;
   height: 100vh;
}

.box-area{
   position: absolute;
   top:0;
   left:0;
   width:100%;
   height:100%;
   overflow:hidden;
}

.box-area li{
   position: absolute;
   display: block;
   list-style:none;
   width: 25px;
   height: 25px;
   background: rgba(255, 255, 355, 0.2);
   animation:animate 20s linear infinite;
   bottom:-150px;
}
.box-area li:nth-child(1){
   left:86%;
   width:80px;
   height:80px;
   animation-delay:0s;
}
.box-area li:nth-child(2){
   left:12%;
   width:30px;
   height:30px;
   animation-delay:1.5s;
   animation-duration:10s;
}

.box-area li:nth-child(3){
   left:70%;
   width:150px;
   height:150px;
   animation-delay:0s;
   animation-duration:10s;
}

.box-area li:nth-child(4){
   left:42%;
   width:150px;
   height:150px;
   animation-delay:0s;
   animation-duration:15s;
}

.box-area li:nth-child(5){
   left:65%;
   width:40px;
   height:40px;
   animation-delay:0s;
}
.box-area li:nth-child(6){
   left:15%;
   width:110px;
   height:110px;
   animation-delay:3.5s;
}
 @keyframes animate {
     0%{
         transform: translateY(0) rotate(0deg);
         opacity: 1;
     }
     100%{
         transform: translateY(-800px) rotate(360deg);
         opacity: 0;
     }
     
 }

 @media screen and (max-width: 730px) {
  #head{
          font-size:2rem;
          margin-bottom:"5rem;"
  }

 } 
 @media screen and (max-width: 430px) {
  #head{
          font-size:1.6rem;
          margin-bottom:"5rem;"
  }
 }
  @media screen and (max-width: 352px) {
  #head{
          font-size:1.3rem;
          margin-bottom:"5rem;"
  }



}

.card-header:first-child{
      border-radius: 1.25rem 1.25rem 0 0;
    }

    .card,.card-body{
      border-radius:1.25rem;
    }


    .card-header{   
    color:#fff;
    background: #e53935;  
background: -webkit-linear-gradient(to right, #2c3e50, #2980b9); 
background: linear-gradient(to right, #2c3e50, #2980b9); }


/* 
Background */


 /* .form-control.is-valid, .was-validated .form-control:valid {

background-image: none;
}

.custom-select.is-valid, .was-validated .custom-select:valid {

background: none;
} */



</style>


</head>


<body>

<!-- background -->
<div class="animation-area">
        <ul class="box-area">
            <li></li> <li></li><li></li><li></li><li></li><li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li><li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            
           
<!-- background -->


<!-- 
<div class="d-flex justify-content-center" style="margin: 3rem">
            <div style="display: block;" id="landing">
            <div class="row">
                <center>
                    &nbsp;
<div class="col-sm-12">
<img src="Assets/logos/NSS_LOGO.png" width="110" height="105" class="m" alt="" srcset="">
</div>
<div class="col-sm-15"> 
                    <h1 class="cover-heading" style="color: #fff;">College Registration</h1>
                    </div>
                </center>
                </div>
            </div>
        </div> -->
<nav class="navbar navbar-light sticky-top justify-content-center" style="margin-top:15px;margin-right:20px;" id="nav1">
  
  <img src="Assets/logos/NSS_LOGO.png" width="100" height="100" class="m" alt="">
  &nbsp;&nbsp;
  <div class="navbar-nav">
    <div class="nav-item">
    <h2 class="cover-heading" id="head" style="color: black;font-family: Lucida Bright;">College Registration</h2>
                    </div>
    </li>
   </ul>

</nav>


<?php

ob_start();

include 'connect.php';
//$conn = db_connection();
$query_select_aided = "SELECT * FROM `college_info` WHERE `status`='GOVT. AIDED'";
$res_aided = mysqli_query($conn, $query_select_aided);
//print_r($res_aided);

$query_select_unaided = "SELECT * FROM `college_info` WHERE `status`='SELF-FINANCE'";
$res_unaided = mysqli_query($conn, $query_select_unaided);
//  print_r($res_unaided);

?>





<div class="row">

<div class="col-sm-2">
</div>

<div class="col-sm-8">
<!-- card starts -->
<div class="card " >  
  <div class="card-header text-center" 

>

  <h5 style="color:white;font-size:1.rem;"><b> PLEASE REGISTER YOUR COLLEGE HERE !</b></h5> 

  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">     
    <form class="needs-validation" method="post" action="" novalidate>  
                            <!-- <div class="input-group mb-3" class="drop">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="nsspo1">
                                        AID TYPE</label>
                                    </div>
                                    

                                    <select class="custom-select" id="funding" required>
                                            <option disable selected></option>
                                            <option value="Aided">Aided</option>
                                            <option value="Unaided"> Unaided</option>
                                    </select>
                            </div>

                            <div class="input-group mb-3" id="lab" style="display:none" >
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" >
                                            College Name</label>
                                        </div>
                                        <select class="custom-select" id="aided" style="display:none" name='funding' required>
                                                <option disable selected></option >
                                                <?php

                                                while ($row = mysqli_fetch_assoc($res_aided)) {
                                                ?>
                                                    <option value="<?php echo $row['college_name']."#@#".$row['college_code']; ?>"><?php echo $row['college_name'] ?></option>
                                                <?php
                                                }
                                                ?>
                                        </select>

                                        <select id="unaided" class="custom-select" style="display:none" name='funding1' required>
                                        <option  disable selected></option>
                                        <?php

                                        while ($row1 = mysqli_fetch_assoc($res_unaided)) {
                                        ?>
                                            <option value="<?php echo $row1['college_name']."#@#".$row1['college_code']; ?>"><?php echo $row1['college_name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                   
                            </div> -->
                          
                            
                            <div class="form-group ">
                                        <input type="" type="text" style="color:white;" class="form-control" id="name"  name="principal_name" placeholder=" " required>
                                        <label for="name" style="color:white; font-size:1.1rem;"><b>Principal Name</b></label>
                            </div>

                            <div class="form-group ">
                                        <input type="" type="text" style="color:white;" class="form-control" id="name"  name="principal_name" placeholder=" " required>
                                        <label for="name" style="color:white; font-size:1.1rem;" ><b>Principal email</b></label>
                            </div>

                            <!-- <div class="form-group " data-toggle="tooltip" data-placement="right" title="Password will be sent to this email ID">
                                            <input type="" type="text" class="form-control" id="mail" name="principal_email" placeholder=" " required>
                                            <label for="mail" >Principal Email ID</label>
                            </div> -->

                            <div class="form-group ">
                                            <input type="" type="text" style="color:white;" class="form-control" id="con" name="principal_contact" placeholder=" " required>
                                            
                                            <label for="con" style="color:white; font-size:1.1rem;" ><b>Principal Contact number</b></label>
                            </div>
    
    
<center>  <input type="submit" value="SUBMIT" class="btn"> </center>
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


        </ul>
    </div>
<!-- background ends -->
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
        $college_name=$arra[0];
        $college_code=$arra[1];

        $principal_name=$_POST['principal_name'];
        $principal_email=$_POST['principal_email'];
        $principal_contact=$_POST['principal_contact'];
        $query_check="SELECT * FROM `principal_login_details` WHERE `college_code` = '$college_code'";
        $res_check=mysqli_query($conn,$query_check);
        if(mysqli_num_rows($res_check)>0)
        {
            echo "<script>alert('Principal Already Registered')</script>";
            header('refresh:1,url=index');
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
            $res=mysqli_query($conn,$query_insert);
            if($res)
            {
                echo "<script>alert('Principal Registered Successfully')</script>";
                $subject="Your login details of NSS";
                $message='Registation succesful. <br> Please find your login details below <br> Username: - '.$principal_user_id.'<br>'.'Password: - '.$password;
                $headers="Content-type: text/html";
                if(mail($principal_email,$subject,$message,$headers))
                {
                    echo "<script>alert('Registration Successful. Check mail for login details.')</script>";
                    header("refresh: 1; url = index");
                }
            }
            else
            {
                echo "<script>alert('Registration Unsuccessfully Try Again Later')</script>";
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

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script id="rendered-js">
$("#login-button").click(function (event) {
  event.preventDefault();

  $('form').fadeOut(500);
  $('.wrapper').addClass('form-success');
});
//# sourceURL=pen.js
    </script>
</body>

</html>