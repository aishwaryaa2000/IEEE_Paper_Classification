
<?php
session_start();
if(!isset($_SESSION['head_user_id']))
{
    header('location:../logout');
}
include '../conn.php';
$conn=db_connection();
$head_user_id=$_SESSION['head_user_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change max allocation</title>
    <link href="../Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../Assets/bootstrap-4.5.0-dist/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../Assets/bootstrap-4.5.0-dist/css/style.min.css" rel="stylesheet">
    <link href="../Assets/bootstrap-4.5.0-dist/css/loader.css" rel="stylesheet">
    <script type="text/javascript" src="../Assets/bootstrap-4.5.0-dist/js/vanilla.js/js/v7.js"></script>
    <script src="../Assets/bootstrap-4.5.0-dist/js/onlynum.js"></script>

    <style>

#my:hover{
  background-color: #C6C9E0;
border-radius:0.4rem;
}




button.mybtn {
      display: block;
      width: 30%;
      height: 50px;
      border-radius: 25px;
      outline: none;
      border: none;
      text-align: center;
      background-image: linear-gradient(to right,#85BBED,#636CB4,#5161CE);
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
      background-image: linear-gradient(to right,#85BBED,#636CB4,#5161CE);
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




.myleft_card .card-body {
     

     background-image: url(../Assets/SVG/user_gro.svg);
     background-repeat: no-repeat;
     background-size:87vh;
     background-position: center;
     
     
 }

    </style>
</head>
<body onload="myFunction()">
<div id="loading">


<!-- <img class="loader"src="Assets/logos/nss.png" > -->
  
	<h1 id="h1">IEEE-Institute of Electrical and Electronics Engineers.</h1>
<h2 id="h2"></h2>
<h3 id="h3">Loading..</h3>
</div>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">
     <img src="../Assets/logos/NSS_LOGO.png" onclick="loaddata()" width="65" height="65" class="m" alt="">
  </h5>
  <!-- <h1 class="my-0 mr-md-auto font-weight-normal">
     IEEE-Institute of Electrical and Electronics Engineers 
  </h1> -->
  <nav class=" my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark col-xs-12" id="my"  href="index">HOME</a>    
    <a class="p-2 text-dark col-xs-12" id="my" href="updatepass">CHANGE PASSWORD</a>    
  </nav>
  <a class="btn btn-info" style="background-color: #5161CE" href="../logout">LOGOUT</a>
</div>
<br>
    <form action="" method="POST">
   <center> <div class="form-group " style="width:55%;">
        <input type="text" name="college_code" class="form-control" id="id" placeholder=" " required>
        <label for="id" >Enter College Code </label>
    </div></center>
   <center> <input type="submit" style="width:25%;" class="mybtn" style="border-radius: 24px;" name="submit"></center>
   
    </form>

<?php
        if(@isset($_POST['submit']))
        {
            $college_code=$_POST['college_code'];
            $query_select_college="SELECT * FROM `college_info` WHERE `college_code`='$college_code'";
            $query_get_vol="SELECT * FROM `po_login_details` WHERE `college_code`='$college_code' AND `po_invalid`=0";
            $res_select_college=mysqli_query($conn,$query_select_college);
            $res_get_vol=mysqli_query($conn,$query_get_vol);
            if(mysqli_num_rows($res_select_college)>0)
            {
                $row1=mysqli_fetch_assoc($res_select_college);
                $row2=mysqli_fetch_assoc($res_get_vol);
?>


<div class="container" style="margin-top: 2rem;">

<div class="row card-decor" style="height:auto;">
  <div class="card text-center col-xl-5 col-md-5 col-sm-12 myleft_card" style="border-radius:0rem;">

    <div class="card-body">

      <div class="row">
        <div class="col-xl-12 col-sm-12 col-md-12">
          <div class="mt-5 pt-5">
            <h5 class="card-title text-white"><br>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <!-- p tag me bakwaas -->
            </h5>
            <br>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-xl-7 col-md-7 col-sm-12 myright_card" style="border-radius:0rem;">
    <div class="card-body">
      <h4 class="card-title text-muted"><b>CHANGE MAXIMUM ALLOCATION</b></h4>
      <form class="needs-validation" method="POST" action="" novalidate>
        <br>
        
        <div class="container">
                        
                       <div class="form-group ">
                                    <input type="text" type="text" class="form-control" placeholder=" " id="code" name="college_code1" value="<?php echo $row1['college_code']?>" readonly>
                                    <label for="code" >College Code</label>
                        </div>
                        <br>
                        <div class="form-group ">
                                  <input type="text" type="text"  class="form-control" placeholder=" " id="name" name="college_name" value="<?php echo $row1['college_name']; ?>" readonly>
                                    <label for="name" >College name</label>
                        </div>
                        <br>
                        <div class="form-group ">
                                  <input type="text" type="text" class="form-control" placeholder=" " id="vol" name="vol_count" value="<?php echo $row2['vol_count']?>" readonly>
                                    <label for="vol" >Already Enrolled</label>
                        </div>
                        <div class="form-group " style="margin-top:1.7rem;">
                                  <input type="number" type="number" class="form-control" placeholder=" " id="max"  name="max_allot" value="<?php echo $row1['max_allot']?>" required>
                                    <label for="max" >Max allot</label>
                        </div>
                      
                       
                        
                       
                        <br>
              </div>

         <!-- <p align="center"> -->
        <div class="d-flex justify-content-center">
          <button type="submit" name="update" value="Change" class="mybtn" style="border-radius: 24px;">CHANGE</button>
        </div>

    </div>

    </form>
  </div>
</div>
</div>
</div>


<?php
    }
    else
    {
        echo "<script>alert('INVALID COLLEGE CODE')</script>";
    }

}
?>

<?php
if(isset($_POST['update']))
{
    $college_code=$_POST['college_code1'];
    $max_allot=$_POST['max_allot'];
    $vol_count=$_POST['vol_count'];
    if($vol_count<=$max_allot)
    {
        $query_update_max="UPDATE `college_info` SET `max_allot`='$max_allot' WHERE `college_code`='$college_code'";
        $res_update=mysqli_query($conn,$query_update_max);
        if($res_update)
        {
            echo "<script>alert('Max allot updated')</script>";
        }
        else
        {
        echo "<script>alert('Unsuccessful try again.')</script>";
        }
    }
    else
    {
        echo "<script>alert('Already enrolled is greater than new max allot')</script>";
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