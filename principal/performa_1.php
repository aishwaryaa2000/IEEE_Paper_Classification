<!DOCTYPE html>
<html lang="en">
<?php
  ob_start();
  ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
  <title>NSS | Proforma-I</title>
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
.row{
  padding-top: 1rem;
  padding-bottom: 1rem;
}
.card{   
    -webkit-box-shadow: 10px 10px 25px 1px rgba(221,221,221,1);
-moz-box-shadow: 10px 10px 25px 1px rgba(221,221,221,1);
box-shadow: 10px 10px 25px 1px rgba(221,221,221,1);
  }
  .mytablehead{
    color:#fff;
    background: #4CA1AF;  
background: -webkit-linear-gradient(to left, #C4E0E5, #4CA1AF); 
background: linear-gradient(to left, #C4E0E5, #4CA1AF); 
  }
  .card-header{   
    color:#fff;
    background: #2980b9;  
background: -webkit-linear-gradient(to right, #2c3e50, #2980b9); 
background: linear-gradient(to right, #2c3e50, #2980b9); 
  }
  hr{
    margin: 3rem 0;
    height:0.13rem;
    width:100%;
    background: #1A2980;  
background: -webkit-linear-gradient(to left, #26D0CE, #1A2980); 
background: linear-gradient(to left, #26D0CE, #1A2980); 
  }
    .card,.card-body{
      border-radius:1.5rem;
    }
    .card-header:first-child{
      border-radius: 1.25rem 1.25rem 0 0;
    }


    /* Input styling */
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

.form-group > input,
.form-group > label {
  height: 3.125rem;
  padding: .75rem;
}

.form-group > label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0; /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  pointer-events: none;
  cursor: text; /* Match the input under the label */
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

.form-group input:not(:placeholder-shown) ~ label {
  padding-top: .25rem;
  padding-bottom: .25rem;
  font-size: 12px;
  color: #777;
}

/* Fallback for Edge
-------------------------------------------------- */
@supports (-ms-ime-align: auto) {
  .form-group > label {
    display: none;
  }
  .form-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */
@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .form-group > label {
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
  border-top:0px solid !important;
  border-right:0px solid !important;
  border-left:0px solid !important;
  transition: 0.4s;
  border :3px solid #007bff;
}

.form-control
{ border: 1px solid #ced4da;
  border-top:0px;
  border-left:0px;
  border-right:0px;
}

.col-sm-12 {
    padding-top: 0rem;
}
button.mybtn {
      display: block;
      width: 30%;
      height: 50px;
      border-radius: 25px;
      outline: none;
      border: none;
      text-align: center;
      background-image: linear-gradient(to right, #2B526F, #65C7F7, #000046);
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
    .navbar{
      -webkit-box-shadow: 0px 10px 18px 1px rgba(230,230,230,1);
-moz-box-shadow: 0px 10px 18px 1px rgba(230,230,230,1);
box-shadow: 0px 10px 18px 1px rgba(230,230,230,1);
    }
    button.mybtn:hover {
      background-position: right;
      -webkit-box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
    }

    @media screen and (max-width: 570px) {
      #f1 {
        font-size:15px;
      }
      #f2 {
        font-size:14px;

      }
      #f3 {
        font-size:14px;

      }
      #f4 {
        font-size:14px;

      }
      #f5 {
        font-size:14px;

      }
      #f6 {
        font-size:14px;

      }
      #f7 {
        font-size:14px;

      }
      #f8 {
        font-size:14px;

      }
      #f9 {
        font-size:14px;

      }
      #f10 {
        font-size:13px;

      }
      #f11 {
        font-size:14px;

      }
      #f12 {
        font-size:14px;

      }
      #f13 {
        font-size:14px;

      }
      #f14 {
        font-size:13px;

      }
      #f15 {
        font-size:12px;

      }
      #f16 {
        font-size:13px;

      }

      #approve{
        font-size:13px;
      }
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
<!-- <a href="index"><button class="btn btn-primary">Back</button></a> -->
<?php 

session_start();
if(!isset($_SESSION['college_code']))
{
    header('location: ../logout');
}

$college_code = $_SESSION['college_code'];
include '../connect.php';
$query_select_performa1="SELECT * FROM `performa_1_reg` WHERE `college_code`= '$college_code' AND `submit` = 1";
$res_select_perfoma1=mysqli_query($conn,$query_select_performa1);

