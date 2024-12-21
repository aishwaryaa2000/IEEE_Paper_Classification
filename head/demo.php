<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Program Officer</title>
  <link rel="shortcut icon" type="image/jpg" href="Assets/logos/nss.ico"/>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/style.min.css" rel="stylesheet">

  <script src="../Assets/bootstrap-4.5.0-dist/js/onlynum.js"></script>
  <style>   
  
    .mybtn{
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
   

  
    .card{
    position: relative;
    width: 20rem;
    height: 10rem;
    margin: 0 auto;
    background: #fff;
    box-shadow: 10px 15px 16px rgba(0,0,0, .3);
    border-radius: 15px;
  }

  .card .face{
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .card .face.face1{
    background: linear-gradient(to right, #09afff, #ffff);


    box-sizing: border-box;
    padding: 20px;
    border-radius: 15px;
  }
  
  .card .face.face1 h2{
    margin: 0;
    padding: 0;
  }
  
  .card .face.face1 .content{
    
    font-size:1rem;
    margin:0;
    padding:0 0 1em 0;
    font-weight:500;
  }
  
  .card .face.face2{
    background: linear-gradient(to right, #09afff, #ffff);
    transition: 0.5s;
    border-radius: 15px;

    background: #2c3e50;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3498db, #2c3e50, #2c3e50);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2c3e50,#3498db); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
color:#fff;
  }
  

  
  .card:hover .face.face2{
    height: 60px;
    border-radius: 0 0 15px 15px;
  }
  
  .card .face.face2:before{
    content:'';
    position: absolute;
    top:0;
    left:0;
    width: 50%;
    height: 100%;
    
    border-radius: 15px 0 0 15px;
  }
  
  .card .face.face2 h2{
    margin: 0;
    padding: 0;
    font-size: 10em;
    color: #fff;
    transition: 0.5s;
    text-shadow: 0 2px 5px rgba(0,0,0, .2);
  }
  
  .card:hover .face.face2 h2{
    font-size: 2em;
  }

  .col-md-4{
      padding-top: 1.5rem;
  }
  </style>
</head>


 <!--

bol
  --> 
<body>
  <?php 
  session_start();
  // if(!isset($_SESSION['po_user_id']))
  // {
  //    header('location: ../logout.php');
  // }
 
//  $po_user_id=$_SESSION['po_user_id'];
//  include '../connect.php';
//  echo "<br>".$po_user_id;
//  echo "<br>".$_SESSION['college_name'];
 ?>

  <!-- Image and text -->
  <nav class="navbar navbar-light bg-light sticky-top justify-content-between ">
  <img src="../Assets/logos/NSS_LOGO.png" width="80" height="80" class="m" alt="">
  &nbsp;&nbsp;
  <!-- <ul class="navbar-nav">
    <li class="nav-item">
      
       <h4>Proforma- I - Registration of college NSS Unit for year 2020 -2021</h4> 
    </li>
   </ul> -->
   <button type="button" class="btn btn-info" onclick="loggingOut()">Log Out</button>  
</nav>

    <div class="container">
    <br>

   
    <div class="row">
        <div class="col-md-4">
        <a href="collegecontact.php">
                                <div class="card">
                                <div class="face face1">
                                    <div class="content">
                                    
                                    <p>View and filter the data according to the grant status and minority status</p>
                                    </div>
                                </div>
                                <div class="face face2">
                                     <h4>Contact details of college</h4>
                                </div>
                               </div>
        </a>
        </div>
        <div class="col-md-4">
                             <div class="card">
                                <div class="face face1">
                                    <div class="content">
                                    
                                    <p>View the contact details of all the principals of the respective colleges </p>
                                    </div>
                                </div>
                                <div class="face face2">
                                <h4>Contact details of Principal</h4>
                                </div>
                                </div>
        </div>
        <div class="col-md-4">
                                <div class="card">
                                <div class="face face1">
                                    <div class="content">
                                    
                                    <p>
                                        View the bank details of all the principals of the respective colleges
                                     </p>
                                    </div>
                                </div>
                                <div class="face face2">
                                      <h4>Bank details of college</h4>
                                </div>
                                </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-4">
                                <div class="card">
                                <div class="face face1">
                                    <div class="content">
                                    
                                    <p>View the contact details of all the P.Os of the respective colleges</p>
                                    </div>
                                </div>
                                <div class="face face2">
                                <h4>Contact details of P.O</h4>
                                </div>
                                </div>
        </div>
        <div class="col-md-4">
                             <div class="card">
                                <div class="face face1">
                                    <div class="content">
                                    
                                    <p>View other details of all the P.Os of the respective colleges</p>
                                    </div>
                                </div>
                                <div class="face face2">
                                 <h4>Other details of P.O</h4>
                                </div>
                                </div>
        </div>
        <div class="col-md-4">
                                <div class="card">
                                <div class="face face1">
                                    <div class="content">
                                    
                                    <p>View the Adopted area details for Regular Activities for all the colleges</p>
                                    </div>
                                </div>
                                <div class="face face2">
                                     <h4>Adopted area details</h4>
                                </div>
                                </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-4">
                                <div class="card">
                                <div class="face face1">
                                    <div class="content">
                                    
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <h4>Advisory Committee Details </h4>
                                </div>
                                </div>
        </div>
        <div class="col-md-4">
                             <div class="card">
                                <div class="face face1">
                                    <div class="content">
                                    
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <h4>Student leaders contact <br><center>details </center></h4>
                                </div>
                                </div>
        </div>
        <div class="col-md-4">
                                <div class="card">
                                <div class="face face1">
                                    <div class="content">
                                    
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <h5 style="font-size:1.3rem;">Suggestions by the Principal <br><center> and <br>Undertaking </center></h5>
                                </div>
                                </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
                                <div class="card">
                                <div class="face face1">
                                    <div class="content">
                                    
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <h5>Statistical Details of last year's <br> Regular Activities </h5>
                                </div>
                                </div>
        </div>
        <div class="col-md-4">
                             <div class="card">
                                <div class="face face1">
                                    <div class="content">
                                    
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                    </div>
                                </div>
                                <div class="face face2">
                                     <h5>Statistical Details of last year's <br> Camping Activities </h5>
                                </div>
                                </div>
        </div>
       
    </div>



   
    </div>



    <script>
      function loggingOut(){
        window.location.href="../logout.php";
      }
    </script>
</body>
</html>
