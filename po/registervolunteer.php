<?php
session_start();
if (!isset($_SESSION['po_user_id'])) {
  header('location: ../logout');
}

$po_user_id = $_SESSION['po_user_id'];
$college_code=$_SESSION['college_code'];
include '../conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>IEEE | Register&nbsp;Volunteer</title>
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

  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    button.mybtn {
      display: block;
      width: 30%;
      height: 50px;
      border-radius: 25px;
      outline: none;
      border: none;
      text-align: center;
      background-image: linear-gradient(to right, #91EAE4, #7F7FD5, #86A8E7);
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
        width: 30%;
        height: 30px;
        border-radius: 20px;
        outline: none;
        border: none;
        text-align: center;
        background-image: linear-gradient(to right, #91EAE4, #7F7FD5, #86A8E7);
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
      background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
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

      /* background: #614385; 
background: -webkit-linear-gradient(to right, #516395, #614385); 
background: linear-gradient(to right, #516395, #614385);  */

      background: rgb(76, 82, 143);
      background: linear-gradient(-150deg, rgba(76, 82, 143, 1) 20%, rgba(100, 100, 206, 1) 42%, rgba(120, 58, 180, 0.9419117988992471) 69%, rgba(72, 78, 130, 1) 91%);
    }

    .myleft_card .card-body {
      /* margin-left: 2rem;; */
      background-image: url(../Assets/SVG/blob.svg), url(../Assets/SVG/blob1.svg);
      background-repeat: no-repeat;
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
    .navbar{
    -webkit-box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
-moz-box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
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


    #preloaderr {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #E6EFF2;
  /* #E6EFF2; */
  z-index: 99;
  
}

#status {
  width: 290px;
  height: 290px;
  position: absolute;
  left: 50%;
  
  top: 50%;
 
  background-image: url(../Assets/img/load.gif);

  background-repeat: no-repeat;
  background-position: center;
  margin: -100px 0 0 -150px;
 
}  
#h1 {
	top: 12%;
	position: absolute;
	text-align: center;
	left: 0rem;
	right: 0rem;
	margin-top: 60px;
	color: #242424;
	font-weight: 600;
	font-size: 35px;
}
#h2 {
	top: 25%;
	position: absolute;
	text-align: center;
	left: 0;
	right: 0;
	margin-top: 25px;
	color: #242424;
	font-weight: 600;
	font-size: 26px;
}
  </style>
  <?php
  $conn=db_connection();
  $query="SELECT * FROM `po_login_details` WHERE `college_code`='$college_code'";
  $res=mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($res);

  ?>
</head>

<body>
<div id="preloaderr" style="display:none;">
<h1 id="h1" style="display:none;">Have Patience ! Dont Close this page.</h1>
<h2 id="h2" style="display:none;">Sending Login Credentials to Volunteers.</h2>
  <div id="status" style="display:none;">&nbsp;</div>