if(@mysqli_num_rows($res_select_perfoma1)>0)
{
    
  $rowA=mysqli_fetch_assoc($res_select_perfoma1);
  $query_select_po="SELECT * FROM `po_details` WHERE `college_code`='$college_code'";
  $query_select_village="SELECT * FROM `adopted_area` WHERE  `college_code`='$college_code'";
  $query_select_leader="SELECT * FROM `student_leader` WHERE  `college_code`='$college_code'";
  $query_select_advisory="SELECT * FROM `advisory_committee` WHERE  `college_code`='$college_code'";

  $res_select_po=mysqli_query($conn,$query_select_po);
  $res_select_village=mysqli_query($conn,$query_select_village);
  $res_select_leader=mysqli_query($conn,$query_select_leader);
  $res_select_advisory=mysqli_query($conn,$query_select_advisory);

  $rowB=mysqli_fetch_assoc($res_select_village);
  $rowC=mysqli_fetch_assoc($res_select_po);
  $rowD=mysqli_fetch_assoc($res_select_leader);
  $rowE=mysqli_fetch_assoc($res_select_advisory);
  
?>
  <!-- Image and text -->
  <nav class="navbar navbar-light bg-white sticky-top justify-content-around">  
  <img onclick="loaddata()" src="../Assets/logos/NSS_LOGO.png" width="80" height="80">
  <ul class="navbar-nav">
  <li class="nav-item">   
  <h4> Proforma-I - Registration of college NSS Unit for year 2020 -2021</h4>
  </li>
</ul>
     <a class="btn btn-info" style="background-color: #4A529D" href="home">Back</a>            
</nav>
<div class="jumbotron-fluid">
  <form method="POST" enctype="multipart/form-data">
  <?php
                        if($rowA['verification']== '1')
                          {
                        ?>
                         <center>
      <p class="alert alert-primary">You have already approved Proforma-I for the current year.</p>
    </center>
  <?php
  }
  ?>
  <div class="container">
    <!--card A-->
    <br><br>
      <div class="row">
        <div class="col-sm-1">
        </div>

        <div class="col-sm-12">
          <div class="card">
            <h5 class="card-header">A. College Details</h5>
            <div class="card-body">
            
              <div class="form-group">
                <input type="text" class="form-control" id="q1" name="college_name" placeholder="Name of the College" value="<?php echo $_SESSION['college_name']; ?>" readonly>
                <label for="q1" style="margin-left:0rem;">Name of the College</label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="q2" name="arrA[college_address]" placeholder="Postal Address" value="<?php echo $rowA['college_address']; ?>"  readonly  >
                <label for="q2" style="margin-left:0rem;">Postal Address</label>
              </div>
              <div class="row">
                <div class="form-group col-sm-12 col-md-4 col-xl-4">
                  <input type="" class="form-control" id="q3" onkeypress="return isNumberKey(event)" type="text"
                    name="arrA[college_telephone]" maxlength="10" placeholder="Telephone Number"  value="<?php echo $rowA['college_telephone']; ?>"  readonly >
                    <label for="q3" style="margin-left:1rem;">Telephone Number</label>
                </div>
                <div class="form-group col-sm-12 col-md-4 col-xl-4">
                  <input type="" class="form-control" id="q4" onkeypress="return isNumberKey(event)" type="text"
                    name="arrA[college_fax]" placeholder="Fax Number" value="<?php echo $rowA['college_fax']; ?>"  readonly >
                    <label for="q4" style="margin-left:1rem;">Fax Number</label>
                </div>
                <div class="form-group col-sm-12 col-md-4 col-xl-4">
                  <input type="email" class="form-control" id="q5" name="arrA[college_email]" placeholder="Email Address" value="<?php echo $rowA['college_email']; ?>"  readonly >
                  <label for="q5" style="margin-left:1rem;">Email Address</label>
                </div>
              </div>
              <h6>Status of the College</h6>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Grants</label>
                </div>
                <!-- <select class="custom-select" id="inputGroupSelect01" name="arrA[college_status_grant]" disabled>
                  <option  <?php //echo ($rowA["college_status_grant"] === "Government")?"selected" : ""; ?>value="Government">Government</option>
                  <option  <?php //echo ($rowA["college_status_grant"] === "Government_Aided")?"selected" : ""; ?>value="Government_Aided">Government Aided</option>
                  <option  <?php //echo ($rowA["college_status_grant"] === "Un_Aided")?"selected" : ""; ?>value="Un_Aided">Un Aided</option>
                </select> -->
                <input type="text" class="form-control" value="<?php echo $rowA['college_status_grant'];?>" name="arrA[college_status_grant]"  disabled>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="minor">Minority/Non-Minority</label>
                </div>
                <select class="custom-select"  onchange="hide()" id="minor" name="arrA[college_status_minority]"  disabled >
                  <!-- <option selected>Choose...</option> -->
                  <option  <?php echo ($rowA["college_status_minority"] === "Minority")?"selected" : ""; ?> value="Minority">Minority</option>
                  <option  <?php echo ($rowA["college_status_minority"] === "Non-Minority")?"selected" : ""; ?> value="Non-Minority">Non-Minority</option>
                </select>
              </div>
              
              <div class="input-group mb-3" id="ling" <?php echo ($rowA["college_status_minority"] === "Non-Minority")?"style='display:none;'" : ""; ?>>
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect02">Please state</label>
                </div>
                <select class="custom-select" id="inputGroupSelect02" name="arrA[college_pl_state]" disabled>
                  <option value="NULL" <?php echo ($rowA["college_pl_state"] === "NULL")?"selected" : ""; ?>>Choose...</option>

                  <option  <?php echo ($rowA["college_pl_state"] === "Linguistic")?"selected" : ""; ?> value="Linguistic">Linguistic</option>
                  <option  <?php echo ($rowA["college_pl_state"] === "Religious")?"selected" : ""; ?> value="Religious">Religious</option>
                </select>
              </div>
              <h6>Total No's of students in Degree College</h6>
              <div class="row">
                <div class="form-group col-sm-12 col-md-4 col-xl-4">
                  <input type="" class="form-control" id="q6" onkeypress="return isNumberKey(event)" type="text"
                  name="arrA[male_student_count]" placeholder="Male" value="<?php echo $rowA['male_student_count']; ?>"  readonly >
                  <label for="q6" style="margin-left:1rem;">Male</label>
                </div>
                <div class="form-group col-sm-12 col-md-4 col-xl-4">
                  <input type="" class="form-control" id="q7" onkeypress="return isNumberKey(event)" type="text"
                  name="arrA[female_student_count]" placeholder="Female" value="<?php echo $rowA['female_student_count']; ?>"  readonly >
                  <label for="q7" style="margin-left:1rem;">Female</label>
                </div>
                <div class="form-group col-sm-12 col-md-4 col-xl-4">
                  <input type="" class="form-control" id="q8" onkeypress="return isNumberKey(event)" type="text"
                  name="arrA[total_student_count]" placeholder="Total" value="<?php echo $rowA['total_student_count']; ?>"  readonly >
                  <label for="q8" style="margin-left:1rem;">Total</label>
                </div>
              </div>
              <hr>
              <div class="form-group">
                <input type="text" name="arrA[principal_name]" class="form-control" id="q9" placeholder="Name of the Principal" value="<?php echo $rowA['principal_name']; ?>"  readonly >
                <label for="q9" style="margin-left:0rem;">Name of the Principal</label>
              </div>
              <h6>Contact Details</h6>
              <div class="row">
                <div class="form-group col-sm-12 col-md-6 col-xl-6">
                  <input type="" name="arrA[principal_mobile]" class="form-control" id="q10" onkeypress="return isNumberKey(event)" type="text"
                     maxlength="10" placeholder="Mobile No." value="<?php echo $rowA['principal_mobile']; ?>"  readonly >
                    <label for="q10" style="margin-left:1rem;">Mobile No.</label>
                </div>
                <div class="form-group col-sm-12 col-md-6 col-xl-6">
                  <input type="email" name="arrA[principal_email]" class="form-control" id="q11" placeholder="Email ID" value="<?php echo $rowA['principal_email']; ?>"  readonly >
                  <label for="q11" style="margin-left:1rem;">Email ID</label>
                </div>
                <div class="form-group col-sm-12 col-md-6 col-xl-6">
                  <input type="" class="form-control" id="q12" onkeypress="return isNumberKey(event)" type="text"
                     name="arrA[principal_telephone]" maxlength="10" placeholder="Tel. No." value="<?php echo $rowA['principal_telephone']; ?>"  readonly >
                    <label for="q12" style="margin-left:1rem;">Telephone Number</label>
                </div>
                <div class="form-group col-sm-12 col-md-6 col-xl-6">
                  <input type="" class="form-control" id="q13" onkeypress="return isNumberKey(event)" type="text"
                   name="arrA[principal_fax]" placeholder="Fax. No." value="<?php echo $rowA['principal_fax']; ?>"  readonly >
                    <label for="q13" style="margin-left:1rem;">Fax Number</label>
                </div>
              </div>
              <h6>Bank A/C Details(NSS)</h6>
              <div class="form-group">
                <input type="text" name="arrA[bank_name]" class="form-control" id="q14" placeholder="Name of the Bank/Branch" value="<?php echo $rowA['bank_name']; ?>"  readonly >
                <label for="q14" style="margin-left:0rem;">Name of the Bank/Branch</label>
              </div>
              <div class="form-group">
                <input type="text" name="arrA[bank_account]" class="form-control" id="q15" placeholder="Account No." value="<?php echo $rowA['bank_account']; ?>"  readonly >
                <label for="q15" style="margin-left:0rem;">Account Number</label>
              </div>
              <div class="form-group">
                <input type="text" name="arrA[ifSC]" class="form-control" id="q16" placeholder="IFSC/MICR Code" value="<?php echo $rowA['ifSC']; ?>"  readonly >
                <label for="q16" style="margin-left:0rem;">IFSC/MICR Code</label>
              </div>
              <h6>Signatories</h6>
              <div class="row">
                <div class="form-group col-sm-12 col-md-6 col-xl-6">
                  <input type="text" name="arrA[signatories_1]" class="form-control" id="q17" placeholder="Name1" value="<?php echo $rowA['signatories_1']; ?>"  readonly >
                  <label for="q17" style="margin-left:1rem;">Name 1</label>
                </div>
                <div class="form-group col-sm-12 col-md-6 col-xl-6">
                  <input type="text" name="arrA[signatories_2]" class="form-control" id="q18" placeholder="Name2" value="<?php echo $rowA['signatories_2']; ?>"  readonly >
                  <label for="q18" style="margin-left:1rem;">Name 2</label>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="col-sm-1">
          </div>

      </div>
    <!--cardA ends-->
    <!--cardB-->
      <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-12">
          <div class="card">
            <h5 class="card-header">B. Allocated students strength for NSS for the year</h5>
            <div class="card-body">
              <p><b>On the basis of the College Regular Activities,Special Camp & trained ProgammeOfficers during the
                  previous year, the NSS Programme Officers during
                  the previous year, the NSS Programme Co-ordinator allocate the NSS Unit & Students strength to the
                  College for the current academic year for Regular &
                  Special Camp activities.The allocated student strength is regularizes for the respective year subject
                  to ...</b>
                <br>1) Submission of the Registration Proforma.
                <br>2) Acceptance of allocated Student strength.
                <br>3) Commitment to conduct the Residential Special Camp with 50% of the Enrolled Strength.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-1">
        </div>
      </div>
    <!--cardB ends-->
