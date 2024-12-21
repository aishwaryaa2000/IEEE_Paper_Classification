<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Program Officer</title>
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
        background-image: url(../Assets/SVG/w_welcome_poB.svg),url(../Assets/SVG/w_welcome_poT.svg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .my_sub_card1{
      background-image: url(../Assets/SVG/w_po1.svg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .my_sub_card2{
      background-image: url(../Assets/SVG/w_po2.svg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .my_sub_card3{
      background-image: url(../Assets/SVG/w_po3.svg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .my_sub_card4{
      background-image: url(../Assets/SVG/w_po4.svg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .my_sub_card5{
      background-image: url(../Assets/SVG/w_po5.svg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .my_sub_card6{
      background-image: url(../Assets/SVG/w_po6.svg);
        background-repeat: no-repeat;
        background-size: cover;
    }


    .not-allowed, .not-allowed:focus{
      pointer-events: auto! important;
     cursor: not-allowed! important;
     box-shadow: none;
    }

    .btn_dis:hover {
  background-color: #777;
  opacity: 0.60; 
  cursor: not-allowed;
}
    .mybtn{
      display: block;
      width: 50%;
      height: 50px;
      border-radius: 25px;
      outline: none;
      border: none;
      text-align: center;
      background-image: linear-gradient(to right, #91EAE4, #7F7FD5, #86A8E7);
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
#my
{
  text-decoration:none;
  font-weight: 700;
}
#my:hover
{
  background-color: #f4f4f4;
}
@media screen and(max-width:364px){
  #my
  {
    font-size: 0.1rem;
  }
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
  <?php 
  session_start();
  if(!isset($_SESSION['po_user_id']))
  {
      header('location: ../logout');
  }
 
 $po_user_id=$_SESSION['po_user_id'];
 $po_nm=$_SESSION['po_nm'];
  include '../conn.php';
  $conn=db_connection();
  $_SESSION['college_name'];
  
 ?>

  
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">
     <img src="../Assets/logos/NSS_LOGO.png" onclick="loaddata()" width="65" height="65" class="m" alt="">  
  </h5>
  <!-- <h1 class="my-0 mr-md-auto font-weight-normal">
     IEEE-Institute of Electrical and Electronics Engineers 
  </h1> -->
  <nav class=" my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark col-xs-12" id="my" href="index">HOME</a>    
  </nav>
  <a class="btn btn-info" style="background-color: #4A529D" href="../logout">LOGOUT</a>
</div>
<br>
<br>
<br>
    <div class="container">
    <!--Welcome card-->
   
    <!--Welcome card ends--> 
    
    
      <div class="row mb-2">
        <!--Registration card-->
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 myshadow h-md-250 position-relative my_sub_card1">
            <div class="col p-4 d-flex flex-column position-static">
              <!-- <strong class="d-inline-block mb-2 text-primary">NSS</strong> -->
            
              <h3 class="mb-0">Contact Details Of Parent/Guardian</h3>
              <br>
              <!-- <div class="mb-1 text-muted">Nov 12</div> -->
              <p class="card-text mb-auto">View the contact details of the Parent/Guardian of all the students of the respective colleges</p>
              <div class="d-flex justify-content-center">
              <a href="guardiandetails" class="mybtn btn btn-primary" role="button">Click here</a>
             
                       
          </div>
        </div>
        </div>
        <!--Registration card ends-->

        <!--Enrollment card-->
        
        <!--Enrollment card ends-->

        <!--Enrollment List card-->
        
        
<!-- Modal -->

</div>


<div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 myshadow h-md-250 position-relative my_sub_card6">
            <div class="col p-4 d-flex flex-column position-static">
              <!-- <strong class="d-inline-block mb-2 text-success">Design</strong> -->
              <h3 class="mb-0">Volunteer Contact and Address Details</h3>
              <br>
              
              <!-- <div class="mb-1 text-muted">Nov 12</div> -->
              <p class="card-text mb-auto">View the contact details and address details of all the sudents of the respective colleges.</p>              
              <!-- <a class="btn btn-primary" href="#" role="button">Click Here</a> -->
              <div class="d-flex justify-content-center">
                <a href="volunteercontact" class="mybtn btn btn-primary" role="button">Click here</a>
              </div>         
            </div>
           
          </div>
        </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
  
  <script src="../Assets/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>

 
    <script>
      function loggingOut(){
        window.location.href="../logout";
      }

      
      
    </script>
    <script src="../Assets/bootstrap-4.5.0-dist/js/loader.js"></script>
</body>


</html>
