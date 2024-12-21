
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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>NSS Director | Form I tables</title>
  <link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/style.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
  <script src="../Assets/bootstrap-4.5.0-dist/js/onlynum.js"></script>
  <style>   
  
   
   
    h3 {
      font-family: 'Acme', sans-serif;

  color: #0d0d0d;
  font-size: 22px;
  line-height: 30px;
  font-weight: 70;
  margin-bottom: 4px;
  margin-top:1.6rem;
  text-align: center;
  
}


p {
  padding-top:0.7rem;
  font-size: 19px;
  font-weight: 400;
  line-height: 22px;
  color: #5F5B72;
  visibility: hidden;
}
p.small {
  font-size: 16px;
}

.go-corner {
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
  position: absolute;
  width: 40px;
  height: 40px;
  overflow: hidden;
  top: 0;
  right: 0;
  background: #7F00FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #8900FF, #7F00FF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #8900FF, #7F00FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  border-radius: 0 4px 0 32px;
}

.go-arrow {
  margin-top: -4px;
  margin-right: -4px;
  color: white;
  font-family: courier, sans;

}


#link{
  text-decoration: none;
}
.card1 {

      -webkit-box-shadow: 10px 10px 17px -2px rgba(203,203,203,1);
      -moz-box-shadow: 10px 10px 17px -2px rgba(203,203,203,1);
      box-shadow: 10px 10px 17px -2px rgba(203,203,203,1);
  /* main card hai ye */
  display: block;
  position: relative;
  width: 20rem;
  height: 10rem;
  background: #9796f0;  
background: -webkit-linear-gradient(to right, #fbc7d4, #9796f0);  
background: linear-gradient(to right, #fbc7d4, #9796f0);

/* background: #BE93C5;  
background: -webkit-linear-gradient(to right, #7BC6CC, #BE93C5);  
background: linear-gradient(to right, #7BC6CC, #BE93C5);  */

/* background: #A770EF;  
background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);  
background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);  */

  border-radius: 0.75rem;
  padding: 32px 24px;
  margin: 12px;
  text-decoration: none;
  z-index: 0;
  overflow: hidden;
}


.card1:before {

  /* jab hover hoga tabh */
  content: "";
  position: absolute;
  z-index: -1;
  top: -0px;
  right: -0px;
  background: #8900FF;  /* fallback for old browsers */
/* background: -webkit-linear-gradient(to right, #8900FF, #8900FF);  
background: linear-gradient(to right, #8900FF, #8900FF);  */

  height: 32px;
  width: 32px;
  border-radius: 32px;
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
  -webkit-transition: -webkit-transform 0.25s ease-out;
  transition: -webkit-transform 0.25s ease-out;
  transition: transform 0.25s ease-out;
  transition: transform 0.25s ease-out, -webkit-transform 0.25s ease-out;
}
.card1:hover:before {
  -webkit-transform: scale(21);
          transform: scale(21);
}

.card1:hover p {
  -webkit-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
  color: rgba(255, 255, 255, 0.8);
  visibility: visible;
}
.card1:hover h3 {
  -webkit-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
  color: #ffffff;
  font-size:19px;
  line-height: 24px;
  margin-top:0rem;
}

  
   

  .col-md-4{
      padding-top: 1.5rem;
  }

   .navbar{
    -webkit-box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
-moz-box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
}
  </style>
</head>

<body>
 

  <!-- Image and text -->
  <nav class="navbar navbar-light bg-white sticky-top justify-content-between ">
  <img src="../Assets/logos/NSS_LOGO.png" width="80" height="80" class="m" alt="">
  <ul class="navbar-nav">
    <li class="nav-item">      
       <!-- <h4>IEEE-Institute of Electrical and Electronics Engineers</h4>  -->
    </li>
   </ul>
   <a href="index"  class="btn btn-primary" style="background-color:#5950D7;width:5rem;margin-left:70rem;">BACK</a>
   <button type="button" class="btn btn-info" style="background-color:#5950D7;" onclick="loggingOut()">LOG OUT</button>  
</nav>

    <div class="container">
    <div class="row">
        <div class="col-md-4">
        <!-- <a class="card1" href="collegecontact" id="link"> -->
        <a class="card1" href="a1" id="link">
<h3>College contact details</h3>

<p class="small">View and filter the data according to the grant status and minority status</p>
<div class="go-corner" >
<div class="go-arrow">
→
</div>
</div>
</a>
                               
        </div>
        <div class="col-md-4">
                    <a class="card1" href="a2" id="link" style="background: #BE93C5;  
background: -webkit-linear-gradient(to right, #7BC6CC, #BE93C5);  
background: linear-gradient(to right, #7BC6CC, #BE93C5); ">
                    <h3>Principal contact details</h3>
                                       <p class="small">View the contact details of all the principals of the respective colleges</p>
                    <div class="go-corner" >
                    <div class="go-arrow">
                    →
                    </div>
                    </div>
                    </a>
        </div>
        <div class="col-md-4">
                    <a class="card1" href="a3" id="link" style="background: #A770EF;  
background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);  
background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF); ">
                    <h3>Bank details of college</h3>
                    
                    <p class="small">View the bank details of all the principals of the respective colleges.</p>
                    <div class="go-corner">
                    <div class="go-arrow">
                    →
                    </div>
                    </div>
                    </a>
        </div>
    </div>



    <div class="row">
        <div class="col-md-4">
                    <a class="card1" href="c1" id="link">
                    <h3>Contact details of PO</h3>
                                     <p class="small">View the contact details of all the P.Os of the respective colleges.</p>
                    <div class="go-corner" >
                    <div class="go-arrow">
                    →
                    </div>
                    </div>
                    </a>
        </div>
        <div class="col-md-4">
                    <a class="card1" href="c2" id="link" style="background: #BE93C5;  
background: -webkit-linear-gradient(to right, #7BC6CC, #BE93C5);  
background: linear-gradient(to right, #7BC6CC, #BE93C5); ">
                    <h3>Other details of PO</h3>
                    
                    <p class="small">View other personal details of all the P.Os of the respective colleges.<p>
                    <div class="go-corner" >
                    <div class="go-arrow">
                    →
                    </div>
                    </div>
                    </a>
        </div>
        <div class="col-md-4">
                    <a class="card1" href="f1" id="link" style="background: #A770EF;  
background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);  
background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF); ">
                    <h3>Adopted area details</h3>
                    <p class="small">View the Adopted area details for Regular Activities for all the colleges.</p>
                    <div class="go-corner" >
                    <div class="go-arrow">
                    →
                    </div>
                    </div>
                    </a>
        </div>
    </div>



    <div class="row">
        <div class="col-md-4">
                    <a class="card1" href="g" id="link">
                    <h3>Advisory Committee Details</h3>
                    <p class="small">View Advisory Committee Details and filter them</p>
                    <div class="go-corner" >
                    <div class="go-arrow">
                    →
                    </div>
                    </div>
                    </a>
        </div>
        <div class="col-md-4">
                    <a class="card1" href="e" id="link" style="background: #BE93C5;  
background: -webkit-linear-gradient(to right, #7BC6CC, #BE93C5);  
background: linear-gradient(to right, #7BC6CC, #BE93C5); ">
                    <h3>Leader's contact details</h3>
                    <p class="small">View contact details of Student leaders </p>
                    <div class="go-corner" >
                    <div class="go-arrow">
                    →
                    </div>
                    </div>
                    </a>
        </div>
        <div class="col-md-4">
                    <a class="card1" href="#" id="link" style="background: #A770EF;  
background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);  
background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF); ">
                    <h3>Suggestions by the Principal and Undertaking</h3>
                    <p class="small">View details of Suggestions by the Principal and Undertaking</p>
                    <div class="go-corner" >
                    <div class="go-arrow">
                    →
                    </div>
                    </div>
                    </a>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
        <a class="card1" href="d1" id="link" style="background: #BE93C5;  
background: -webkit-linear-gradient(to right, #7BC6CC, #BE93C5);  
background: linear-gradient(to right, #7BC6CC, #BE93C5); ">
                    <h3>Statistical Details of last year's Regular Activities </h3>
                    <p class="small">View Statistical Details of last year's Regular Activities</p>
                    <div class="go-corner" >
                    <div class="go-arrow">
                    →
                    </div>
                    </div>
                    </a>
        </div>
        <div class="col-md-4">
                    <a class="card1" href="d2" id="link" style="background: #BE93C5;  
background: -webkit-linear-gradient(to right, #7BC6CC, #BE93C5);  
background: linear-gradient(to right, #7BC6CC, #BE93C5); ">
                    <h3>Statistical Details of last year's Camping Activities</h3>
                    <p class="small">View Statistical Details of last year's Camping Activities</p>
                    <div class="go-corner" >
                    <div class="go-arrow">
                    →
                    </div>
                    </div>
                    </a>
        </div>
        <div class="col-md-4">
                    <a class="card1" href="f2" id="link" style="background: #A770EF;  
background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);  
background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF); ">
                    <h3>Adopted area details</h3>
                    <p class="small">Adopted area details for Special Camping Activities</p>
                    <div class="go-corner" >
                    <div class="go-arrow">
                    →
                    </div>
                    </div>
                    </a>
        </div>
       
    </div>



   
    </div>



    <script>
      function loggingOut(){
        window.location.href="../logout";
      }
    </script>
</body>
</html>