<!-- PO Detials Start cardC -->
      <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-12">
          <div class="card">
            <h5 class="card-header">C. Details of the NSS programme officers for the year (At least one NSS PO must be
              FEMALE).</h5>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <!-- <th scope="col">Sr no.</th> -->
                    <th scope="col" class="mytablehead">Details of the Programme Officer</th>


                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <!-- <th scope="row">1</th> -->
                    <td>
                      <div class="row">

                        <div class="col-sm-12 col-md-6 col-xl-6">

                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <input type="text" name="arrC_1[po_name]" class="form-control" id="q19" placeholder="Name of Programme Officer 1"
                            value="<?php echo $rowC['po_name']; ?>"  readonly >
                            <label for="q19" style="margin-left:1rem;">Name of Programme Officer 1</label>
                          </div>
                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <input type="text" name="arrC_1[po_email]" class="form-control" id="q20" placeholder="Email ID of Programme Officer 1"
                            value="<?php echo $rowC['po_email']; ?>"  readonly >
                            <label for="q20" id="f1" style="margin-left:1rem;">Email ID of Programme Officer 1</label>
                          </div>

                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <input type="text" name="arrC_1[po_mobile_1]" onkeypress="return isNumberKey(event)" name="txtNumber" maxlength="10"
                              class="form-control" id="q21" placeholder="Mobile number 1 of Programme Officer 1"
                              value="<?php echo $rowC['po_mobile_1']; ?>"  readonly >
                              <label for="q21" id="f2" style="margin-left:1rem;">Mobile number 1 of Programme Officer 1</label>
                          </div>

                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <input type="text" name="arrC_1[po_mobile_2]" onkeypress="return isNumberKey(event)" name="txtNumber" maxlength="10"
                              class="form-control" id="q22" placeholder="Mobile number 2 of Programme Officer 1"
                              value="<?php echo $rowC['po_mobile_2']; ?>"  readonly >
                              <label for="q22" id="f3" style="margin-left:1rem;">Mobile number 2 of Programme Officer 1</label>
                          </div>
                          
                        </div>

                        <div class="col-sm-12 col-md-6 col-xl-6">
                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <input type="text" name="arrC_1[subject_taught]" class="form-control" id="q23" placeholder="Subject you taught in college"
                            value="<?php echo $rowC['subject_taught']; ?>"  readonly >
                            <label for="q23" style="margin-left:1rem;">Subject you taught in college</label>
                          </div>
                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Date of appointment as PO</span>
                              </div>
                              <input type="date" name="arrC_1[date_appointment_po]" class="form-control" placeholder="" aria-label="Username"
                                aria-describedby="basic-addon1" style="padding:0rem;padding-left:0.5em;"
                                value="<?php echo $rowC['date_appointment_po']; ?>"  readonly >
                            </div>
                          </div>

                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <label class="input-group-text" for="nsspo1">Done NSS Orientation at
                                  TISS/ETI ?</label>
                              </div>
                              <select class="custom-select" name="arrC_1[nss_orientation]" id="nsspo1" onchange="hidepo1()" disabled>
                                <option disabled selected>Choose</option>
                                <option value="Yes" <?php echo ($rowC["nss_orientation"] === "Yes")?"selected" : ""; ?>>Yes</option>
                                <option value="No" <?php echo ($rowC["nss_orientation"] === "No")?"selected" : ""; ?>>No</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group col-sm-12 col-md-12 col-xl-12" id="orienpo1" <?php echo ($rowC["nss_orientation"] !== "Yes")?"style='display:none;'" : ""; ?>>
                            <div class="row">
                              <div class="form-group col-sm-12 col-md-6 col-xl-6">
                                <input type="text" name="arrC_1[year]" class="form-control" onkeypress="return isNumberKey(event)" id="po11" placeholder="Year"
                                value="<?php echo $rowC['year']; ?>"  readonly >
                                <label for="po11" style="margin-left:1rem;">Year</label>
                              </div>

                              <div class="form-group col-sm-12 col-md-6 col-xl-6">
                                <input type="text" name="arrC_1[course_count]" onkeypress="return isNumberKey(event)" class="form-control" id="po12" placeholder="Number of course"
                                value="<?php echo $rowC['course_count']; ?>"  readonly >
                                <label for="po12" style="margin-left:1rem;">Number of course</label>
                              </div>
                            </div>
                          </div>

                        </div>

                      </div>

                    </td>

                  </tr>
                  <tr>
                    <!-- <th scope="row">2</th> -->
                    <td>
                    <?php $rowC=mysqli_fetch_assoc($res_select_po); ?>
                      <div class="row">

                        <div class="col-sm-12 col-md-6 col-xl-6">

                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <input type="text" name="arrC_2[po_name]" class="form-control" id="q26" placeholder="Name of Programme Officer 2"
                            value="<?php echo $rowC['po_name'];?>"  readonly >
                            <label for="q26" style="margin-left:1rem;">Name of Programme Officer 2</label>
                          </div>
                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <input type="text" name="arrC_2[po_email]" class="form-control" id="q27" placeholder="Email ID of Programme Officer 2"
                            value="<?php echo $rowC['po_email']; ?>"  readonly >
                            <label for="q27" id="f4" style="margin-left:1rem;">Email ID of Programme Officer 2</label>
                          </div>

                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <input type="text" name="arrC_2[po_mobile_1]" onkeypress="return isNumberKey(event)" name="txtNumber" maxlength="10"
                              class="form-control" id="q28" placeholder="Mobile number 1 of Programme Officer 2"
                              value="<?php echo $rowC['po_mobile_1']; ?>"  readonly >
                              <label for="q28" id="f5" style="margin-left:1rem;">Mobile Number 1 of Programme Officer 2</label>
                          </div>

                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <input type="text" name="arrC_2[po_mobile_2]" onkeypress="return isNumberKey(event)" name="txtNumber" maxlength="10"
                              class="form-control" id="q29" placeholder="Mobile number 2 of Programme Officer 2"
                              value="<?php echo $rowC['po_mobile_2']; ?>"  readonly >
                              <label for="q29" id="f6" style="margin-left:1rem;">Mobile Number 2 of Programme Officer 2</label>
                          </div>


                        </div>

                        <div class="col-sm-12 col-md-6 col-xl-6">
                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <input type="text" name="arrC_2[subject_taught]" class="form-control" id="q30" placeholder="Subject you taught in college"
                            value="<?php echo $rowC['subject_taught']; ?>"  readonly >
                            <label for="q30" style="margin-left:1rem;">Subject you taught in college</label>
                          </div>
                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Date of appointment as PO</span>
                              </div>
                              <input type="date" name="arrC_2[date_appointment_po]" class="form-control" placeholder="" aria-label="Username"
                                aria-describedby="basic-addon1" style="padding:0rem;padding-left:0.5em;"
                                value="<?php echo $rowC['date_appointment_po'];?>"  readonly >
                            </div>
                          </div>
                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <label class="input-group-text" for="nsspo2">Done NSS Orientation at
                                  TISS/ETI ?</label>
                              </div>
                              <select class="custom-select" name="arrC_2[nss_orientation]" id="nsspo2" onchange="hidepo2()" disabled>
                                <option disabled selected>Choose</option>
                                <option value="Yes"  <?php echo ($rowC["nss_orientation"] === "Yes")?"selected" : ""; ?>>Yes</option>
                                <option value="No" <?php echo ($rowC["nss_orientation"] === "No")?"selected" : ""; ?>>No</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group col-sm-12 col-md-12 col-xl-12" id="orienpo2" <?php echo ($rowC["nss_orientation"] !== "Yes")?"style='display:none;'" : ""; ?>>
                            <div class="row">
                              <div class="form-group col-sm-12 col-md-6 col-xl-6">
                                <input type="text" name="arrC_2[year]" class="form-control" onkeypress="return isNumberKey(event)" id="po21" placeholder="Year"
                                value="<?php echo $rowC['year']; ?>"  readonly >
                                <label for="po21" style="margin-left:1rem;">Year</label>

                              </div>

                              <div class="form-group col-sm-12 col-md-6 col-xl-6">
                                <input type="text" name="arrC_2[course_count]" onkeypress="return isNumberKey(event)" class="form-control" id="po22" placeholder="Number of course"
                                value="<?php echo $rowC['course_count']; ?>"  readonly >
                                <label for="po22" style="margin-left:1rem;">Number of course</label>
                              </div>
                            </div>
                          </div>


                        </div>

                      </div>



                    </td>

                  </tr>
                  <?php $rowC=mysqli_fetch_assoc($res_select_po); ?>
                  <tr>
                    <!-- <th scope="row">3</th> -->
                    <td>
                      <div class="row">

                        <div class="col-sm-12 col-md-6 col-xl-6">

                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <input type="text" name="arrC_3[po_name]" class="form-control" id="q33" placeholder="Name of Programme Officer 3"
                            value="<?php echo $rowC['po_name']; ?>"  readonly >
                            <label for="q33" style="margin-left:1rem;">Name of Programme Officer 3</label>
                          </div>
                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <input type="text" name="arrC_3[po_email]" class="form-control" id="q34" placeholder="Email ID of Programme Officer 3"
                            value="<?php echo $rowC['po_email']; ?>"  readonly >
                            <label for="q34" id="f7" style="margin-left:1rem;">Email ID of Programme Officer 3</label>
                          </div>

                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <input type="" name="arrC_3[po_mobile_1]" class="form-control" id="q35" onkeypress="return isNumberKey(event)" type="text"
                              name="txtNumber" maxlength="10" placeholder="Mobile number 1 of Programme Officer 3"
                              value="<?php echo $rowC['po_mobile_1']; ?>"  readonly >
                              <label for="q35" id="f8" style="margin-left:1rem;">Mobile Number 1 of Programme Officer 3</label>
                          </div>

                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <input type="text" name="arrC_3[po_mobile_2]" onkeypress="return isNumberKey(event)" name="txtNumber" maxlength="10"
                              class="form-control" id="q36" placeholder="Mobile number 2 of Programme Officer 3"
                              value="<?php echo $rowC['po_mobile_2']; ?>"  readonly >
                              <label for="q36" id="f9" style="margin-left:1rem;">Mobile Number 2 of Programme Officer 3</label>
                          </div>


                        </div>

                        <div class="col-sm-12 col-md-6 col-xl-6">
                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <input type="text" name="arrC_3[subject_taught]" class="form-control" id="qq1" placeholder="Subject you taught in college"
                            value="<?php echo $rowC['subject_taught']; ?>"  readonly >
                            <label for="qq1" style="margin-left:1rem;">Subject you taught in college</label>
                          </div>
                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Date of appointment as PO</span>
                              </div>
                              <input type="date" name="arrC_3[date_appointment_po]" style="padding:0rem;padding-left:0.5em;" class="form-control" placeholder="" aria-label="Username"
                                aria-describedby="basic-addon1"  value="<?php echo $rowC['date_appointment_po']; ?>"  readonly >
                            </div>
                          </div>
                          <div class="form-group col-sm-12 col-md-12 col-xl-12">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <label class="input-group-text" for="nsspo3">Done NSS Orientation at
                                  TISS/ETI ?</label>
                              </div>
                              <select class="custom-select" name="arrC_3[nss_orientation]" id="nsspo3" onchange="hidepo3()" disabled>
                                <option disabled selected>Choose</option>
                                <option value="Yes" <?php echo ($rowC["nss_orientation"] === "Yes")?"selected" : ""; ?>>Yes</option>
                                <option value="No"  <?php echo ($rowC["nss_orientation"] === "No")?"selected" : ""; ?>>No</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group col-sm-12 col-md-12 col-xl-12" id="orienpo3" <?php echo ($rowC["nss_orientation"] !== "Yes")?"style='display:none;'" : ""; ?>>
                            <div class="row">
                              <div class="form-group col-sm-12 col-md-6 col-xl-6">
                                <input type="text" name="arrC_3[year]" onkeypress="return isNumberKey(event)" class="form-control" id="po31" placeholder="Year"
                                value="<?php echo $rowC['year']; ?>"  readonly >
                                <label for="po31" style="margin-left:1rem;">Year</label>
                              </div>

                              <div class="form-group col-sm-12 col-md-6 col-xl-6">
                                <input type="text" name="arrC_3[course_count]" onkeypress="return isNumberKey(event)" class="form-control" id="po32" placeholder="Number of course"
                                value="<?php echo $rowC['course_count']; ?>"  readonly >
                                <label for="po32" style="margin-left:1rem;">Number of course</label>
                              </div>
                            </div>
                          </div>

                        </div>

                      </div>

                    </td>

                  </tr>
                </tbody>
              </table>

            </div>
          </div>
        </div>
        <div class="col-sm-1">
        </div>
      </div>
