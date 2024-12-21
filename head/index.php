<!DOCTYPE html>
<html lang="en">

<head>
<?php

session_start();
if(!isset($_SESSION['head_user_id']))
{
    header('location:../logout');
}

?>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Director Dashboard</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <!-- <link href="../Assets/bootstrap-4.5.0-dist/css/mdb.min.css" rel="stylesheet"> -->
  <!-- Your custom styles (optional) -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/style.min.css" rel="stylesheet">
  <link href="../Assets/bootstrap-4.5.0-dist/css/loader.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
  <script src="../Assets/bootstrap-4.5.0-dist/js/onlynum.js"></script>

   <!-- Our Custom CSS -->
   <link rel="stylesheet" href="../Assets/bootstrap-4.5.0-dist/css/headDashboard.css">


  <style>
h1{
      font-family: 'Comfortaa', cursive;
}
@media (max-width:767px){
    img#welcome{
        display: none;
    }
}
 .li1{
background-image: url(../Assets/img/trio1.png);
background-repeat: no-repeat;
background-size: cover;
}
.li2{
background-image: url(../Assets/img/trio2.png);
background-repeat: no-repeat;
background-size: cover;
} 
 .li3{
    background-image: url(../Assets/img/trio3.png);
background-repeat: no-repeat;
background-size: cover;  
} 
@media(max-width:668px){
.myhead h4{
    font-size: 1.1rem;
}
}
  </style>
  </head>
  <body>
<!---------------------------------------------Side Navbar--------------------------------------------------------->    
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="active">
            <!-- <div class="sidebar-header">
              <div class="row">
                  <strong><br></strong> -->
                 <!-- <h3 class="col-8">Dashboard</h3> 
                 <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-2x fa-ellipsis-h col-4" id="sidebarCollapse"></i>
                  </button>   -->
              <!-- </div>
            </div> -->

            <ul class="list-unstyled components">
                <!-- <li>
                    <a href="index" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        Home
                    </a>                    
                </li> -->
                <li>
                    <a href="updateprofile">
                        <i class="fas fa-user-alt"></i>
                        Profile
                    </a>
                </li>

                <li>
                   
                    <li>    

                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-university"></i>
                        College<br>Details
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="deletecollege">Delete College</a>
                        </li>     
                        <li>
                            <a href="exportcollege">Export & Truncate</a>
                        </li>
                        <li>
                            <a href="collegeinfobulkadd">Add College</a>
                        </li>              
                </li>
                </ul>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-tasks"></i>
                        Tables
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="table_form1">College Details</a>
                        </li>
                        <li>
                            <a href="table_form2"><font style="font-size:0.84rem;">Volunteer Details</font></a>
                        </li>
                        <li>
                            <a href="statistical_table"><font style="font-size:0.84rem;">Statistical Details</font></a>
                        </li>          
                        <li>
                            <a href="Atr"><font style="font-size:0.84rem;">ATR</font></a>
                        </li>       
                    </ul>        
 

                <li>
                    <a href="updatepass">
                        <i class="fas fa-unlock-alt"></i>
                        Password
                    </a>
                </li>
                <li>
                    <a href="changeallocated">
                        <i class="fas fa-edit"></i>
                         Change Allocation
                    </a>
                </li>
                <li>
                    <a href="#">
                        <!-- <i class="fas fa-question"></i> -->
                        <i class="fas fa-file-archive"></i>
                        Archive
                    </a>
                </li>
                <li>
                    <a href="../logout">
                        <i class="fas fa-power-off"></i>
                        Log Out
                    </a>
                </li>
            </ul>           
        </nav>
<!---------------------------------------------------Side Navbar ends-------------------------------------------------------->
<!------------------------------------------------- Top Navbar  -------------------------------------------------------------->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="container-fluid">

                    <!-- <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button> -->

                <div class="col-4">
                  <img src="../Assets/logos/NSS_LOGO.png" width="70" height="70" class="m" alt="">
                </div>
                 <div class="col-8 myhead"> 
                 <h4>IEEE-Institute of Electrical and Electronics Engineers</h4>                      
                        <!-- <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Dashboard</a>                                
                            </li>                           
                        </ul> -->
                 </div>   
                </div>
            </nav>
<!-----------------------------------------------Top Navbar ends------------------------------------------------------------>
<div class="jumbotron bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 sm-12">
  <h1 class="display-4">Hello<br> Director Sir!</h1>
  <p>Welcome to the home panel. Here is a concise dashboard with all the necessary tools.</p>
  <!-- <hr class="my-4"> -->
  <br>
  <!-- <p>You can explore all the utilities by clicking on the following shorcut buttons or scrolling down the window.</p> -->
  <div class="card" id="user-activity">
    <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item li1">
    <div class="d-flex bd-highlight">
    <div class="bd-highlight align-self-center d-block d-sm-none">
    <div class="col-auto pl-5 nav-link">
    <div class="icon-wrap danger">
        <i class="fas fa-landmark"></i>
    </div> 
    </div>
    </div>
    <div class=" flex-grow-1 bd-highlight">
    <a class="nav-link" href="" aria-controls="" aria-selected="true">
    <div class="icon-wrap danger d-none d-sm-block">
    <i class="fas fa-landmark"></i>
    </div>                                        
    <h4>327</h4>
    <span class="type-name">Colleges<br>Registered</span>                                       
    </a>
    
</div>
</div>
<div class="progress" style="height: 0.2rem;">
    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</li>
<li class="nav-item li2">
    <div class="d-flex bd-highlight">
    <div class="bd-highlight align-self-center d-block d-sm-none">
    <div class="col-auto pl-5 nav-link">
    <div class="icon-wrap info">
        <i class="fas fa-user-plus"></i>
    </div> 
    </div>
    </div>
    <div class=" flex-grow-1 bd-highlight">
    <a class="nav-link" href="" aria-controls="" aria-selected="false">
    <div class="icon-wrap info d-none d-sm-block">
        <i class="fas fa-user-plus"></i>
    </div>
    <h4>27</h4>
    <span class="type-name">Units<br>Formed</span>                                        
    </a>
    
    </div>
</div>
<div class="progress" style="height: 0.2rem;">
    <div class="progress-bar bg-info" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</li>
<li class="nav-item li3">
<div class="d-flex bd-highlight">
    <div class="bd-highlight align-self-center d-block d-sm-none">
    <div class="col-auto pl-5 nav-link">
    <div class="icon-wrap success">
        <i class="fas fa-users"></i>
    </div> 
    </div>
    </div>
    <div class=" flex-grow-1 bd-highlight">
    <a class="nav-link" href="" aria-controls="" aria-selected="false">
    <div class="icon-wrap success d-none d-sm-block">
        <i class="fas fa-users"></i>
    </div>
    <h4>3254</h4>
    <span class="type-name">Volunteers<br>Enrolled</span>                                      
    </a>
    
    </div>
</div>
<div class="progress" style="height: 0.2rem;">
    <div class="progress-bar bg-success" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</li>
</ul>

  
</div>
            </div>
<div class="col-md-6 sm-12">
 <img src="../Assets/SVG/welcome_dir.svg" id="welcome" width="100%" height=95%>
</div>

</div>
</div>
</div>




<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>   
   AOS.init(); 
</script> -->

 <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="../Assets/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
   
  </body>
</html>