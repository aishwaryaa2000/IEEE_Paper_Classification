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
  </style>
</head>

<body  onload="myFunction()">
<div id="loading">


<!-- <img class="loader"src="Assets/logos/nss.png" > -->
  
	<h1 id="h1">National Service Scheme.</h1>
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
  $query="SELECT * FROM `po_login_details` WHERE `po_user_id`='$po_user_id'";
  $res=mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($res);
  if($row['pass_invalid']=='0')
  {
      header('location:changepass');
  }
 ?>

  <!-- Image and text -->
  <!-- <nav class="navbar navbar-light bg-light sticky-top justify-content-between ">
  <img src="../Assets/logos/NSS_LOGO.png" onclick="loaddata()" width="80" height="80" class="m" alt="">
  &nbsp;&nbsp;
  <ul class="navbar-nav">
    <li class="nav-item">
      
       <h4>NSS BLAH BLAH</h4> 
    </li>
   </ul>
   <button type="button" style="margin-left:50rem;" class="btn btn-info" onclick="loggingOut()">Update profile</button>  

   <button type="button" class="btn btn-info" onclick="window.replace('')">Log Out</button>  
</nav> -->
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">
     <img src="../Assets/logos/NSS_LOGO.png" onclick="loaddata()" width="65" height="65" class="m" alt="">  
  </h5>
  <!-- <h1 class="my-0 mr-md-auto font-weight-normal">
     NATIONAL SERVICE SCHEME 
  </h1> -->
  <nav class=" my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark col-xs-12" id="my"  href="updateprofile">UPDATE PROFILE</a>    
    <a class="p-2 text-dark col-xs-12" id="my" href="updatepass">CHANGE PASSWORD</a>    
  </nav>
  <a class="btn btn-info" style="background-color: #4A529D" href="../logout">LOGOUT</a>