<!-- PO END -->
<!-- Statistical Details of the Previous Start cardD -->
      <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-12">
          <div class="card">
            <h5 class="card-header">D. Brief Statistical Details of the Previous Year</h5>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr class="table-active">
                    <th class="mytablehead">Regular Activity</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="form-group">
                        <input type="" name="arrA[prev_student_count]" class="form-control" id="q39" onkeypress="return isNumberKey(event)" type="text"
                          placeholder="No. of Student Enrolled in Regular NSS" value="<?php echo $rowA['prev_student_count']; ?>"  readonly >
                          <label for="q39" id="f10" style="margin-left:0rem;">No. of Student Enrolled in Regular NSS</label>
                      </div>
                      <div class="form-group">
                        <input type="text" name="arrA[prev_adopted_village]" class="form-control" id="q40" placeholder="Name of the Adopted Area/Village" 
                        value="<?php echo $rowA['prev_adopted_village']; ?>"  readonly >
                        <label for="q40" id="f11" style="margin-left:0rem;">Name of the adopted Area/Village</label>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12 col-md-6 col-xl-6">
                          <input type="text" name="arrA[prev_village_taluka]" class="form-control" id="q41" placeholder="Taluka"
                          value="<?php echo $rowA['prev_village_taluka']; ?>"  readonly >
                          <label for="q41" style="margin-left:1rem;">Taluka</label>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-xl-6">
                          <input type="text" name="arrA[prev_village_district]" class="form-control" id="42" placeholder="District"
                          value="<?php echo $rowA['prev_village_district']; ?>"  readonly >
                          <label for="q42" style="margin-left:1rem;">District</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="" name="arrA[prev_student_120hrs]" class="form-control" id="q43" onkeypress="return isNumberKey(event)" type="text" maxlength="3" placeholder="No. of Student Completed 120 hrs"
                        value="<?php echo $rowA['prev_student_120hrs']; ?>"  readonly >
                        <label for="q43" id="f12" style="margin-left:0rem;">No. of Student Completed 120 hrs</label>
                      </div>
                      <div class="form-group">
                        <input type="" name="arrA[prev_student_240hrs]" class="form-control" id="q44" onkeypress="return isNumberKey(event)" type="text" maxlength="3" placeholder="No. of Student Completed 240 hrs"
                        value="<?php echo $rowA['prev_student_240hrs']; ?>"  readonly >
                        <label for="q44" id="f13" style="margin-left:0rem;">No. of student completed 240 hrs</label>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-12 col-md-6 col-xl-6">
                            <h6 class="text-muted">Audited statement submitted</h6>
                          </div>
                          <div class="col-sm-12 col-md-6 col-xl-6">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" name="arrA[prev_audit_adopt]" type="radio" value="YES" id="inlineRadio1" <?php echo ($rowA["prev_audit_adopt"] === "YES")?"checked" : ""; ?> disabled>
                              <label class="form-check-label" for="inlineRadio1">YES</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" name="arrA[prev_audit_adopt]" type="radio" value="NO" id="inlineRadio2" <?php echo ($rowA["prev_audit_adopt"] === "NO")?"checked" : ""; ?> disabled>
                              <label class="form-check-label" for="inlineRadio2">NO</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
                <thead>
                  <tr class="table-active">
                    <th class="mytablehead">Special Camp</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="form-group">
                        <input type="" name="arrA[prev_volunteer_camp]" class="form-control" id="q45" onkeypress="return isNumberKey(event)" type="text" maxlength="5"
                        value="<?php echo $rowA['prev_volunteer_camp']; ?>"  readonly  placeholder="No. of Student attended Special Camp" >
                        <label for="q45" id="f14" style="margin-left:0rem;">No. of student attended special camp</label>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-12 col-md-6 col-xl-4">&nbsp;Date of the camp, from</div>
                          <div class="col-sm-12 col-md-6 col-xl-3"><input type="date" name="arrA[prev_starting_date_camp]" class="form-control" id="" style="padding:0rem;padding-left:1em;" value="<?php echo $rowA['prev_starting_date_camp']; ?>"  readonly ></div>
                          <div class="col-sm-12 col-md-6 col-xl-1">&nbsp;to</div>
                          <div class="col-sm-12 col-md-6 col-xl-3"><input type="date" name="arrA[prev_ending_date_camp]" class="form-control" id="" style="padding:0rem;padding-left:1em;" value="<?php echo $rowA['prev_ending_date_camp']; ?>"  readonly ></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="text" name="arrA[prev_venue_camp]" class="form-control" id="q46" placeholder="Venue of the Camp" value="<?php echo $rowA['prev_venue_camp']; ?>"  readonly  >
                        <label for="q46" style="margin-left:0rem;">Venue of the camp</label>
                      </div>
                      <div class="form-group">
                        <input type="text" name="arrA[prev_post_camp]" class="form-control" id="q47" placeholder="At/Post" value="<?php echo $rowA['prev_post_camp']; ?>"  readonly >
                        <label for="q47" style="margin-left:0rem;">At/Post</label>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12 col-md-6 col-xl-6">
                          <input type="text" name="arrA[prev_taluka_camp]" class="form-control" id="q48" placeholder="Taluka" value="<?php echo $rowA['prev_taluka_camp']; ?>"  readonly >
                          <label for="q48" style="margin-left:1rem;">Taluka</label>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-xl-6">
                          <input type="text" name="arrA[prev_district_camp]" class="form-control" id="q49" placeholder="District" value="<?php echo $rowA['prev_district_camp']; ?>"  readonly >
                          <label for="q49" style="margin-left:1rem;">District</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12 col-md-6 col-xl-6">
                          <h6 class="text-muted">&nbsp;Audited statement submitted</h6>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-6">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" name="arrA[prev_audit_camp]" type="radio" value="YES" id="inlineRadio1"  <?php echo ($rowA["prev_audit_camp"] === "YES")?"checked" : ""; ?> disabled>
                            <label class="form-check-label" for="inlineRadio1">YES</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" name="arrA[prev_audit_camp]" type="radio" value="NO" id="inlineRadio2" <?php echo ($rowA["prev_audit_camp"] === "NO")?"checked" : ""; ?> disabled>
                            <label class="form-check-label" for="inlineRadio2">NO</label>
                          </div>
                        </div>
                      </div>
                      <br>           
          </td>
          </tr>
          </tbody>
          </table>
        </div>     
          </div>
        </div>
          <div class="col-sm-1">
          </div>
    </div>
