<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
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
    .myCard{
        /* background-image: url(../Assets/SVG/wave2.svg),url(../Assets/SVG/wave4.svg); */
        /*orange-#ff5500* faint-red-#d92027*/
        background-image:url(../Assets/SVG/w_welcome_prinB.svg),url(../Assets/SVG/w_welcome_prinT.svg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .my_sub_card1{
      background-image:url(../Assets/SVG/w_prin1.svg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .my_sub_card2{
    background-image:url(../Assets/SVG/w_prin2.svg);
        background-repeat: no-repeat;
        background-size: cover;
    }
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
    .mybtn{
      display: block;
      width: 50%;
      height: 50px;
      border-radius: 25px;
      outline: none;
      border: none;
      text-align: center;
      background-image: linear-gradient(to right, #142850, #46b3e6, #27496d);
      background-size: 200%;
      font-size: 1.2rem;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      text-transform: uppercase;
      margin: 1rem 0;
      cursor: pointer;
      transition: .5s;
    }
    .mybtn:hover{
      background-position: right;
      -webkit-box-shadow: 10px 10px 18px -4px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 18px -4px rgba(0,0,0,0.75);
box-shadow: 10px 10px 18px -4px rgba(0,0,0,0.75);
    }
    .myshadow{
      -webkit-box-shadow: 10px 10px 17px -2px rgba(203,203,203,1);
      -moz-box-shadow: 10px 10px 17px -2px rgba(203,203,203,1);
      box-shadow: 10px 10px 17px -2px rgba(203,203,203,1);
    }
  </style>
<body  onload="myFunction()">
<div id="loading">


<!-- <img class="loader"src="Assets/logos/nss.png" > -->
  
	<h1 id="h1">IEEE-Institute of Electrical and Electronics Engineers.</h1>
<h2 id="h2"></h2>
<h3 id="h3">Loading..</h3>
</div>
<?php
session_start();
if(!isset($_SESSION['principal_user_id']))
{
    header('location: ../logout');
}
$college_name=$_SESSION['college_name'];
$principal_nm=$_SESSION['principal_nm'];
?>
    <!-- <h1>Welcome Principal of  <?php //echo $college_name ?></h1>
<p><a href="../logout">Logout</a></p>
<p><a href="performa_1">View Performa 1</a></p> -->

<!-- Image and text -->
<!-- <nav class="navbar navbar-light bg-light sticky-top justify-content-between ">
  <img src="../Assets/logos/NSS_LOGO.png" width="80" height="80" class="m" alt="">
  
  <ul class="navbar-nav">
    <li class="nav-item">
      
       <h4>Proforma- I - Registration of college NSS Unit for year 2020 -2021</h4> 
    </li>
   </ul>
   <button type="button" class="btn btn-info" onclick="loggingOut()">Log Out</button>  
   
</nav> -->
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">
     <img onclick="loaddata()" src="../Assets/logos/NSS_LOGO.png" width="65" height="65" class="m" alt="">  
  </h5>
  <!-- <h1 class="my-0 mr-md-auto font-weight-normal">
     IEEE-Institute of Electrical and Electronics Engineers 
  </h1> -->
  <nav class=" my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark col-xs-12" id="my"  href="updateprofile">UPDATE PROFILE</a>    
    <a class="p-2 text-dark col-xs-12" id="my" href="updatepass">CHANGE PASSWORD</a>    
  </nav>
  <a class="btn btn-info" style="background-color: #4A529D" href="../logout">LOGOUT</a>
</div>

<div class="container">
    <!--Welcome card-->
    <div class="jumbotron bg-light p-4 p-md-5 rounded myCard shadow-sm" style="margin-top:2rem;">
        <div class="col-md-6 px-0">
          <h1 class="display-4  text-white" style="text-shadow: 2px 2px 2px rgba(149, 150, 150, 0.68); font-weight:400;">Welcome</h1>
          <p class="lead my-3 text-white"><strong>Hello, <?php echo $principal_nm ?> </strong></p>
          <!-- <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p> -->
        </div>
    </div>
    <!--Welcome card ends-->     
    
      <div class="row mb-2">
        <!--Registration card-->
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 myshadow h-md-250 position-relative my_sub_card1">
            <div class="col p-4 d-flex flex-column position-static">
              <!-- <strong class="d-inline-block mb-2 text-primary">NSS</strong> -->
              <h3 class="mb-0">Proforma-I Registration</h3>
              <br>
              <!-- <div class="mb-1 text-muted">Nov 12</div> -->
              <p class="card-text mb-auto">Verify proforma-I which is filled by the programme officer.</p>
              <div class="d-flex justify-content-center">
              <a href="performa_1" class="mybtn btn btn-primary" role="button">Click here</a>
            </div>            
          </div>
        </div>
        </div>
        <!--Registration card ends-->
        
        <!--Enrollment List card-->
        <?php
   include '../connect.php';
   // check if PO is already registered for the year
   $year = date('Y');
   $principal_user_id = $_SESSION['principal_user_id'];
   $college_name = $_SESSION['college_name'];
   $college_code = $_SESSION['college_code'];
   $query_check_po = "SELECT * FROM `po_login_details` WHERE `po_year`='$year' AND  `college_code`='$college_code'";
   $res_po = mysqli_query($conn, $query_check_po);

   if (mysqli_num_rows($res_po) > 0)
   {
       

   ?>
        
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 myshadow h-md-250 position-relative my_sub_card2">
            <div class="col p-4 d-flex flex-column position-static">
              <!-- <strong class="d-inline-block mb-2 text-success">Design</strong> -->
              <h3 class="mb-0">Programme officer details</h3>
              <br>
              <!-- <div class="mb-1 text-muted">Nov 12</div> -->
              <p class="card-text mb-auto">Show details of the current programme officer</p>              
              <!-- <a class="btn btn-primary" href="#" role="button">Click Here</a> -->
              <div class="d-flex justify-content-center">
                <a href="register_po" class="mybtn btn btn-primary" role="button">Click here</a>
              </div>         
            </div>
            <!-- <div class="col-auto d-none d-lg-block">
              <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            </div> -->
          </div>
        </div>
   <?php }
        else { ?>

    <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 myshadow h-md-250 position-relative my_sub_card2">
            <div class="col p-4 d-flex flex-column position-static">
              <!-- <strong class="d-inline-block mb-2 text-success">Design</strong> -->
              <h3 class="mb-0">Register Programme Officer</h3>
              <br>
              <!-- <div class="mb-1 text-muted">Nov 12</div> -->
              <p class="card-text mb-auto">Register the head of all the Programme Officers</p>              
              <!-- <a class="btn btn-primary" href="#" role="button">Click Here</a> -->
              <div class="d-flex justify-content-center">
                <a href="register_po" class="mybtn btn btn-primary" role="button">Click here</a>
              </div>         
            </div>
            <!-- <div class="col-auto d-none d-lg-block">
              <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            </div> -->
          </div>
        </div>


   <?php } ?>


        <!--Enrollment List card ends-->
        
      </div>
    <script>
      function loggingOut(){
        window.location.href="../logout";
      }
    </script>
<script src="../Assets/bootstrap-4.5.0-dist/js/loader.js"></script>
</body>
</html>