</div>
    <div class="container">
    <!--Welcome card-->
    <div class="jumbotron bg-light p-4 p-md-5 rounded myCard shadow-sm">
        <div class="col-md-6 px-0">
          <h1 class="display-4 text-white" style="text-shadow: 2px 2px 2px rgba(149, 150, 150, 0.68); font-weight:400">Welcome</h1>
          <p class="lead my-3 text-white"><b>Hello, <?php echo "$po_nm" ?>  </b></p>
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
              <?php
                $college_code = $_SESSION['college_code'];
                include '../connect.php';
                $query_select_performa1="SELECT * FROM `performa_1_reg` WHERE `college_code`= '$college_code' ";
                $res_select_perfoma1=mysqli_query($conn,$query_select_performa1);
                
                if(@mysqli_num_rows($res_select_perfoma1)>0)
                {
              ?>
              <h3 class="mb-0">Update</h3>
              <br>
              <!-- <div class="mb-1 text-muted">Nov 12</div> -->
              <p class="card-text mb-auto">Update your Proforma I form here. Fill in the details of Proforma I</p>
              <div class="d-flex justify-content-center">
              <a href="performa1_update" class="mybtn btn btn-primary" role="button">Click here</a>
              <?php
                }else{
                  ?>
                  <h3 class="mb-0">Registration</h3>
              <br>
              <!-- <div class="mb-1 text-muted">Nov 12</div> -->
              <p class="card-text mb-auto">Register the college here. Fill in the details of Proforma-1</p>
              <div class="d-flex justify-content-center">
              <a href="performa1" class="mybtn btn btn-primary" role="button">Click here</a>
                <?php
                }
              ?>
            </div>            
          </div>
        </div>
        </div>
        <!--Registration card ends-->
        <?php
        $disable_enroll=mysqli_fetch_assoc($res_select_perfoma1);
        ?>
        <!--Enrollment card-->
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 myshadow h-md-250 position-relative my_sub_card2">
            <div class="col p-4 d-flex flex-column position-static">             
              <h3 class="mb-0">Enroll students</h3>
              <br>
               <!-- <strong class="d-inline-block mb-2 text-success">Do not refresh the page while uploading the file!</strong> -->
              <!-- <div class="mb-1 text-muted">Nov 12</div> -->
              <p class="card-text mb-auto">Add the student list here. Upload excel file in CSV format only.</p>              
              <!-- <a class="btn btn-primary" href="#" role="button">Click Here</a> -->
              <div class="d-flex justify-content-center">
                <button onclick="location.href='registervolunteer'" class="mybtn btn btn-primary <?php
              echo ($disable_enroll['verification']==0 || $row['vec_gen']==1)?'disabled not-allowed':''?>"
         role="button">Click here</button>
              </div>            
          </div>
        </div>
        </div>
        <!--Enrollment card ends-->

        <!--Enrollment List card-->
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 myshadow h-md-250 position-relative my_sub_card3">
            <div class="col p-4 d-flex flex-column position-static">
              <!-- <strong class="d-inline-block mb-2 text-success">Design</strong> -->
              <h3 class="mb-0">List of enrolled students</h3>
              <br>
              <!-- <div class="mb-1 text-muted">Nov 12</div> -->
              <p class="card-text mb-auto">View the list of the students who are already enrolled</p>              
              <!-- <a class="btn btn-primary" href="#" role="button">Click Here</a> -->
              <div class="d-flex justify-content-center">
                <a href="enlist" class="mybtn btn btn-primary" role="button">Click here</a>
              </div>         
            </div>
            <!-- <div class="col-auto d-none d-lg-block">
              <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            </div> -->
          </div>
        </div>
        <!--Enrollment List card ends-->

        <!--Verify students-->
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 myshadow h-md-250 position-relative my_sub_card4">
            <div class="col p-4 d-flex flex-column position-static">
              <!-- <strong class="d-inline-block mb-2 text-success">NSS</strong> -->
              <h3 class="mb-0">Verify students</h3>
              <br>
              <!-- <div class="mb-1 text-muted">Nov 12</div> -->
              <p class="card-text mb-auto">Select students from list and verify Proforma II</p>              
              <!-- <a class="btn btn-primary" href="#" role="button">Click Here</a> -->
              <div class="d-flex justify-content-center">
                <a href="verifystudent" class="mybtn btn btn-primary" role="button">Click here</a>
              </div>            
          </div>
      </div>
        </div>
        <!--verify students ends-->

        <!--Change Existing student card-->
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 myshadow h-md-250 position-relative my_sub_card6">
            <div class="col p-4 d-flex flex-column position-static">
              <!-- <strong class="d-inline-block mb-2 text-success">Design</strong> -->
              <h3 class="mb-0">Change an existing student</h3>
              <br>
              
              <!-- <div class="mb-1 text-muted">Nov 12</div> -->
              <p class="card-text mb-auto">Change the details of an already existing student to add a new student.</p>              
              <!-- <a class="btn btn-primary" href="#" role="button">Click Here</a> -->
              <div class="d-flex justify-content-center">
                <button onclick="location.href='updatestudent'" class="mybtn btn btn-primary <?php
              echo ($disable_enroll['verification']==0 || $row['vec_gen']==1)?'disabled not-allowed':''?>" role="button">Click here</button>
              </div>         
            </div>
            <!-- <div class="col-auto d-none d-lg-block">
              <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            </div> -->
          </div>
        </div>
        <!--Change Existing student card ends-->

       <!--VEC Generate card-->
        <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 myshadow h-md-250 position-relative my_sub_card6">
            <div class="col p-4 d-flex flex-column position-static">
              <!-- <strong class="d-inline-block mb-2 text-success">Design</strong> -->
              <h3 class="mb-0">Student Details</h3>
              <br>
              
              <!-- <div class="mb-1 text-muted">Nov 12</div> -->
              <p class="card-text mb-auto">View the details of all students.</p>              
              <!-- <a class="btn btn-primary" href="#" role="button">Click Here</a> -->
              <div class="d-flex justify-content-center">
                <a href="studentdetails" class="mybtn btn btn-primary <?php
              // echo ($disable_enroll['verification']==0 || $row['vec_gen']==1)?'disabled':''?>" role="button">Click here</a>
              </div>         
            </div>
            <!-- <div class="col-auto d-none d-lg-block">
              <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            </div> -->
          </div>
          </div>
      </div>
        </div>
<!--VEC Generate card ends-->
        
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Confirmation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">      
        <p><strong class="text-danger">Once generated, cannot be changed.</strong><br>I confirm that all the students are enrolled and their enrollment forms have been verified.</p>        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Confirm PO UserID:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="generate_vec()">Generate VEC</button>
      </div>      
      </div>      
    </div>    
  </div>
</div> 
</div>


<div class="col-md-6">

        </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
  
  <script src="../Assets/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
  <script>
    function generate_vec(){
      
      var po_user_id=document.getElementById("po_user_id").value;
      var recipient_name=document.getElementById("recipient-name").value;
      if(po_user_id===recipient_name)
      
      {
        window.location.href='vecload';
      }
      else{
        window.alert("Invalid User ID.Please try gain later.");
      }
    }
    </script>
  <script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal("show");
  });  
});
</script>
    <script>
      function loggingOut(){
        window.location.href="../logout";
      }

      
      
    </script>
    <script src="../Assets/bootstrap-4.5.0-dist/js/loader.js"></script>
</body>


</html>
