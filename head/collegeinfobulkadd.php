<?php  
include '../connect.php';
//$conn = db_connection();
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
     if(!mysqli_query($conn,"TRUNCATE TABLE `college_info`;")){
         echo "unable to process your request";
         exit();
     }
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
        $item1 = mysqli_real_escape_string($conn, $data[0]);  
        $item2 = mysqli_real_escape_string($conn, $data[1]);
        $item3 = mysqli_real_escape_string($conn, $data[2]);
        $item4 = mysqli_real_escape_string($conn, $data[3]);
        $item5 = mysqli_real_escape_string($conn, $data[4]);
        $item6 = mysqli_real_escape_string($conn, $data[5]);
        $item7 = mysqli_real_escape_string($conn, $data[6]);
                $query = "INSERT INTO `college_info`( `srno_area`, `college_code`, `college_name`, `area`, `status`, `max_allot`, `college_email`) VALUES ('$item1','$item2','$item3','$item4','$item5','$item6','$item7')";
                
                if(!mysqli_query($conn, $query)){
                    echo "unable to process your request";
                    echo mysqli_error($conn);
                    exit();
                }
   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
?>    
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Colleges</title>
    <link href="../Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../Assets/bootstrap-4.5.0-dist/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../Assets/bootstrap-4.5.0-dist/css/style.min.css" rel="stylesheet">
    <link href="../Assets/bootstrap-4.5.0-dist/css/loader.css" rel="stylesheet">
    <script type="text/javascript" src="../Assets/bootstrap-4.5.0-dist/js/vanilla.js/js/v7.js"></script>
    <script src="../Assets/bootstrap-4.5.0-dist/js/onlynum.js"></script>

  
  <!-- Custom styles for this template -->
  <link href="floating-labels.css" rel="stylesheet">

  <style>
    @media screen and (min-width: 570px){
.card{
    margin-left: 5rem;
box-shadow: -14px 28px 114px -7px rgba(0,0,0,0.75); 
-webkit-box-shadow: -14px 28px 114px 4px rgba(0,0,0,0.75);
-moz-box-shadow: -14px 28px 114px 4px rgba(0,0,0,0.75);
box-shadow: -14px 28px 114px 4px rgba(0,0,0,0.75);
}

    }

    @media screen and (max-width: 570px) {
      .card {
        width: auto;
        margin-left: 2rem;
        margin-right: 0rem;
      }

      button.mybtn {
        display: block;
        width: 30%;
        height: 30px;
        border-radius: 20px;
        outline: none;
        border: none;
        text-align: center;
        background-image: linear-gradient(to right, #7f7fd5, #86a8e7, #91eae4);
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
      background-image: linear-gradient(to right, #7f7fd5, #86a8e7, #91eae4);
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

background: -webkit-linear-gradient(to right,#686FAA,#5161CE); 
background: linear-gradient(100deg,#686FAA,#5161CE); 

       }

    .myleft_card .card-body {
      /* margin-left: 2rem;; */
      
      background-repeat: no-repeat;
    }

    .card-decor {
      margin-bottom: 2rem;
      -webkit-box-shadow: 7px 10px 18px 8px rgba(219, 219, 219, 1);
      -moz-box-shadow: 7px 10px 18px 8px rgba(219, 219, 219, 1);
      box-shadow: 7px 10px 18px 8px rgba(219, 219, 219, 1);
    }

    .myfile {
      padding: 0.5rem 1rem;
      border: 3px solid yellow;
      border-radius: 10rem;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-weight: bold;
      color: yellow;
    }
    .navbar{
    -webkit-box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
-moz-box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
}

    .myfile:hover {
      transform: scale(1.04);
      color: gold;
    }

    .myfile span {
      font-weight: normal;
    }
.container{
    padding-left: 0px;

}
   


  </style>
</head>
<body onload="myFunction()">
<nav class="navbar navbar-light bg-white sticky-top justify-content-between ">  
  <img src="../Assets/logos/NSS_LOGO.png" width="80" height="80" class="m" alt="">
  <!-- &nbsp;&nbsp; -->
  <ul class="navbar-nav">
        <li class="nav-item">
            <h4>ADD COLLEGES</h4>
        </li>
   </ul>
   <a href="index"  class="btn btn-primary" style="background-color:#5950D7; border-radius: 12px; width:8rem;">Home</a>
</nav>


<div id="loading">


  
	<h1 id="h1">IEEE-Institute of Electrical and Electronics Engineers.</h1>
<h2 id="h2"></h2>
<h3 id="h3">Loading..</h3>
</div>

<div class="d-flex justify-content-center">
<div class="container" style="margin: 2rem;">


<div class="card text-center col-xl-10 col-md-10 col-sm-12 myleft_card" style="border-radius:1rem;padding-right:0px; padding-left:0px;margin-top:3rem;">

        <div class="card-body">

          <div class="row">
            <div class="col-xl-12 col-sm-12 col-md-12">
              <div class="mt-5 pt-5">
                <h2 class="card-title text-white" ><b>Upload the colleges in bulk!</b></h2>
                <br> <br>
                <form method="post" enctype="multipart/form-data">  
                  <div class="input-group">
                    <div class="col-12" style="border-radius:1.5rem;">
                   
                                       
                      <input type="file" name="file"  id="file" hidden required>
                      <label for="file" class="myfile" id="selector">Choose File</label>
                    </div>
                  </div>
                  <br>
                  <div class="d-flex justify-content-center">
                  <input type="submit" name="submit" value="Import" class="mybtn button-loading" data-loading-text="Loading...">
                  </div>
                  <a href="college_info_bulk_sample_csv.csv" class="text-white font-weight-bold"><font style="color:yellow;">Download Sample</font></a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
</div>
<script>
    //for file upload
    var loader = function(e) {
      let file = e.target.files;
      let show = "<span>Selected file:</span>" + file[0].name
      let output = document.getElementById("selector");
      let my_alert=document.getElementById("my_alert");
      output.innerHTML = show;
      output.classList.add("active");
      my_alert.style.display='block';
    };
    //add event listener for input
    let fileInput = document.getElementById("file");
    fileInput.addEventListener("change", loader);
  </script>
<script src="../Assets/bootstrap-4.5.0-dist/js/loader.js"></script>

</body>
</html>