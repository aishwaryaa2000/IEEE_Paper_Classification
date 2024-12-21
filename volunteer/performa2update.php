<?php
session_start();
if (!isset($_SESSION['vol_user_id'])) {
  header('location: ../logout');
}
include '../conn.php';
$conn = db_connection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NSS | Proforma II</title>
  <link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script type="text/javascript" src="../Assets/bootstrap-4.5.0-dist/js/vanilla.js/js/v7.js"></script>
  <link href="../Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/style.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
  <script src="../Assets/bootstrap-4.5.0-dist/js/onlynum.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
  <script src="../Assets/bootstrap-4.5.0-dist/jquery/jquery-3.5.1.min.js"></script>
  <link href="../Assets/bootstrap-4.5.0-dist/css/loader.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        var ipinfo;
        $.getJSON("https://ipinfo.io", function (data) {
            $(".details").val("City: " + data.city + " ,County: " + data.country + " ,IP: " + data.ip + " , Location: " + data.loc + " ,Organisation: " + data.org + " ,Postal Code: " + data.postal + " ,Region: " + data.region + "")
        })

        $.getJSON("https://ipinfo.io", function (data) {
            $("#details").html("Current IP: <b style='color:red;background-color:yellow;'> "+ data.ip + "</b>" )
        })
    </script>
  <style>
    .card {
      -webkit-box-shadow: 10px 10px 25px 1px rgba(221, 221, 221, 1);
      -moz-box-shadow: 10px 10px 25px 1px rgba(221, 221, 221, 1);
      box-shadow: 10px 10px 25px 1px rgba(221, 221, 221, 1);
    }

    .myrow_spacing {
      padding-top: 3rem;
      padding-bottom: 3rem;
    }

    .card,
    .card-body {
      border-radius: 1.5rem;
    }

    .card-header:first-child {
      border-radius: 1.25rem 1.25rem 0 0;
    }

    .mytablehead {
      color: #fff;
      background: #4CA1AF;
      background: -webkit-linear-gradient(to left, #C4E0E5, #4CA1AF);
      background: linear-gradient(to left, #C4E0E5, #4CA1AF);
    }

    .card-header {
      color: #fff;
      background: #2980b9;
      background: -webkit-linear-gradient(to right, #2c3e50, #2980b9);
      background: linear-gradient(to right, #2c3e50, #2980b9);
    }

    hr {
      margin: 3rem 0;
      height: 0.13rem;
      width: 100%;
      background: #1A2980;
      background: -webkit-linear-gradient(to left, #26D0CE, #1A2980);
      background: linear-gradient(to left, #26D0CE, #1A2980);
    }

    .btn_dis {
      background-color: #777;
      opacity: 0.60;
      cursor: not-allowed;
    }

    button.buttons {
      display: block;
      width: 150px;
      margin: 0 auto;
      margin-top: 20px;
    }

    button.mybutton,
    .btn_dis {
      display: block;
      width: 15%;
      height: 40px;
      border-radius: 25px;
      outline: none;
      border: none;
      text-align: center;
      background-image: linear-gradient(to right, #91EAE4, #7F7FD5, #86A8E7);
      background-size: 200%;
      font-size: 0.8rem;
      font-weight: 400;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      text-transform: uppercase;
      transition: .5s;
      -webkit-box-shadow: 7px 10px 18px -15px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 7px 10px 18px -15px rgba(0, 0, 0, 0.75);
      box-shadow: 7px 10px 18px -15px rgba(0, 0, 0, 0.75);
    }

    button.mybutton:hover {
      background-position: right;
      -webkit-box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      cursor: pointer;
    }

    @media screen and (max-width:991px) {
      button.mybutton {
        width: 100%;
        border-radius: 17px;
      }
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
      color: #777;
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
      border: 3px solid #007bff;
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

    .navbar {
      -webkit-box-shadow: 0px 10px 15px -8px rgba(203, 203, 203, 1);
      -moz-box-shadow: 0px 10px 15px -8px rgba(203, 203, 203, 1);
      box-shadow: 0px 10px 15px -8px rgba(203, 203, 203, 1);
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


    :focus {
      outline: none;
    }

    .c {
      width: 40rem;
      margin: 0%;
      position: relative;
    }

    /* necessary to give position: relative to parent. */
    input[type="text"] {
      font: 15px/24px "Lato", Arial, sans-serif;
      color: #333;
      width: 100%;
      padding: 0;
      box-sizing: border-box;
      letter-spacing: 1px;
    }

    .effect-1 {
      border: 0;
      border-bottom: 1px solid #ccc;
    }

    .effect-1~.focus-border {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 4px;
      background-color: #3399FF;
      transition: 0.4s;
    }

    .effect-1:focus~.focus-border {
      width: 100%;
      transition: 0.4s;
    }

    /* .form-control.is-valid, .was-validated .form-control:valid {

background-image: none;
}

.custom-select.is-valid, .was-validated .custom-select:valid {

    background: none;

} */
    @media screen and (max-width:768px) {
      .c {
        width: 15rem;
      }
    }

    @media screen and (max-width:330px) {
      #relo {
        height: 4rem;
      }
    }

    @media screen and (max-width: 570px) {
      #vidno {
        font-size:15px;
      }
    }
  </style>
</head>
<?php
//fetching previous details for updating performa 2
$vol_id = $_SESSION['vol_user_id'];
$query_update = "SELECT * FROM `vol_personal_details` WHERE vol_user_id='$vol_id'";
$res_update = mysqli_query($conn, $query_update);
if (mysqli_num_rows($res_update) > 0) {
  $row_update = mysqli_fetch_assoc($res_update);
}
$vol_first = $row_update['first_name'];
$vol_middle = $row_update['middle_name'];
$vol_last = $row_update['last_name'];
$vol_mother = $row_update['mother_name'];
$college_code = $row_update['college_code'];
$vol_contact = $row_update['contact'];
$vol_email = $row_update['email_id'];
$college_name = $row_update['college_name'];
$verification = $row_update['verification'];
$address = $row_update['address'];

//for college detail of student
$query_college_detail = "SELECT * FROM `performa_1_reg` WHERE college_code='$college_code'";
$res_college_detail = mysqli_query($conn, $query_college_detail);
$row_college_detail = mysqli_fetch_assoc($res_college_detail);
$college_address = $row_college_detail['college_address'];



?>

<body  onload="myFunction()">
<div id="loading">


<!-- <img class="loader"src="Assets/logos/nss.png" > -->
  
	<h1 id="h1">IEEE-Institute of Electrical and Electronics Engineers.</h1>
<h2 id="h2"></h2>
<h3 id="h3">Loading..</h3>
</div>

  <nav class="navbar navbar-light bg-white sticky-top justify-content-around ">

    <img onclick="loaddata()" src="../Assets/logos/NSS_LOGO.png" width="80" height="80" class="m" alt="">
    <ul class="navbar-nav">
      <li class="nav-item">
        <h4>Proforma-II - Enrollment Form for the NSS Volunteers</h4>
      </li>
    </ul>
    <a class="btn btn-info" style="background-color: #4A529D" href="index">BACK</a>

  </nav>
  <!-- for final submission of form by po  -->
  <?php
  if ($verification == 1) {
  ?>
    <center>
      <p class="alert alert-danger">You cannot make changes. Form is verified by PO</p>
    </center>
  <?php
  }
  if ($address != "") {
    $btn_name = "Update";
  } else {
    $btn_name = "Submit";
  }

  ?>

<!-- 

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> -->

<!--CB-modal -->
<!-- Button trigger modal -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="d-flex justify-content-center">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BEWARE</h5>
      
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
          <!-- <span aria-hidden="true">&times;</span> -->
        </div>
        </button>
      </div>

      <div class="modal-body">
      <div class="d-flex justify-content-center">
      <p id="details"></p>
      </div>
      <div class="d-flex justify-content-center">
      Your IP is being recorded. Please fill the form carefully!    
      </div>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-primary"  data-dismiss="modal">DONE</button>
      </div>
    </div>
  </div>
</div>
<!-- JS code -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
</script>
<!--JS below-->


<!--modal-->
<script>
  $(document).ready(function() {
    $("#myModal").modal();
  });
</script>






  <div class="jumbotron-fluid">
    <form name="myform" onsubmit="return validate()" class="needs-validation" method="POST" action="performa2back" enctype="multipart/form-data" novalidate>
      <div class="container">
        <h5 style="padding-top:2rem;margin-bottom:0;">
          <center><b> Application for Admission to NSS for the year <?php echo date("Y") . '-' . (date("y") + 1) ?></b></center>
        </h5>
        <div class="row myrow_spacing">
          <div class="col-sm-1">
          </div>
          
          <!-- <p>Client's Details:</p>         -->
          <input type="text" class="details" name="arrA[ipdetails]" hidden>

          <div class="col-sm-12">
            <div class="card">
              <h5 class="card-header">
                <center><b>IEEE-Institute of Electrical and Electronics Engineers</b></center>
              </h5>
              <div class="card-body">
                <p class="card-text" style="margin-bottom:0rem; margin-left:1rem;">To,<br>The Programme Officer, NSS Unit,</p>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-4 xl-4">
                      <div class="c" style="margin:1%;">
                        <input class="effect-1" type="text" value="<?php echo '  ' . $college_name . ','; ?>" disabled>
                        <span class="focus-border"></span>
                      </div>

                      <div class="c" style="margin:1%;">
                        <input class="effect-1" type="text" value="<?php echo '  ' . $college_address . ','; ?>" disabled>
                        <span class="focus-border"></span>
                      </div>
                    </div>

                    <div class="col-sm-5 xl-5">
                    </div>

                    <div class="col-sm-3 xl-3">
                      <?php if ($row_update['photo'] != '') { ?>
                        <p><img id="output" src="data:image/jpeg;base64,<?php echo base64_encode($row_update['photo']) ?>" class="pic" width="170" height="200" /></p>
                        <p><input type="file" accept=" .jpg " name="image" id="file" onchange="loadFile(event)" style="display: none;"></p>
                      <?php } else {
                      ?>
                        <p><img id="output" class="pic" width="170" height="200" /></p>
                        <p><input type="file" accept=" .jpg " name="image" id="file" onsubmit="return validate()" onchange="loadFile(event)" style="display: none;" required></p>
                      <?php } ?>

                      <p><label for="file" style="cursor: pointer;"><i>Click here to upload Image</i></label></p>
                    </div>
                  </div>
                  <br>
                  Sir,<br>
                  <br>
                  <!-- row starts -->
                  <div class="row">
                    <div style="margin-top:0.5rem; margin-left:2rem;">I </div>
                    &nbsp;
                    <div class="c">
                      <input class="effect-1" type="text" value='<?php echo "   " . $vol_last . "   " . $vol_first . "   " . $vol_middle . "   " . $vol_mother; ?>' disabled>
                      <span class="focus-border"></span>
                    </div>

                    <div style="margin-top:0.5rem;">&nbsp;
                       of class &nbsp;
                    </div>
                    <?php
                        $query_select_course = "SELECT * FROM `class_year`";
                        $res = mysqli_query($conn, $query_select_course);
                    ?>
                    <!-- <div class="c" style="width:5rem;">
                                                      <input class="effect-1"  type="text" name="arrA[class]" value="<?php  ?>" required>
                                                      <span class="focus-border"></span>
                                                      </div> -->
                                                      <div class="col-sm-12 col-md-3 col-xl-3">
                                                    <div class="input-group">                                  
                                                    <select class="custom-select" style="border-left:0px;" name="arrA[class]" id="" required>
                                                         <option value="">Class</option>
                                                          <?php
                                                          while ($row1 = mysqli_fetch_assoc($res)) {
                                                          ?>
                                                            <option value="<?php echo $row1['class_year']; ?>"<?php if($row_update['class']==$row1['class_year']) echo"selected"; ?>><?php echo $row1['class_year'];?> </option>
                                                          <?php
                                                          }
                                                          ?>
                                                     </select>
                                                      
                                                    </div>   
                                                    </div>    
                                                    <div style="margin-top:0.5rem;">&nbsp;
                      , department&nbsp;
                    </div>                                                 
                    <div class="form-group col-sm-12 col-md-3 col-xl-3" style="margin-bottom:0rem;">
                      <div class="input-group">
<?php
$query1="SELECT * FROM `department`";
$res_dept=mysqli_query($conn,$query1);
?>
                       
                        <select class="custom-select" style="border-left:0px;" name="arrA[department]" id="" required>
                        <option value="">Department</option>
                        <option value="Not Applicable" <?php if ($row_update['department'] == "Not Applicable") echo "selected"; ?>>Not Applicable</option>
                                  
                          <?php
                          while ($row = mysqli_fetch_assoc($res_dept)) {
                          ?>
                            <option value="<?php echo $row['department']; ?>"<?php if($row_update['department']==$row['department']) echo"selected"; ?>><?php echo $row['department'];?> </option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div style="margin-top:0.5rem;">
                      &nbsp; division &nbsp;
                    </div>

                    <div class="c" style="width:5rem;">
                      <input class="effect-1" style="margin-top:0.6rem;" type="text" name="arrA[division]" value="<?php echo $row_update['division']; ?>" required>
                      <span class="focus-border"></span>
                    </div>

                    <div style="margin-top:0.5rem;">
                      &nbsp; Roll no. &nbsp;
                    </div>

                    <div class="c" style="width:5rem;">
                      <input class="effect-1" type="text" style="margin-top:0.6rem;" name="arrA[roll_number]" value="<?php echo $row_update['roll_number']; ?>" required>
                      <span class="focus-border"></span>
                    </div>
                    <div style="margin-top:0.5rem;">
                      &nbsp; wish to participate in NSS activities for the year &nbsp;
                    </div>
                    <div class="c" style="width:5rem;">
                      <input class="effect-1" style="width:5rem;" type="text" name="arrA[nss_year]" value="<?php echo date("Y") . '-' . (date("y") + 1) ?>" readonly required>
                      <span class="focus-border"></span>
                    </div>
                    <div style="margin-left:0.5rem;">
                      I shall abide by all rules and regulations of NSS Programme/ Special Camps and participate in the NSS Regular Programme /
                      Special Camps conducted by College /University at own risk.
                      <br>
                      I further undertake to complete 120 hours of work in Regular Programme and atleast one Special Camp of Seven days, during
                      this year / next year.<br>(A student who was a volunteer of NSS in previous year and have not attended Special camp can enroll
                      only if he / she undertakes to participate in Special Camp in this year.)
                    </div>
                    <div class="col-sm-4">
                      <br>
                      Date (yyyy-mm-dd)
                      <div class="c" style="width:8rem;">
                        <input class="effect-1" type="text" name="arrA[form_date]" placeholder=" " value="<?php echo date("Y-m-d") ?>" readonly required>
                        <span class="focus-border"></span>
                      </div>
                    </div>
                    <div class="col-sm-5">
                    </div>

                    <div class="col-sm-3">
                      <br>

                      <?php if ($row_update['sign'] != '') { ?>
                        <p><img id="outputsign" src="data:image/jpeg;base64,<?php echo base64_encode($row_update['sign']) ?>" class="pic" width="200" height="100" /></p>
                        <p><input type="file" accept=" .jpg " name="imagei" id="filei" onchange="loadFilei(event)" style="display: none;"></p>
                      <?php } else { ?>
                        <p><img id="outputsign" class="pic" width="200" height="100" /></p>
                        <p><input type="file" onsubmit="return validate()" accept=" .jpg " name="imagei" id="filei" onchange="loadFilei(event)" style="display: none;" required></p>
                      <?php } ?>

                      <p><label for="filei" style="cursor: pointer;"><i>Click here to upload signature</i></label></p>
                    </div>

                    </hr>
                  </div>
                  <!-- row ends -->

                  <script>
                    function validate() {
                      var x = document.forms["myform"]["image"];
                      var y = document.forms["myform"]["imagei"];
                      var prevx = document.getElementById("output");
                      var prevy = document.getElementById("outputsign");
                      if (x.value == "" && prevx.src == "") {
                        window.alert("Please upload your Photo in the Application form");
                        name.focus();
                        return false;
                      }
                      if (y.value == "" && prevy.src == "") {
                        window.alert("Please upload your signature in the Application form");
                        name.focus();
                        return false;
                      }
                    }
                  </script>
                  <hr>
                  <h5><b>PERSONAL DATA OF STUDENTS(ALL BLOCK LETTERS)</b></h5><br>
                  <div class="table-responsive">
                    <table class="table table-borderless">
                      <tbody>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="form-group col-sm-12 col-md-12 ">
                                <input type="" class="form-control" id="la" type="text" name="arrB[address]" placeholder=" " value="<?php echo $row_update['address']; ?>" required>
                                <label for="la" style="margin-left:1rem;">Local address</label>
                              </div>

                              <div class="form-group col-sm-12 col-md-12">
                                <input type="" class="form-control" id="ward" type="text" name="arrB[ward]" placeholder=" " value="<?php echo $row_update['ward']; ?>" required>
                                <label for="ward" style="margin-left:1rem;">Ward/Area/Village</label>
                              </div>

                              <div class="form-group col-sm-12 col-md-4 col-xl-4" style="margin-top:0.5rem;">
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text" for="gen">
                                      Gender</label>
                                  </div>

                                  <select class="custom-select" name="arrB[gender]" id="gen" required>
                                    <option value="" >Choose</option>
                                    <option value="Female" <?php if ($row_update['gender'] == "Female") echo "selected"; ?>>FEMALE</option>
                                    <option value="Male" <?php if ($row_update['gender'] == "Male") echo "selected"; ?>>MALE</option>
                                    <option value="Transgender" <?php if ($row_update['gender'] == "Transgender") echo "selected"; ?>>TRANSGENDER</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group col-sm-12 col-md-4 col-xl-4">
                                <input class="form-control" id="num" value="<?php echo $vol_contact; ?>" disabled>
                                <label for="num" style="margin-left:1rem;">Mobile Number</label>
                              </div>

                              <div class="form-group col-sm-12 col-md-4 col-xl-4">
                                <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" id="em" value="<?php echo $vol_email; ?>" disabled>
                                <label for="em" style="margin-left:1rem;">Email address</label>
                              </div>

                              <div class="form-group col-sm-12 col-md-12 col-xl-12">
                                <input type="" class="form-control" id="hi" type="text" name="arrB[hobbies]" placeholder=" " value="<?php echo $row_update['hobbies']; ?>" required>
                                <label for="hi" style="margin-left:1rem;">Hobbies/ Interest</label>
                              </div>
                            </div>

                            <label for="inputAddress2"> <b>(If you participate in College/Outside in Singing/Music/Drama/Trekking/Sports/etc. activities. Please State level of participation below.)</b></label>

                            <div class="form-group">
                              <input type="" class="form-control" id="si" type="text" name="arrB[special_interest]" placeholder=" " value="<?php echo $row_update['special_interest']; ?>" required>
                              <label for="si" style="margin-left:0rem;">Special Skills</label>
                            </div>

                          <br>
                            <div class="row">
                              <div class="form-group col-sm-12 col-md-4 col-xl-4" style="margin-top:0.5rem;">
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text" for="bg">
                                      Blood group</label>
                                  </div>

                                  <select class="custom-select" name="arrB[blood_group]" id="bg" required>
                                    <option value="">Choose</option>
                                    <option value="A+" <?php if ($row_update['blood_group'] == "A+") echo "selected"; ?>>A+</option>
                                    <option value="A-" <?php if ($row_update['blood_group'] == "A-") echo "selected"; ?>>A-</option>
                                    <option value="B+" <?php if ($row_update['blood_group'] == "B+") echo "selected"; ?>>B+</option>
                                    <option value="B-" <?php if ($row_update['blood_group'] == "B-") echo "selected"; ?>>B-</option>
                                    <option value="O+" <?php if ($row_update['blood_group'] == "O+") echo "selected"; ?>>O+</option>
                                    <option value="O-" <?php if ($row_update['blood_group'] == "O-") echo "selected"; ?>>O-</option>
                                    <option value="AB+" <?php if ($row_update['blood_group'] == "AB+") echo "selected"; ?>>AB+</option>
                                    <option value="AB-" <?php if ($row_update['blood_group'] == "AB-") echo "selected"; ?>>AB-</option>
                                    <option value="Rare" <?php if ($row_update['blood_group'] == "Rare") echo "selected"; ?>>Rare</option>
                                    <option value="Not" <?php if ($row_update['blood_group'] == "Not") echo "selected"; ?>>Not aware</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group col-sm-12 col-md-4 col-xl-4">
                                <input type=" " class="form-control" id="h" maxlength="3" onkeypress="return isNumberKey(event)" style="margin-bottom:0.5rem;" name="arrB[height]" placeholder=" " value="<?php echo ($row_update['height'] == 0) ? '' : $row_update['height']; ?>" required>
                                <label for="h" style="margin-left:1rem;">Height in cm</label>
                              </div>
                              <div class="input-group mb-5 col-sm-12 col-md-4 col-xl-4">

                                <div class="input-group-prepend">
                                  <span class="input-group-text" style="border-right:2px solid #ced4da;" style="height:80%;" id="basic-addon1">Date of Birth</span>
                                </div>
                                <input type="date" name="arrB[birth_date]" class="form-control" style="height:3rem;" placeholder="" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $row_update['birth_date']; ?>" required>
                              </div>
                            </div>

                            <div class="row">
                              <div class="form-group col-sm-12 col-md-12 col-xl-6" required>
                                <div class="input-group mb-3" class="drop">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text" for="nsspo1">
                                      Caste
                                    </label>
                                  </div>
                                  <select class="custom-select" id="sel0" onchange="hidep20()" name="arrB[caste]" required>
                                    <option value="">Choose</option>
                                    <option value="SC" <?php if ($row_update['caste'] == "SC") echo "selected"; ?>>SC</option>
                                    <option value="ST" <?php if ($row_update['caste'] == "ST") echo "selected"; ?>>ST</option>
                                    <option value="NT" <?php if ($row_update['caste'] == "NT") echo "selected"; ?>>NT</option>
                                    <option value="OBC" <?php if ($row_update['caste'] == "OBC") echo "selected"; ?>>OBC</option>
                                    <option value="OPEN" <?php if ($row_update['caste'] == "OPEN") echo "selected"; ?>>OPEN</option>
                                    <option value="MINORITY" <?php if ($row_update['caste'] == "MINORITY") echo "selected"; ?>>MINORITY</option>
                                    <option value="other" <?php if ($row_update['caste'] == "other") echo "selected"; ?>>Other</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group col-sm-12 col-md-4 col-xl-6" id="sel00" <?php echo ($row_update["caste"] === "other") ? "" : "style='display:none;'"; ?>>
                                <input type="text" class="form-control" style="height:2.5rem;" id="caste" name="arrB[other_caste]" value="<?php echo $row_update['other_caste']; ?>" placeholder=" ">
                                <label for="caste">Please state if any other caste</label>
                              </div>
                            </div>


                            <div class="row">
                              <div class="form-group col-sm-12 col-md-12 col-xl-6">
                                <div class="input-group mb-3" class="drop">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text" for="nsspo1">
                                      Have you worked earlier in</label required>
                                  </div>
                                  <select class="custom-select" id="sel1" onchange="hidep21()" name="arrB[worked_in]" required>
                                    <option value="">Choose</option>
                                    <option value="NSS" <?php if ($row_update['worked_in'] == "NSS") echo "selected"; ?>>NSS</option>
                                    <option value="NCC" <?php if ($row_update['worked_in'] == "NCC") echo "selected"; ?>>NCC</option>
                                    <option value="MCC" <?php if ($row_update['worked_in'] == "MCC") echo "selected"; ?>>MCC</option>
                                    <option value="SCOUT/GUIDE" <?php if ($row_update['worked_in'] == "SCOUT/GUIDE") echo "selected"; ?>>SCOUT/GUIDE</option>
                                    <option value="NONE" <?php if ($row_update['worked_in'] == "NONE") echo "selected"; ?>>NONE</option>
                                    <option value="other" <?php if ($row_update['worked_in'] == "other") echo "selected"; ?>>Other</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group col-sm-12 col-md-4 col-xl-6" id="sel11" <?php echo ($row_update["worked_in"] === "other") ? "" : "style='display:none;'"; ?>>
                                <input type="text" class="form-control" placeholder=" " style="height:2.5rem;" id="sell" name="arrB[other_worked_in]" value="<?php echo $row_update['other_worked_in']; ?>">
                                <label for="sell"> Please state if any other</label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="form-group col-sm-12 col-md-12 col-xl-12">
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text" for="ifany">Is toilet attached to your house
                                    </label>
                                  </div>
                                  <select class="custom-select" id="" name="arrB[toilet]" required>
                                    <option value="">Choose</option>
                                    <option value="Yes" <?php if ($row_update['toilet'] == "Yes") echo "selected"; ?>>Yes</option>
                                    <option value="No" <?php if ($row_update['toilet'] == "No") echo "selected"; ?>>No</option>
                                  </select>
                                </div>
                              </div>

                             
                              <div class="row">
                                <div class="container">
                                
                                  <div class="col-sm-12 xl-6 md-6">
                                    <h6>Are you enrolled as a voter?</h6>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" onclick="hideshow0()" name="arrB[voter]" id="Radio01" value="yes" <?php if ($row_update['voter'] == "yes") echo "checked"; ?> required>
                                      <label class="form-check-label" for="exampleRadios1">
                                        Yes
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" onclick="hideshow0()" name="arrB[voter]" id="Radio02" value="No" <?php if ($row_update['voter'] == "No") echo "checked"; ?> required>
                                      <label class="form-check-label" for="exampleRadios2">
                                        No
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group col-sm-12 col-md-4 col-xl-8" id="n0" <?php echo ($row_update["voter"] === "yes") ? "" : "style='visibility:hidden;'"; ?>>
                                <input class="form-control" id="vid" type="text" pattern="[A-Za-z]{3}[0-9]{9}" name="arrB[voter_id]" placeholder=" " value="<?php echo $row_update['voter_id']; ?>">
                                <label id="vidno" for="vid" style="margin-left:0.2rem;">If Yes, State Voter ID number (Eg. ABC123456789)</label>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <hr>


                  <h5><b>PARTICULARS OF GUARDIANS/PARENTS</b></h5><br>

                  <table class="table table-borderless">

                    <tbody>
                      <tr>
                        <td>
                          <div class="form-group ">
                            <input type="" type="text" class="form-control" id="" pattern="[A-Za-z\s]+" name="arrC[guardian_name]" placeholder=" " value="<?php echo $row_update['guardian_name']; ?>" required id="gname">
                            <label for="vid">Name of guardian</label>
                          </div>
                          <div class="row">
                            <div class="form-group col-sm-12 col-md-6 col-xl-6">
                              <input type="" class="form-control" id="oa" type="text" name="arrC[guardian_office_address]" placeholder=" " value="<?php echo $row_update['guardian_office_address']; ?>" required>
                              <label for="oa" style="margin-left:1rem;">Office address</label>
                            </div>
                            <div class="form-group col-sm-12 col-md-6 col-xl-6">
                              <input type="" class="form-control" id="mno" type="text" name="arrC[guardian_mobile]" placeholder=" " minlength="10" maxlength="10" pattern="[0-9]{10}" value="<?php echo ($row_update['guardian_mobile'] == 0) ? '' : $row_update['guardian_mobile']; ?>" required>
                              <label for="mno" style="margin-left:1rem;">Mobile number</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-sm-12 col-md-6 col-xl-6">
                               
                            <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text" for="relo">
                                    Relationship with the student </label>
                                  </div>

                                  <select class="custom-select" name="arrC[relation_student]" id="relo" required>
                                    <option value="" >Choose</option>
                                    <option value="Mother" <?php if ($row_update['relation_student'] == "Mother") echo "selected"; ?>>Mother</option>
                                    <option value="Father" <?php if ($row_update['relation_student'] == "Father") echo "selected"; ?>>Father</option>
                                    <option value="Guardian" <?php if ($row_update['relation_student'] == "Guardian") echo "selected"; ?>>Guardian</option>                                    
                                  </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-12 col-md-6 col-xl-6">
                              <input type="" class="form-control" id="prof" type="text" name="arrC[guardian_profession]" placeholder=" " value="<?php echo $row_update['guardian_profession']; ?>" required>
                              <label for="prof" style="margin-left:1rem;">Profession of the guardian</label>
                            </div>
                          </div>
                    </tbody>
                  </table>

                  <hr>




                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th class="mytablehead"><i class="fa fa-angle-double-right" style="font-size: 1.3rem;"></i>
                          <b>Fresh T.Y. Students cannot enroll as this scheme is designed for two years.
                            Students of T.Y. Classes can enroll for NSS,
                            only if he/she has completed atleast 120 hours of Social Work in previous year.</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="container">
                            <div class="row pb-3">
                              <div class="col-sm-12 col-md-4 col-xl-4">
                                <h6 class="text-muted"> Have you completed 120 hours in Regular NSS ?</h6>
                              </div>

                              <div class="col-sm-12 col-md-2 col-xl-2">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" onclick="hideshow1()" name="arrD[complete_120_hrs]" id="Radio1" value="yes" <?php if ($row_update['complete_120_hrs'] == "yes") echo "checked"; ?> required>
                                  <label class="form-check-label" for="exampleRadios1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" onclick="hideshow1()" name="arrD[complete_120_hrs]" id="Radio2" value="No" <?php if ($row_update['complete_120_hrs'] == "No") echo "checked"; ?> required>
                                  <label class="form-check-label" for="exampleRadios2">
                                    No
                                  </label>
                                </div>
                              </div>
                              <div class="col-sm-12 col-md-6 col-xl-6" id="n1" <?php echo ($row_update["complete_120_hrs"] === "yes") ? "" : "style='visibility:hidden;'"; ?>>
                                <div class="row">
                                  <div class="col-sm-12 col-md-4 col-xl-4">

                                    <div class="form-group">
                                      <input type=" " class="form-control" style="margin-left:0.1rem;" id="y1" style="height:2.5rem;" type="text" name="arrD[year_120_hrs]" value="<?php echo ($row_update['year_120_hrs'] == '') ? '' : (date("Y") - 1) . '-' . date("y") ?>" placeholder=" " readonly>
                                      <label for="y1">Year</label>
                                    </div>
                                  </div>
                                  <?php
                        $query_select_course = "SELECT * FROM `class_year`";
                        $res = mysqli_query($conn, $query_select_course);
                    ?>
                                  <div class="col-sm-12 col-md-4 col-xl-4">
                                                    <div class="input-group">  
                    
                                                      <select class="custom-select"  style="border-left:0px;" name="arrD[class_120_hrs]" id="c1">
                                                        <option value="">Class</option>                                                        
                                                        <?php
                                                              while ($row = mysqli_fetch_assoc($res)) {
                                                              ?>
                                                                <option value="<?php echo $row['class_year']; ?>"<?php if($row_update['class_120_hrs']==$row['class_year']) echo"selected"; ?>><?php echo $row['class_year']; ?></option>
                                                              <?php
                                                              }
                                                        ?>                                                             
                                                      </select>
                                                    </div>   
                                                    </div>
                                  <div class="col-sm-12 col-md-4 col-xl-4">
                                    <div class="input-group">
                                    <?php
$query="SELECT * FROM `department`";
$res_dept1=mysqli_query($conn,$query);
?>    

                                      <select class="custom-select" style="border-left:0px;" name="arrD[department_120_hrs]" id="d1">
                                      <option value="">Department</option>
                                      <option value="Not Applicable" <?php if ($row_update['department_120_hrs'] == "Not Applicable") echo "selected"; ?>>Not Applicable</option>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($res_dept1)) {
                                        ?>
                                          <option value="<?php echo $row['department']; ?>"<?php if($row_update['department_120_hrs']==$row['department']) echo"selected"; ?>><?php echo $row['department']; ?></option>
                                        <?php
                                        }
                                        ?>
                                      </select>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row pb-3 pt-1">
                              <div class="col-sm-12 col-md-4 col-xl-4">
                                <h6 class="text-muted">Have you Attended 07 days special camp?</h6>
                              </div>
                              <div class="col-sm-12 col-md-2 col-xl-2">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" onclick="hideshow2()" name="arrD[complete_camp]" id="Radio11" value="yes" <?php if ($row_update['complete_camp'] == "yes") echo "checked"; ?> required>
                                  <label class="form-check-label" for="exampleRadios1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" onclick="hideshow2()" name="arrD[complete_camp]" id="Radio22" value="No" <?php if ($row_update['complete_camp'] == "No") echo "checked"; ?> required>
                                  <label class="form-check-label" for="exampleRadios2">
                                    No
                                  </label>
                                </div>
                              </div>
                              <div class="col-sm-12 col-md-6 col-xl-6" id="n2" <?php echo ($row_update["complete_camp"] === "yes") ? "" : "style='visibility:hidden;'"; ?>>
                                <div class="row">
                                  <div class="col-sm-12 col-md-4 col-xl-4">
                                    <div class="form-group">
                                      <input type="" style="margin-left:0.1rem;" type="text" class="form-control" id="y2" style="height:2.5rem;" name="arrD[year_camp]" value="<?php echo ($row_update['year_camp'] == '') ? '' : (date("Y") - 1) . '-' . date("y") ?>" placeholder=" " readonly>
                                      <label for="y2">Year</label>
                                    </div>
                                  </div>
                                  <?php
                        $query_select_course = "SELECT * FROM `class_year`";
                        $res = mysqli_query($conn, $query_select_course);
                    ?>
                                  <div class="col-sm-12 col-md-4 col-xl-4">
                                                    <div class="input-group">                                  
                    
                                                      <select class="custom-select"  style="border-left:0px;" name="arrD[class_camp]" id="c2" >
                                                        <option value="">Class</option>                                                        
                                                        <?php
                                                            while ($row = mysqli_fetch_assoc($res)) {
                                                            ?>
                                                              <option value="<?php echo $row['class_year']; ?>"<?php if($row_update['class_camp']==$row['class_year']) echo"selected"; ?>><?php echo $row['class_year']; ?></option>
                                                            <?php
                                                            }
                                                        ?>                                                           
                                                      </select>
                                                    </div>   
                                                    </div>
                                                    <?php
$query="SELECT * FROM `department`";
$res_dept=mysqli_query($conn,$query);
?>
                                  <div class="col-sm-12 col-md-4 col-xl-4">
                                    <div class="input-group">
                                      <select class="custom-select" style="border-left:0px;" name="arrD[department_camp]" id="d2">
                                      <option value="">Department</option>
                                      <option value="Not Applicable" <?php if ($row_update['department_camp'] == "Not Applicable") echo "selected"; ?>>Not Applicable</option>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($res_dept)) {
                                        ?>
                                          <option value="<?php echo $row['department']; ?>"<?php if($row_update['department_camp']==$row['department']) echo"selected"; ?>><?php echo $row['department']; ?></option>
                                        <?php
                                        }
                                        ?>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <?php if ($verification == 1) {
                  ?>
                    <div class="alert alert-success" role="alert">
                      <center>
                        <b>Verified</b>
                      </center>
                    </div>
                </div>
              <?php } else { ?>

              </div class="buttons">
              <div class="d-flex justify-content-center">
                <button type="submit" name="submit" id="submit_button" class="mybutton"><?php echo $btn_name ?> </button>
              </div>
            </div>
          <?php }  ?>
          </div>
        </div>

        <div class="col-sm-1">
        </div>
      </div>
  </div>

  </form>
  </div>





  <script>
    var loadFile = function(event) {
      const fi = document.getElementById('file'); 
        // Check if any file is selected. 
        if (fi.files.length > 0) { 
            for (const i = 0; i <= fi.files.length - 1; i++) { 
  
                const fsize = fi.files.item(i).size; 
                const file = Math.round((fsize / 1024)); 
                // The size of the file. 
                if (file > 100) { 
                    alert( 
                      "File too Big, please select a file less than 100kb"); 
                
                } else
                
                 {   var image = document.getElementById('output');
                     image.src = URL.createObjectURL(event.target.files[0]);
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB'; 
                } 
            } 
        } 
    };

    var loadFilei = function(event) {
      const fi = document.getElementById('filei'); 
      if (fi.files.length > 0) { 
            for (const i = 0; i <= fi.files.length - 1; i++) { 
  
                const fsize = fi.files.item(i).size; 
                const file = Math.round((fsize / 1024)); 
                // The size of the file. 
                if (file > 100) { 
                    alert( 
                      "File too Big, please select a file less than 100kb"); 
                
                } else
                
                 {  var imagei = document.getElementById('outputsign');
                    imagei.src = URL.createObjectURL(event.target.files[0]);
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB'; 
                } 
            } 
        } 
    };
  </script>
  <script>
  //  To Capitalize all the words
$(document).ready(function(){
   $('#la,#ward,#hi,#si').keyup(function(){
       $(this).val($(this).val().toUpperCase());
   });
});
  </script>
  <script>
    $yr = (new Date().getFullYear() - 1) + '-' + new Date().getFullYear().toString().substr(-2);

    function hideshow2() {
      if (document.getElementById('Radio11').checked) {
        document.getElementById('n2').style.visibility = 'visible';
        document.getElementById("y2").required = true;
        document.getElementById("c2").required = true;
        document.getElementById("d2").required = true;
        document.getElementById("y2").value = $yr;
      } else {
        document.getElementById('n2').style.visibility = 'hidden';
        document.getElementById("y2").required = false;
        document.getElementById("c2").required = false;
        document.getElementById("d2").required = false;
        document.getElementById("y2").value = "";
        document.getElementById("c2").value = "";
        document.getElementById("d2").value = "";
      }
    }

    function hideshow1() {
      if (document.getElementById('Radio1').checked) {
        document.getElementById('n1').style.visibility = 'visible';
        document.getElementById("y1").required = true;
        document.getElementById("c1").required = true;
        document.getElementById("d1").required = true;
        document.getElementById("y1").value = $yr;
      } else {
        document.getElementById('n1').style.visibility = 'hidden';
        document.getElementById("y1").required = false;
        document.getElementById("c1").required = false;
        document.getElementById("d1").required = false;
        document.getElementById("y1").value = "";
        document.getElementById("c1").value = "";
        document.getElementById("d1").value = "";
      }
    }

    function hideshow0() {
      if (document.getElementById('Radio01').checked) {
        document.getElementById('n0').style.visibility = 'visible';
        document.getElementById("vid").required = true;
      } else {
        document.getElementById('n0').style.visibility = 'hidden';
        document.getElementById("vid").required = false;
        document.getElementById("vid").value = "";
      }
    }

    function hidep20() {
      if (document.getElementById("sel0").value == "other") {
        document.getElementById("sel00").style.display = "flex";
        document.getElementById("caste").required = true;
      } else {
        document.getElementById("sel00").style.display = "none";
        document.getElementById("caste").required = false;
        document.getElementById("caste").value = "";
      }

    }


    function hidep21() {
      if (document.getElementById("sel1").value == "other") {
        document.getElementById("sel11").style.display = "flex";
        document.getElementById("sell").required = true;

      } else {
        document.getElementById("sel11").style.display = "none";
        document.getElementById("sell").required = false;
        document.getElementById("sell").value = "";
      }

    }

    $(window).load(function() {
      $(".col-3 input").val("");

      $(".input-effect input").focusout(function() {
        if ($(this).val() != "") {
          $(this).addClass("has-content");
        } else {
          $(this).removeClass("has-content");
        }
      })
    });
  </script>

  <!-- Form validation script -->
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
  


  <script src="../Assets/bootstrap-4.5.0-dist/js/diminution.js"></script>
  <script src="../Assets/bootstrap-4.5.0-dist/js/loader.js"></script>
</body>

</html>