<!--cardD ends-->
<!--cardE-->
    <div class="row">
      <div class="col-sm-1">
      </div>
      <div class="col-sm-12">
        <div class="card">
          <h5 class="card-header">E. Details of the students leaders for the year</h5>
          <div class="card-body">
            <p>Male/Female students on every 100 enrolled student expected to attend the leadership training camp.</p>
            <!-- <thead>
                  <tr class="table-active">
                    <th>Sr No.</th>
                    
                  </tr>
                </thead> -->
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>
                    <div class="row">
                      <div class="form-group col-sm-12 col-md-6 col-xl-3">
                        <input type="text" name="arrD_1[leader_name]" class="form-control" id="q50" placeholder="Name"
                        value="<?php echo $rowD['leader_name'] ?>"  readonly >
                        <label for="q50" style="margin-left:1rem;">Name</label>
                      </div>
                      <!-- </td><td>                      -->
                      <div class="form-group col-sm-12 col-md-6 col-xl-3">
                        <input type="text" name="arrD_1[class]" class="form-control" id="q51" placeholder="Class"
                        value="<?php echo $rowD['class'] ?>"  readonly >
                        <label for="q51" style="margin-left:1rem;">Class</label>
                      </div>
                      <!-- </td><td> -->
                      <div class="form-group col-sm-12 col-md-6 col-xl-3">                        
                        <input type="" name="arrD_1[leader_mobile]" class="form-control" id="q52" onkeypress="return isNumberKey(event)" type="text"
                    name="txtNumber" maxlength="10" placeholder="Mobile No."
                    value="<?php echo $rowD['leader_mobile'] ?>"  readonly >
                    <label for="q52" style="margin-left:1rem;">Mobile number</label>
                      </div>
                      <!-- </td><td>              -->
                      <div class="form-group col-sm-12 col-md-6 col-xl-3">
                        <input type="email" name="arrD_1[leader_email]" class="form-control" id="q53" placeholder="Email ID"
                        value="<?php echo $rowD['leader_email'] ?>"  readonly >
                        <label for="q53" style="margin-left:1rem;">Email ID</label>
                      </div>
                    </div>
                  </td>
                </tr>
                <?php  $rowD=mysqli_fetch_assoc($res_select_leader)?>
                <tr>
                  <th scope="row">2</th>
                  <td>
                    <div class="row">
                      <div class="form-group col-sm-12 col-md-6 col-xl-3">
                        <input type="text" name="arrD_2[leader_name]" class="form-control" id="q54" placeholder="Name"
                        value="<?php echo $rowD['leader_name'] ?>"  readonly >
                        <label for="q54" style="margin-left:1rem;">Name</label>
                      </div>
                      <!-- </td><td>                      -->
                      <div class="form-group col-sm-12 col-md-6 col-xl-3">
                        <input type="text" name="arrD_2[class]" class="form-control" id="q55" placeholder="Class"
                        value="<?php echo $rowD['class'] ?>"  readonly >
                        <label for="q55" style="margin-left:1rem;">Class</label>
                      </div>
                      <!-- </td><td> -->
                      <div class="form-group col-sm-12 col-md-6 col-xl-3">
                        <input type="" name="arrD_2[leader_mobile]" class="form-control" id="q56" onkeypress="return isNumberKey(event)" type="text"
                    name="txtNumber" maxlength="10" placeholder="Mobile No."
                    value="<?php echo $rowD['leader_mobile'] ?>"  readonly >
                    <label for="q56" style="margin-left:1rem;">Mobile number</label>
                      </div>
                      <!-- </td><td>              -->
                      <div class="form-group col-sm-12 col-md-6 col-xl-3">
                        <input type="email" name="arrD_2[leader_email]" class="form-control" id="q57" placeholder="Email ID"
                        value="<?php echo $rowD['leader_email'] ?>"  readonly >
                        <label for="q57" style="margin-left:1rem;">Email ID</label>
                      </div>
                    </div>
                  </td>
                </tr>
                <?php  $rowD=mysqli_fetch_assoc($res_select_leader)?>
                <tr>
                  <th scope="row">3</th>
                  <td>
                    <div class="row">
                      <div class="form-group col-sm-12 col-md-6 col-xl-3">
                        <input type="text" name="arrD_3[leader_name]" class="form-control" id="q58" placeholder="Name"
                        value="<?php echo $rowD['leader_name'] ?>"  readonly >
                        <label for="q58" style="margin-left:1rem;">Name</label>
                      </div>
                      <!-- </td><td>                      -->
                      <div class="form-group col-sm-12 col-md-6 col-xl-3">
                        <input type="text" name="arrD_3[class]" class="form-control" id="q59" placeholder="Class"
                        value="<?php echo $rowD['class'] ?>"  readonly >
                        <label for="q59" style="margin-left:1rem;">Class</label>
                      </div>
                      <!-- </td><td> -->
                      <div class="form-group col-sm-12 col-md-6 col-xl-3">
                        <input type="" name="arrD_3[leader_mobile]" class="form-control" id="q60" onkeypress="return isNumberKey(event)" type="text"
                    name="txtNumber" maxlength="10" placeholder="Mobile No."
                    value="<?php echo $rowD['leader_mobile'] ?>"  readonly >
                    <label for="q60" style="margin-left:1rem;">Mobile number</label>
                      </div>
                      <!-- </td><td>              -->
                      <div class="form-group col-sm-12 col-md-6 col-xl-3">
                        <input type="email" name="arrD_3[leader_email]" class="form-control" id="q61" placeholder="Email ID"
                        value="<?php echo $rowD['leader_email'] ?>"  readonly >
                        <label for="q61" style="margin-left:1rem;">Email ID</label>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-sm-1">
      </div>
    </div>