</div>

  <nav class="navbar navbar-light bg-light sticky-top justify-content-around">
    <img src="../Assets/logos/NSS_LOGO.png" onclick="loaddata()" width="80" height="80" class="m" alt="">

    <ul class="navbar-nav">
      <li class="nav-item">
        <h4>Registration of IEEE volunteers</h4>
      </li>
    </ul>
    <a class="btn btn-info" id="bckbtn" style="background-color: #4A529D" href="index">BACK</a>
    
     </nav>
  <div class="container" style="margin-top: 2rem;">
    <div class="alert alert-primary" style="height:3rem;">
      <p>Total  number of volunteer registered: - <?php echo $row['vol_count'] ?></p>
    </div>
    <div class="row card-decor">
      <div class="card text-center col-xl-5 col-md-5 col-sm-12 myleft_card" style="border-radius:0rem;">

        <div class="card-body">

          <div class="row">
            <div class="col-xl-12 col-sm-12 col-md-12">
              <div class="mt-5 pt-5">
                <h3 class="card-title text-white">Upload in bulk!</h3>
                <br>
                <form action="bulk" method="post" name="upload_excel" onsubmit="return greet()" enctype="multipart/form-data">
                  <div class="input-group">
                    <div class="col-12" style="border-radius:1.5rem;">

                      <input type="file" id="file" name="details" hidden required>
                      <label for="file" class="myfile" id="selector">Choose File</label>
                    </div>
                  </div>
                  <small style="display:none;" id="my_alert"><strong class="d-inline-block mb-2" style="color:#FFFF00;">Do not refresh the page while uploading the file!</strong></small>
                  <div class="d-flex justify-content-center">
                    <input type="submit" id="submit" name="register_csv" class="mybtn button-loading" data-loading-text="Loading..." value="Import">
                  </div>
                  <a href="volunteer details.csv" class="text-white font-weight-bold">Download Sample</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card col-xl-7 col-md-7 col-sm-12 myright_card" style="border-radius:0rem;">
        <div class="card-body">
          <h4 class="card-title text-muted"><b>Single Registration</b></h4>
          <form class="needs-validation" method="POST" action="regisvolback" novalidate>
            <br>

            <div class="container">
              <div class="form-group ">
                                      <input type="" type="text" class="form-control" id="fmane" name="first_name" placeholder=" " required>
                                        <label for="fname" >First Name</label>
                            </div>

                            <div class="form-group " data-toggle="tooltip" data-placement="right" title="Password will be sent to this email ID">
                                            <input type="" type="text" class="form-control" id="mname" name="middle_name" placeholder=" " required>
                                            <label for="mname" >Middle Name</label>
                            </div>

                            <div class="form-group ">
                                            <input type="" type="text" class="form-control"  id="lmane"  name="last_name" placeholder=" " required>
                                            <label for="lmane" >Last Name</label>
                            </div>
                            <div class="form-group ">
                <input type="" type="text" class="form-control" id="mom" name="mother_name" placeholder=" " required>
                <label for="mom">Mother's Name</label>
              </div>
                            <div class="form-group ">
                                            <input type="" type="email" pattern= "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" id="emailid" name="email" placeholder=" " required>
                                            <label for="emailid" >Email ID</label>
                            </div>
                            <div class="form-group ">
                                            <!-- <input type="number" onkeyup="check_if_text()" name="contact" class="form-control" id="con" placeholder="Contact number" required> -->
                                            
                                            <input type="text" name="contact" onkeypress="return isNumberKey(event)"  maxlength="10" minlength="10" class="form-control" id="con" placeholder=" " required>
                                            <label for="con" >Contact number</label>
                            </div>
                  </div>
                  <!-- <div class="form-group row">
            <label for="contact" class="col-sm-2 col-form-label "><p class="font-weight-bold">Contact Number</p></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="contact" id="contact" pattern="[0-9]{10}" title="Enter Ten digit number" value="<?php /*echo $r['Contact_no'];*/ ?>" >
                </div> -->
                <script>
                    function check_if_text(){
                        var n = document.getElementById("con")
                        if (n.value.toString().length > 10){
                          n.value = 0
                        }
                        
                    }
                </script>
<script>
function greet(){
    document.getElementById("preloaderr").style.display = "block";
    document.getElementById("status").style.display = "block";
    document.getElementById("h1").style.display = "block";
    document.getElementById("h2").style.display = "block";
    document.getElementById("bckbtn").style.display = "none";
}
 </script>

            <!-- <p align="center"> -->
            <div class="d-flex justify-content-center">
              <button type="reset" value="Reset" class="myResetbtn" style="border-radius: 24px;">Reset</button>
              <button type="submit" name="register" value="Register" class="mybtn" style="border-radius: 24px;">Submit</button>
            </div>

        </div>

        </form>
      </div>
    </div>
  </div>
  </div>
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
    //for file upload
    var loader = function(e) {
      let file = e.target.files;
      let show = "<span>Selected file:</span>" + file[0].name
      let output = document.getElementById("selector");
      let my_alert=document.getElementById("my_alert");
      output.innerHTML = show;
      output.classList.add("active");
      my_alert.style.display='block';
    };
    //add event listener for input
    let fileInput = document.getElementById("file");
    fileInput.addEventListener("change", loader);
  </script>
  <script src="../Assets/bootstrap-4.5.0-dist/js/loader.js"></script>
</body>

</html>