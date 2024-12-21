

<!DOCTYPE html>
<html lang="en" >

<head>

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

@import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

*{
  margin: 0;
  padding: 0;
  list-style: none;
  box-sizing: border-box;
  text-decoration: none;
  font-family: 'Montserrat', sans-serif;
}

.wrapper{
  width: 100%;
  height: 100%;
}

.top_navbar{
  background: #fff;
  height: 60px;
  display: flex;
  position: fixed;
  width: 100%;
  top: 0;
}

.top_navbar .hamburger{
  width: 80px;
  background: #004D40;
  position: relative;
  font-size: 28px;
}

.top_navbar .hamburger .hamburger__inner{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  cursor: pointer;
  width: 40px;
  height: 20px;
}

.top_navbar .hamburger__inner > div{
  width: 30px;
  height: 2px;
  background: #fff;
  position: absolute;
  top: 0;
  left: 0;
}

.top_navbar .hamburger div.two{
  top: 10px;
  width: 40px;
}

.top_navbar .hamburger div.three{
  top: 20px;
}

.top_navbar .menu{
  width: calc(100% - 80px);
  height: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 20px;
}

.top_navbar .menu .logo{
  color: #004D40;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.top_navbar .menu .right_menu ul{
  display: flex;
}

.top_navbar .menu .right_menu ul li{
  position: relative;
}

.top_navbar .menu .right_menu ul li .fas{
  font-size: 22px;
  cursor: pointer;
  color: #004D40;
}

.top_navbar .menu .right_menu ul li .profile_dd{
  position: absolute;
  top: 35px;
  right: -10px;
  background: #fff;
  box-shadow: 0 0 2px rgba(0,0,0,0.5);
  padding: 10px 0;
  width: 180px;
  border-radius: 3px;
  display: none;
  user-select: none;
}

.top_navbar .menu .right_menu ul li .profile_dd.active{
  display: block;
}

.top_navbar .menu .right_menu ul li .profile_dd .dd_item{
  padding: 10px;
  cursor: pointer;
  color: white;
}

.top_navbar .menu .right_menu ul li .profile_dd .dd_item:hover{
  background: white;
}

.top_navbar .menu .right_menu ul li .profile_dd:before{
  content: "";
  position: absolute;
  top: -20px;
  right: 10px;
  border: 10px solid;
  border-color: transparent transparent #fff transparent;
}

.main_container .sidebar{
  position: fixed;
  top: 60px;
  left: 0;
  width: 225px;
  height: 100%;
  background: #004D40;
  transition: all 0.3s ease;
}

.main_container .sidebar .sidebar__inner{
  position: relative;
}

.main_container .sidebar .profile{
  display: flex;
  align-items: center;
  color: #fff;
  padding: 20px 0;
  white-space: nowrap;
  transition: all 0.3s ease;
}

.main_container .sidebar .profile .img{
  padding: 0 18px;
}

.main_container .sidebar .profile img{
   width: 45px;
}

.main_container .sidebar .profile p:first-child{
  font-size: 14px;
  color: #80CBC4;
  margin-bottom: 3px;
}

.main_container .container{
  margin-top: 60px;
  width: calc(100% - 225px);
  margin-left: 225px;
  padding: 30px;
  transition: all 0.3s ease;
}

.main_container .sidebar ul li a{
  color: #fff;
  font-size: 18px;
  padding: 20px 30px;
  white-space: nowrap;
  display: flex;
  align-items: center;
  margin-bottom: 1px;
  transition: all 0.3s ease;
}

.main_container .sidebar ul li a .icon{
  margin-right: 15px;
  font-size: 28px;
}

.main_container .sidebar ul li a span{
  display: inline-block;
}

.main_container .sidebar ul li a:hover,
.main_container .sidebar ul li a.active{
  background: #fff;
  color: #004D40;
}

.main_container .container .item{
  background: #fff;
  border: 1px solid #E0F2F1;
  margin-bottom: 30px;
  padding: 20px;
  font-size: 14px;
  line-height: 22px;
}

/* after adding active class */
.wrapper.active .sidebar{
  width: 80px;
}

.wrapper.active .sidebar ul li a span.title,
.wrapper.active .profile_info
{
  display: none;
}

.wrapper.active .main_container .container{
  width: calc(100% - 80px);
  margin-left: 80px;
}
</style>

</head>

<body translate="no" >
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="hamburger__inner">
         <div class="one"></div>
         <div class="two"></div>
         <div class="three"></div>
       </div>
    </div>
    <div class="menu">
      <div class="logo">
        IEEE-Institute of Electrical and Electronics Engineers
      </div>
      <div class="right_menu">
        <ul>
          <li><i class="fas fa-user"></i>
            <div class="profile_dd">
               <div class="dd_item">Profile</div>
               <div class="dd_item">Change Password</div>
               <div class="dd_item">Logout</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
    
  <div class="main_container">
      <div class="sidebar">
          <div class="sidebar__inner">
            <div class="profile">
              <div class="img">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS1Fax3Wkgw8XjdWpdUw3Jg7A_kOHI9Xgkleg&usqp=CAU" alt="">
              </div>
              <div class="profile_info">
                 <p>Welcome</p>
                 <p class="profile_name">ABC</p>
              </div>
            </div>
            <ul>
              <li>
                <a href="#" class="active">
                  <span class="icon"><i class="fas fa-user-alt"></i></span>
                  <span class="title"> Profile</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon"><i class="fas fa-tasks"></i></span>
                  <span class="title">College Details</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon"><i class="fas fa-unlock-alt"></i></span>
                  <span class="title">Password</span>
                </a>
              </li>
              <li> 
                        
                <a href="#">
                  <span class="icon"><i class="fas fa-edit"></i></span>
                  <span class="title"> Change Allocation</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon"><i class="fas fa-power-off"></i></span>
                  <span class="title"> Log Out</span>
                </a>
              </li>
            </ul>
          </div>
      </div>
      <div class="container">
      <div id="content">

<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">

    <div class="col-4">
      <img src="../Assets/logos/NSS_LOGO.png" width="70" height="70" class="m" alt="">
    </div>
     <div class="col-8 myhead"> 
     <h4>IEEE-Institute of Electrical and Electronics Engineers</h4>                      
   
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



      </div>
  </div>
  
</div>
   

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  
<script id="rendered-js" >
$(".hamburger .hamburger__inner").click(function () {
  $(".wrapper").toggleClass("active");
});

$(".top_navbar .fas").click(function () {
  $(".profile_dd").toggleClass("active");
});
 </script>

  

</body>

</html>
 