<!--cardE ends-->
<!--cardF-->
    <div class="row">
      <div class="col-sm-1">
      </div>
      <div class="col-sm-12">
        <div class="card">
          <h5 class="card-header">F. Information about the Adopted Area:- It is expected that….</h5>
          <div class="card-body">
            <p><b>&nbsp;&nbsp;&nbsp;a. Every NSS volunteer must work at least 80 hours in the adopted area in two
                different projects.<br>
                &nbsp;&nbsp;&nbsp;b. Every NSS unit must have One adopted area(i.e. if a College has 3 Units, it
                must have 3 adopted areas).</b>
              <br> Adopted Area for Regular Activities (with proper address and name of the contact person).

             
             
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>
                      <div class="row">
                        <div class="form-group col-sm-12 col-md-6 col-xl-12">
                          <input type="text" name="arrB_1[area_address]" class="form-control" id="q62" placeholder="Exact Address" value="<?php echo $rowB['area_address']; ?>"  readonly >
                            <label for="q62" style="margin-left:1rem;">Exact Address</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12 col-md-6 col-xl-6">
                          <input type="text" name="arrB_1[area_local_person]" class="form-control" id="63" placeholder="Name of local contact person" value="<?php echo $rowB['area_local_person']; ?>"  readonly >
                          <label for="q63" style="margin-left:1rem;">Name of local contact person</label>
                        </div>
                        <!-- </td><td>                      -->
                        <div class="form-group col-sm-12 col-md-6 col-xl-6">
                          <input type="" name="arrB_1[area_local_contact]" class="form-control" id="64" onkeypress="return isNumberKey(event)" type="text" maxlength="10" placeholder="Contact No."
                          value="<?php echo $rowB['area_local_contact']; ?>"  readonly >
                          <label for="q64" style="margin-left:1rem;">Contact No.</label>
                        </div>
                       
                      </div>
                    </td>
                  </tr>
                  
                 
                </tbody>
              </table>

                    <?php $rowB=mysqli_fetch_assoc($res_select_village); ?>
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th scope="row">2</th>
                    <td>
                      <div class="row">
                        <div class="form-group col-sm-12 col-md-6 col-xl-12">
                          <input type="text" name="arrB_2[area_address]" class="form-control" id="q66" placeholder="Exact Address"  value="<?php echo $rowB['area_address']; ?>"  readonly >
                          <label for="q66" style="margin-left:1rem;">Exact Address </label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12 col-md-6 col-xl-6">
                          <input type="text" name="arrB_2[area_local_person]" class="form-control" id="q67" placeholder="Name of local contact person"  value="<?php echo $rowB['area_local_person']; ?>"  readonly >
                          <label for="q67" style="margin-left:1rem;">Name of local contact person</label>
                        </div>
                        <!-- </td><td>                      -->
                        <div class="form-group col-sm-12 col-md-6 col-xl-6">
                          <input type="" name="arrB_2[area_local_contact]" class="form-control" id="q68" onkeypress="return isNumberKey(event)" type="text" maxlength="10" placeholder="Contact No."
                          value="<?php echo $rowB['area_local_contact']; ?>"  readonly >
                          <label for="q68" style="margin-left:1rem;">Contact No.</label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  
                    
                </tbody>
              </table>


              <?php $rowB=mysqli_fetch_assoc($res_select_village); ?>
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th scope="row">3</th>
                    <td>
                      <div class="row">
                        <div class="form-group col-sm-12 col-md-6 col-xl-12">
                          <input type="text" name="arrB_3[area_address]" class="form-control" id="q69" placeholder="Exact Address" value="<?php echo $rowB['area_address']; ?>"  readonly >
                          <label for="q69" style="margin-left:1rem;">Exact Address</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12 col-md-6 col-xl-6">
                          <input type="text" name="arrB_3[area_local_person]" class="form-control" id="q70" placeholder="Name of local contact person" value="<?php echo $rowB['area_local_person']; ?>"  readonly >
                          <label for="q70" style="margin-left:1rem;">Name of local contact person</label>
                        </div>
                        <!-- </td><td>                      -->
                        <div class="form-group col-sm-12 col-md-6 col-xl-6">
                          <input type="" name="arrB_3[area_local_contact]" class="form-control" id="q71" onkeypress="return isNumberKey(event)" type="text" maxlength="10" placeholder="Contact No."
                          value="<?php echo $rowB['area_local_contact']; ?>"  readonly >
                          <label for="q71" style="margin-left:1rem;">Contact No.</label>
                        </div>
                       
                      </div>
                    </td>
                  </tr>
                  <tr>
                    
                </tbody>
              </table>



              Adopted Area / Village for <b><u>Special Camping under Swachh Bharat Abhiyan / MUNIJAN</u></b>
              <br><br>
              <div class="form-group">
                <input type="text" name="arrA[sba_accom_camp]" class="form-control" id="q72" placeholder="Camp venue/place of accommodation"
                value="<?php  echo $rowA['sba_accom_camp']; ?>"  readonly >
                <label for="q72" style="margin-left:0rem;">Camp venue/place of accommodation</label>
              </div>
              <div class="form-group">
                <input type="text" name="arrA[sba_village_camp]" class="form-control" id="q73" placeholder="Name of the village. slum "
                value="<?php  echo $rowA['sba_village_camp']; ?>"  readonly >
                <label for="q73" style="margin-left:0rem;">Name of the village. slum</label>
              </div>

              <div class="row">
                <div class="form-group col-sm-12 col-md-4 col-xl-4">
                  <input type="" name="arrA[sba_atpost_camp]" class="form-control" id="q74" type="text"
                    name="txtNumber" placeholder="At Post"
                    value="<?php  echo $rowA['sba_atpost_camp']; ?>"  readonly >
                    <label for="q74" style="margin-left:1rem;">At Post</label>
                </div>
                <div class="form-group col-sm-12 col-md-4 col-xl-4">
                  <input type="" name="arrA[sba_taluka_camp]" class="form-control" id="q75"  type="text"
                    name="txtNumber" placeholder="Taluka"
                    value="<?php  echo $rowA['sba_taluka_camp']; ?>"  readonly >
                    <label for="q75" style="margin-left:1rem;">Taluka</label>
                </div>
                <div class="form-group col-sm-12 col-md-4 col-xl-4">
                  <input type="" name="arrA[sba_district_camp]" class="form-control" id="q76"  type="text"
                    name="txtNumber" placeholder="District"
                    value="<?php  echo $rowA['sba_district_camp']; ?>"  readonly >
                    <label for="q76" style="margin-left:1rem;">District</label>
                </div>
              </div>
             
              

              <div class="row">
                <div class="form-group col-sm-12 col-md-6 col-xl-6">
                  <input type="" name="arrA[sba_per_name_camp]" class="form-control" id="q77"  type="text" placeholder="Name of the contact person"
                  value="<?php  echo $rowA['sba_per_name_camp']; ?>"  readonly >
                  <label for="q77" style="margin-left:1rem;">Name of the contact person</label>
                    
                </div>
                <div class="form-group col-sm-12 col-md-6 col-xl-6">
                  <input type="" name="arrA[sba_per_contact_camp]" class="form-control" id="q78" onkeypress="return isNumberKey(event)" type="text" maxlength="10" 
                  placeholder="Mobile/Landline Number" value="<?php  echo $rowA['sba_per_contact_camp']; ?>"  readonly >
                  <label for="q78" style="margin-left:1rem;">Mobile/Landline Number</label>
                </div>
                
              </div>



            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-1">
      </div>
    </div>
