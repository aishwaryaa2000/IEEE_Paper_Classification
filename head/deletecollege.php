<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
    <title>Delete College</title>
      <!-- Bootstrap core CSS -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/style.min.css" rel="stylesheet">

  <script src="../Assets/bootstrap-4.5.0-dist/js/onlynum.js"></script>

  <style>
    .navbar{
    -webkit-box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
-moz-box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
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
        background-image: linear-gradient(to right,#85BBED,#636CB4,#5161CE);
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
background: -webkit-linear-gradient(to right,#686FAA,#5161CE); 
background: linear-gradient(to right,#686FAA,#5161CE); 

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

@media (min-width: 992px)
{
.container, .container-lg, .container-md, .container-sm {
    max-width: 1300px;
}
}

 .mynav2{
  border-radius: 0.5rem;
    margin-top:1.5rem;
    margin-bottom: 2.5rem;
    -webkit-box-shadow: 0px 10px 41px 0px rgba(230,230,230,0.69);
-moz-box-shadow: 0px 10px 41px 0px rgba(230,230,230,0.69);
box-shadow: 0px 10px 41px 0px rgba(230,230,230,0.69);

    background: #5161CE;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #8100FF,#5161CE, #3DB0D8);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #8100FF,#5161CE, #3DB0D8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

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

</style>

</head>
<body>



<nav class="navbar navbar-light bg-white sticky-top justify-content-between ">  
  <img src="../Assets/logos/NSS_LOGO.png" width="80" height="80" class="m" alt="">
  <!-- &nbsp;&nbsp; -->
  <ul class="navbar-nav">
        <li class="nav-item">
            <h4>DELETE COLLEGE</h4>
        </li>
   </ul>
   <a href="index"  class="btn btn-primary" style="background-color:#5950D7; border-radius: 12px; width:5rem;">Home</a>
</nav>


<div class="container jumbotron-fluid">   
    <form method="POST">

    <center> <div class="form-group " style="width:55%;margin-top:5rem;">
        <input type="text" name="college_code" id="college_code" class="form-control"  placeholder=" " required>
        <label for="college_code"><b>Enter the College Code</b></label>
    </div></center>
   <center> <input type="submit" value="Submit" name="Submit" style="width:25%;" onclick="return confirm('ARE YOU SURE YOU WANT TO DELETE THE COLLEGE');" class="mybtn" style="border-radius: 24px;"></center>
   
   </form>

    
</div>
    <?php
    include '../connect.php';
    if(@isset($_POST['Submit']))
    {
        $college_code=$_POST['college_code'];
        $query_principal="UPDATE `principal_login_details` SET `password`=NULL WHERE `college_code`='$college_code'";
        $query_po="UPDATE `po_login_details` SET `po_password`=NULL WHERE `college_code`='$college_code'";
        $query_vol="UPDATE `volunteer_user_id_po` SET `password`=NULL WHERE `college_code`='$college_code'";
        $query_vol_details="UPDATE `vol_personal_details` SET `password`=NULL WHERE `college_code`='$college_code'";

        $res=mysqli_query($conn,$query_principal);
        $res1=mysqli_query($conn,$query_po);
        $res2=mysqli_query($conn,$query_vol);
        $res3=mysqli_query($conn,$query_vol_details);
        if($res==1 and $res1==1 and $res2==1 and $res3==1)
        {
            echo "<script>alert('College Removed')</script>";
        } 
        echo mysqli_error($conn);

    }
    ?>
</body>
</html>