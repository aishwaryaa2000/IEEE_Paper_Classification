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
    $principal_user_id=$_SESSION['principal_user_id'];
    $query_select_principal="SELECT * FROM `principal_login_details` WHERE `principal_user_id` = '$principal_user_id'";
    $res_select=mysqli_query($conn,$query_select_principal);
    $row_details=mysqli_fetch_assoc($res_select);
    ?>
 <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link href="../Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../Assets/bootstrap-4.5.0-dist/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../Assets/bootstrap-4.5.0-dist/css/style.min.css" rel="stylesheet">
    <link href="../Assets/bootstrap-4.5.0-dist/css/loader.css" rel="stylesheet">
    <script type="text/javascript" src="../Assets/bootstrap-4.5.0-dist/js/vanilla.js/js/v7.js"></script>
    <script src="../Assets/bootstrap-4.5.0-dist/js/onlynum.js"></script>

    <style>

#my{
  text-decoration:none;
  font-weight: 700;
}
#my:hover{
  background-color: #f4f4f4;
}
@media screen and(max-width:364px){
  #my{
    font-size: 0.1rem;
  }
}



button.mybtn {
      display: block;
      width: 30%;
      height: 50px;
      border-radius: 25px;
      outline: none;
      border: none;
      text-align: center;
      background-image: linear-gradient(to right, #2c3e50, #2980b9);
      background-size: 200%;
      font-size: 1.2rem;
      font-weight: bold;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      text-transform: uppercase;
      margin: 1rem 1rem;
      cursor: pointer;
      transition: .5s;
    }

    button.mybtn:hover {
      background-position: right;
      -webkit-box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
    }

    button.myResetbtn {
      display: block;
      width: 30%;
      height: 50px;
      background: none;
      border: 0.2rem solid #86A8E7;
      border-radius: 1.5rem;
      outline: none;
      font-size: 1.2rem;
      font-weight: bold;
      font-family: 'Poppins', sans-serif;
      color: #86A8E7;
      text-transform: uppercase;
      margin: 1rem 1rem;
      cursor: pointer;
    }

    button.myResetbtn:hover {
      transform: scale(1.008);
    }

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
      height: 3.5rem;
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
      font-size: 15px;
      color: #77a1d3;
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
  </style>
  <!-- Custom styles for this template -->
  <link href="floating-labels.css" rel="stylesheet">

  <style>
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



    @media screen and (max-width: 570px) {
      
      .card {
        width: 100rem;
        margin-left: 2rem;
        margin-right: 2rem;
      }

      button.mybtn {
        display: block;
        width: 50%;
        height: 40px;
        border-radius: 20px;
        outline: none;
        border: none;
        text-align: center;
        background-image: linear-gradient(to right, #2c3e50, #2980b9);
        background-size: 200%;
        font-size: 0.8rem;
        /* font-weight: bold; */
        color: #fff;
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
        margin: 1rem 1rem;
        cursor: pointer;
        transition: .5s;
      }

      button.myResetbtn {
        display: block;
        width: 30%;
        height: 30px;
        background: none;
        border: 0.2rem solid #86A8E7;
        border-radius: 1.5rem;
        outline: none;
        font-size: 0.8rem;
        /* font-weight: bold; */
        font-family: 'Poppins', sans-serif;
        color: #86A8E7;
        text-transform: uppercase;
        margin: 1rem 1rem;
        cursor: pointer;
      }
    }

    .mybtn {
      display: block;
      width: 50%;
      height: 50px;
      border-radius: 25px;
      outline: none;
      border: none;
      text-align: center;
      background-image: linear-gradient(to right, #516395, #614385);
      background-size: 200%;
      font-size: 1.2rem;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      text-transform: uppercase;
      margin: 1rem 0;
      cursor: pointer;
      transition: .5s;
    }

    .mybtn:hover {
      background-position: right;
      -webkit-box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
    }

    .myleft_card {
      /* background-color:#C6C9E0; */

      /* background-color:rgba(166,177,225,0.689); */

      background: #614385; 
background: -webkit-linear-gradient(to right, #2c3e50, #2980b9); 
background: linear-gradient(to right, #2c3e50, #2980b9); 

      /* background: rgb(76, 82, 143); */
      /* background: linear-gradient(-150deg, rgba(76, 82, 143, 1) 20%, rgba(100, 100, 206, 1) 42%, rgba(120, 58, 180, 0.9419117988992471) 69%, rgba(72, 78, 130, 1) 91%); */
    }

    .myleft_card .card-body {
      /* margin-left: 2rem;; */
      margin-top:3rem;
      background-image: url(../Assets/SVG/prin_update_profile.svg);
      background-repeat: no-repeat;
      background-size:57vh
    }

    .card-decor {
      margin-bottom: 2rem;
      -webkit-box-shadow: 7px 10px 18px 8px rgba(219, 219, 219, 1);
      -moz-box-shadow: 7px 10px 18px 8px rgba(219, 219, 219, 1);
      box-shadow: 7px 10px 18px 8px rgba(219, 219, 219, 1);
    }

    .myfile {
      padding: 0.5rem 1rem;
      border: 3px solid #32be8f;
      border-radius: 10rem;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-weight: bold;
      color: #32be8f;
    }

    .myfile:hover {
      transform: scale(1.04);
      color: #32be8f;
    }

    .myfile span {
      font-weight: normal;
    }

    /* .form-group.row:focus {
 
        -webkit-box-shadow: none;
        box-shadow: none;
        border-top:0px solid !important;
        border-right:0px solid !important;
        border-left:0px solid !important;
        transition: 0.4s;
        border :3px solid #007bff;
      }*/

    .form-control {
      border: 1px solid #ced4da;
      border-top: 0px;
      border-left: 0px;
      border-right: 0px;
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
  

      <!-- Image and text -->
      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">
     <img onclick="loaddata()" src="../Assets/logos/NSS_LOGO.png" width="60" height="60" class="m" alt="">  
  </h5>
  
  <nav class=" my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" id="my"  href="index"><b>HOME</b></a>
    &nbsp;
    <a class="p-2 text-dark" id="my" href="updatepass"><b>CHANGE PASSWORD</b></a>
    &nbsp;&nbsp;
  </nav>
  <a class="btn btn-info" style="background-color: #657D97" href="../logout">LOGOUT</a>
</div>


<br>
<br>
<div class="container" style="margin-top: 2rem;">

    <div class="row card-decor" style="height:auto;">
      <div class="card text-center col-xl-5 col-md-5 col-sm-12 myleft_card" style="border-radius:0rem;">

        <div class="card-body">

          <div class="row">
            <div class="col-xl-12 col-sm-12 col-md-12">
              <div class="mt-5 pt-5">
                <h3 class="card-title text-white">.</h3>
                <br>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card col-xl-7 col-md-7 col-sm-12 myright_card" style="border-radius:0rem;">
        <div class="card-body">
          <h4 class="card-title text-muted"><b>UPDATE YOUR PROFILE !</b></h4>
          <form class="needs-validation" method="POST" action="" novalidate>
            <br>

            <div class="container">
              <div class="form-group ">
                                      <input type="text" name="principal_name" pattern="[A-Za-z\s]+" value="<?php echo $row_details['principal_name'] ?>" class="form-control" placeholder=" " id="name" required>
                                        <label for="name" >Name</label>
                            </div>
                            <br>
                            <div class="form-group ">
                                            <input type="email" pattern= "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="principal_email" value="<?php echo $row_details['principal_email'] ?>" class="form-control" id="emailid" placeholder=" " required>
                                            <label for="emailid" >Email ID</label>
                            </div>
                            <br>
                            <div class="form-group ">
                                            <!-- <input type="number" onkeyup="check_if_text()" name="contact" class="form-control" id="con" placeholder="Contact number" required> -->
                                            
                                            <input type="text" onkeypress="return isNumberKey(event)" name="principal_contact" value="<?php echo $row_details['principal_contact'] ?>" maxlength="10" minlength="10" class="form-control" id="con" placeholder=" " required>
                                            <label for="con" >Contact number</label>
                            </div>
                            <br>
                  </div>

               


            <!-- <p align="center"> -->
            <div class="d-flex justify-content-center">
              <button type="submit" name="update" value="UPDATE" class="mybtn" style="border-radius: 24px;">UPDATE</button>
            </div>

        </div>

        </form>
      </div>
    </div>
  </div>
  </div>


  


    <?php
    if(@isset($_POST['update']))
    {
        $principal_name=$_POST['principal_name'];
        $principal_email=$_POST['principal_email'];
        $principal_contact=$_POST['principal_contact'];

        $query_update="UPDATE `principal_login_details` SET `principal_name`='$principal_name', `principal_email`='$principal_email', `principal_contact`='$principal_contact' WHERE `principal_user_id` = '$principal_user_id'";
        $res_update=mysqli_query($conn,$query_update);
        if($res_update)
        {
            echo "<script>alert('UPDATE SUCCESSFUL !')</script>";
            header('refresh:0,url=updateprofile');
        }
        else
        {
            echo "<script>alert('UPDATE UNSUCCESSFUL. TRY AGAIN')</script>";
        }
    }
    
    ?>

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