<!--cardF ends-->
<!--cardG-->   
    <div class="row">
      <div class="col-sm-1">
      </div>
      <div class="col-sm-12">
        <div class="card">
          <h5 class="card-header">G. Information about the NSS Advisory Committee</h5>
          <div class="card-body">

<div class="table-responsive">
            <table class="table table-hover table-borderless">
              <thead>
                <tr>
                  <th scope="col">Sr</th>
                  <th scope="col">Composition</th>
                  <th scope="col">Name of the Member</th>
                  <th scope="col">Contact details</th>
                </tr>
              </thead>
              <tbody>


                <tr>
                  <th scope="row">1</th>
                  <td>Principal,<br><b>Chairperson<b></td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[name1]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['name1']; ?>"  readonly >
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[con1]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['con1']; ?>"  readonly >
                    </div>
                  </td>
                </tr>

                
                <tr>
                  <th scope="row">2</th>
                  <td>Staff member having social<br>work background - <b>Member</b></td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[name2]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['name2']; ?>"  readonly >
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[con2]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['con2']; ?>"  readonly >
                    </div>
                  </td>
                </tr>
                
                <tr>
                  <th scope="row">3</th>
                  <td>Staff member having social<br>work background - <b>Member</b></td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[name3]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['name3']; ?>"  readonly >
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[con3]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['con3']; ?>"  readonly >
                    </div>
                  </td>
                </tr>
                
                <tr>
                  <th scope="row">4</th>
                  <td>Representative from the Development<br>Area-<b>Member</b></td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[name4]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['name4']; ?>"  readonly >
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[con4]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['con4']; ?>"  readonly >
                    </div>
                  </td>
                </tr>
                
                <tr>
                  <th scope="row">5</th>
                  <td>Representative from the Adopted<br>Area-<b>Member</b></td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[name5]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['name5']; ?>"  readonly >
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[con5]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['con5']; ?>"  readonly >
                    </div>
                  </td>
                </tr>
                
                <tr>
                  <th scope="row">6</th>
                  <td>NSS student Leader(Male)</td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[name6]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['name6']; ?>"  readonly >
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[con6]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['con6']; ?>"  readonly >
                    </div>
                  </td>
                </tr>

              
                <tr>
                  <th scope="row">7</th>
                  <td>NSS student Leader(Female)</td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[name7]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['name7']; ?>"  readonly >
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[con7]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['con7']; ?>"  readonly >
                    </div>
                  </td>
                </tr>

               
                <tr>
                  <th scope="row">8</th>
                  <td>NSS Dist. Coordinator(invitee)<br><b>University Representative</b></td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[name8]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['name8']; ?>"  readonly >
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[con8]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['con8']; ?>"  readonly >
                    </div>
                  </td>
                </tr>

                <tr>
                  <th scope="row">9</th>
                  <td>NSS Programme Officer,<br><b>Secretary</b></td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[name9]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['name9']; ?>"  readonly >
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <input type="text" name="arrE[con9]" class="form-control" id="" placeholder=""
                      value="<?php echo $rowE['con9']; ?>" readonly>                      
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
</div>
          </div>
        </div>
      </div>
      <div class="col-sm-1">
      </div>
    </div>
<!--cardG ends-->
<!--cardH-->
    <div class="row">
      <div class="col-sm-1">
      </div>
      <div class="col-sm-12">
        <div class="card">
          <h5 class="card-header">H. Principal's Desk</h5>
          <div class="card-body">
            <p><b>Suggestion
            <div class="form-group">
                  <input type="text" class="form-control"  style="display:none;"
                    placeholder="a. To improve the efficiency of NSS Activities" >
                    
                </div>
                <div class="form-group">
                  <input type="text" name="arrA[suggestion_improve]" class="form-control" id="q79"
                    placeholder="a. To improve the efficiency of N.S.S Activities" value="<?php echo $rowA['suggestion_improve']; ?>"  readonly required>
                    <label for="q79" id="f15" style="margin-left:0rem;">a. To improve the efficiency of NSS Activities</label>
                </div>
                <div class="form-group">
                  <input type="text" name="arrA[expectation]" class="form-control" id="q80" placeholder="b. Expectation from University NSS cell"
                  value="<?php echo $rowA['expectation']; ?>"  readonly required >
                  <label for="q80" id="f16" style="margin-left:0rem;">b. Expectation from University NSS cell</label>
                </div>

                <hr>
               <b> Undertaking - I undertake ....</b>              
              <br>
              a) To accept the allocated strength to our College NSS unit & to conduct the Special Camp with 50% of the
              enrolled strength of NSS Volunteers.
              <br>
              b) To provide required infrastructure and administrative support to the NSS Unit for its smooth function.
              <br>
              c) To appoint the NSS Programme Officer as per Unit (Male/Female) as per guidelines provided by University
              NSS cell and to depute Untrained Programme Officers
              for the Orientation/Refresher/Training at ETI, Ahmednagarduring the year & to attend meeting as and when
              called by the University NSS Cell/ State NSS Cell/Regional
              NSS Directorate.
              <br>
              d) To deputy NSS volunteers for various
              programmes/workshops/meetings/leadership/camp/emergency/relief/etc, related work as and when called by the
              University NSS Cell.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-1">
      </div>
    </div>
<!--cardH ends-->
<!--last card-->
    <div class="row">
      <div class="col-sm-1">
      </div>
      <div class="col-sm-12">
      <div class="card">

        <div class="card-body">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-xl-6">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">College Code / File No.</span>
                </div>
                <input type="text" name="college_code" class="form-control" placeholder="" aria-label="Username"
                  aria-describedby="basic-addon1" value="<?php echo $_SESSION['college_code']; ?>"  readonly readonly >
              </div>
            </div>
          </div>

            <br>
            <div class="row">
              <div class="col-sm-12 col-md-6 col-xl-3">
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Date&nbsp;</span>
                            </div>
                            <input type="date" name="arrA[date_application]" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"
                            value="<?php echo $rowA['date_application']; ?>"  readonly >
                          </div>
              </div>
              
              <div class="col-sm-12 col-md-6 col-xl-3">
              
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Place</span>
                            </div>
                            <input type="text" name="arrA[place_application]" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1"
                            value="<?php echo $rowA['place_application']; ?>"  readonly >
                          </div>
              </div>              
            </div>
              <br>
                        <div class ="row">
                                  <div class="col-sm-12 col-md-6 col-xl-6" style="margin-left:1rem;">
              
              
              
                                  <p><img id="output" src="data:image/jpeg;base64,<?php echo base64_encode($rowA['img1'] ) ?>"  readonly class="pic"  width="250" height="150" style="border:0px;"/></p>
                                  <p><input type="file"  accept="image/*" name="image" id="file" style="display: none;" onchange="loadFile(event)" disabled ></p>
                                  <p><label for="file"  style="cursor: pointer;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i> College seal  </label></p>
              
              
              
                                </div>
              
                                <div class="col-sm-12 col-md-12 col-xl-12" style="margin-left:1rem;">
                                
                                  
                                  <p><img id="outputsign" src="data:image/*;base64,<?php echo base64_encode($rowA['img2'])?>"  readonly class="pic"  width="250" height="150" /></p>
                                  <p><input type="file"  accept="image/*" name="imagei" id="filei" style="display: none;" onchange="loadFilei(event)" disabled></p>
                                  <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="filei"  style="cursor: pointer;" >   Signature of Principal  </label></p>
                                  
                                  
                                </div>      
              
                        </div>
                        <?php
                        if($rowA['verification']== '0')
                          {
                        ?>
               <div class="d-flex justify-content-center">
                   <button type="submit" class="mybtn" id="approve" name="submit">Approve</button>
                </div>
                  <?php 
                          }
                          else{

                            ?>
                               
                                <p class="alert alert-primary" style="text-align: center">Already Approved</p>
                               
                            <?php
                          }
                  ?>
          </div>
        </div>
      </div>

      <div class="col-sm-1">
      </div>
    </div>  
<!--last card ends-->  
</div>            
  </form>
  </div>
<?php
}
else
{
  ?>
  <div class="alert alert-danger "style="text-align: center">Programme Officer Has Not Filled and Submitted The Proforma - I</div>
  <div class="alert  "style="text-align: center">You will be redirected to home page in  3 seconds</div>
  
  <script>
        var timer = setTimeout(function() {
            window.location='index'
            }, 3000);
    </script>
  <?php
}
?>
  </div>
  <script>
    var loadFile = function(event) {
      var image = document.getElementById('output');
      image.src = URL.createObjectURL(event.target.files[0]);
    };
  
  
    var loadFilei = function(event) {
      var imagei = document.getElementById('outputsign');
      imagei.src = URL.createObjectURL(event.target.files[0]);
    };
  

    function hide()
{
    if (document.getElementById("minor").value=="Minority")
    {
        document.getElementById("ling").style.display="flex";
        document.getElementById("inputGroupSelect02").required=true;
     
       
    }
    else {
        document.getElementById("ling").style.display="none";
        document.getElementById("inputGroupSelect02").required=false;
        
    }
  
}  

function hidepo1()
{
    if (document.getElementById("nsspo1").value=="Yes")
    {
        document.getElementById("orienpo1").style.display="flex";
        document.getElementById("po11").required=true;
        document.getElementById("po12").required=true;

    }
    else {
        document.getElementById("orienpo1").style.display="none";
        document.getElementById("po11").required=false;
        document.getElementById("po12").required=false;
        document.getElementById("po11").value='';
        document.getElementById("po12").value='';
    }
  
}  

function hidepo2()
{
    if (document.getElementById("nsspo2").value=="Yes")
    {
        document.getElementById("orienpo2").style.display="flex";
        document.getElementById("po21").required=true;
        document.getElementById("po22").required=true;
    }
    else {
        document.getElementById("orienpo2").style.display="none";
        document.getElementById("po21").required=false;
        document.getElementById("po22").required=false;
        document.getElementById("po21").value='';
        document.getElementById("po22").value='';
        
    }
  
}  
function hidepo3()
{
    if (document.getElementById("nsspo3").value=="Yes")
    {
        document.getElementById("orienpo3").style.display="flex";
        document.getElementById("po31").required=true;
        document.getElementById("po32").required=true;
     
       
    }
    else {
        document.getElementById("orienpo3").style.display="none";
        document.getElementById("po31").required=false;
        document.getElementById("po32").required=false;
        document.getElementById("po31").value='';
        document.getElementById("po32").value='';
    }
  
}  


    </script>




<?php
if(@isset($_POST['submit']))
{
    $query="UPDATE `performa_1_reg` SET `verification`= '1' WHERE `college_code`='$college_code' ";
    $res=mysqli_query($conn,$query);
    if($res)
    {
        echo "<script>alert('Proforma-I Verified.')</script>";
        header('refresh:0, url=index');
    }
}

?>

<script src="../Assets/bootstrap-4.5.0-dist/js/loader.js"></script>
</body>
</html>



