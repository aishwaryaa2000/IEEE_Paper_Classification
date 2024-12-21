
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
    <title>NSS Student's Verification</title>
    <style>
.card{
 -webkit-box-shadow: 10px 10px 26px -4px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 26px -4px rgba(0,0,0,0.75);
box-shadow: 10px 10px 26px -4px rgba(0,0,0,0.75);
  }
  .container{
    padding-top: 2rem;
    padding-bottom: 2rem;
    
  }
  button.mybtn1 {
      display: block;
      width: 100%;
      height: 40px;
      border-radius: 25px;
      outline: none;
      border: none;
      text-align: center;
      background-image: linear-gradient(to right, #91EAE4, #7F7FD5, #86A8E7);
      background-size: 200%;
      font-size: 0.8rem;
      font-weight:400;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      text-transform: uppercase;      
      cursor: pointer;
      transition: .5s;
      -webkit-box-shadow: 7px 10px 18px -15px rgba(0,0,0,0.75);
-moz-box-shadow: 7px 10px 18px -15px rgba(0,0,0,0.75);
box-shadow: 7px 10px 18px -15px rgba(0,0,0,0.75);
    }
    .navbar{
    -webkit-box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
-moz-box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
}
    button.mybtn1:hover {
      background-position: right;
      -webkit-box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
    }
    @media screen and (max-width:991px){
      button.mybtn1{width:100%; border-radius: 17px;}
    }
    /* @media screen and (max-width:500px){

      #spacing{
        margin-bottom: 3rem;
      }
    }
    @media screen and (min-width:500px){

#spacing{
    margin-bottom:7rem;
}
    } */
  .fas_blue{
    color:#7F7FD5;
  }
  .fas_red{
    color:#F8D7DA;
  }
  .mynav2{
    margin-top:1.8rem;
    margin-bottom: 1.2rem;
    -webkit-box-shadow: 0px 10px 41px 0px rgba(230,230,230,0.69);
-moz-box-shadow: 0px 10px 41px 0px rgba(230,230,230,0.69);
box-shadow: 0px 10px 41px 0px rgba(230,230,230,0.69);

    background: #36D1DC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #36D1DC, #5B86E5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #36D1DC,#5B86E5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  }

       
</style>  
    </style>

     <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!--custom css-->
  <link rel="stylesheet" href="../Assets/bootstrap-4.5.0-dist/css/datatables_styles.css">


    <link href="../Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../Assets/bootstrap-4.5.0-dist/jquery/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="../DataTables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">
    <script src="../DataTables/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../DataTables/DataTables-1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <!-- cdn for pdf,excel -->
    <link rel="stylesheet" href="../DataTables/Buttons-1.6.2/css/buttons.bootstrap4.min.css">
    <script src="../DataTables/Buttons-1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="../DataTables/Buttons-1.6.2/js/buttons.bootstrap4.min.js"></script>
    <script src="../DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="../DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="../DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../DataTables/Buttons-1.6.2/js/buttons.html5.min.js"></script>
</head>
<body>

<?php
session_start();
if(!isset($_SESSION['po_user_id']))
{
    header('location: ../logout');
}
$po_user_id=$_SESSION['po_user_id'];
include '../conn.php';
$conn=db_connection();
$college_name=$_SESSION['college_name'];
$college_code=$_SESSION['college_code'];
?>
<nav class="navbar navbar-light bg-white sticky-top justify-content-around ">
  <img src="../Assets/logos/NSS_LOGO.png" onclick="loaddata()" width="80" height="80" alt="">
  <ul class="navbar-nav">
        <li class="nav-item">
            <h4>VOLUNTEER VERIFICATION LIST</h4>
        </li>
   </ul>
   <a href="index"><button class="btn btn-primary">Back</button></a>
</nav>


<div class="container jumbotron-fluid">
<form action="performa2verify" method="POST">

<div id ="content">

<div class="card"  style="border-radius:1rem;">
            <div class="card-body table-responsive">
                <table class="table table-borderless table-hover text-center" id='tbl'>
                    <thead>
                      <tr style="background: linear-gradient(to right, #5B86E5, #36D1DC);">
                        <th scope="col" >Sr No.</th>
                        <th scope="col" >First Name</th>
                        <th scope="col" >Middle Name</th>
                        <th scope="col" > Last Name</th>
                        <th scope="col" >User ID</th>
                        <th scope="col" >Contact number</th>
                        <th scope="col" >Profile</th>
                        <th scope="col" >Verified</th>
                        
                      </tr>
                    </thead>
    <tbody>
    <?php
$query_student="SELECT * FROM `vol_personal_details` WHERE college_code='$college_code'";
$res_student=mysqli_query($conn,$query_student);
if(mysqli_num_rows($res_student)>0)
{$srno=0;
            while($row_student=mysqli_fetch_assoc($res_student))
            {
             
                 
                    $first_name=$row_student['first_name'];
                    $last_name=$row_student['last_name'];
                    $id=$row_student['vol_user_id'];
                    $middle_name=$row_student['middle_name'];
                    $contact=$row_student['contact'];
                    $verified=$row_student['verification'];
        echo '<tr>';  
        $srno++;     
        echo "<td>$srno</td>";
        echo "<td>$first_name</td>";
        echo "<td>$middle_name</td>";
        echo "<td>$last_name</td>";
        echo "<td>$id</td>";
        echo "<td>$contact</td>";
        echo "<td><div class='d-flex justify-content-around'>
                    <button type='submit' class='mybtn1' name='submit' value='$id' >View profile
                    </div></td>";
                    if($verified==1){
                    echo "<td><i class='fas fa-check fas_blue'></i></td>";
                    }
                    else{
                      echo "<td><i class='fas fa-times fas_red'></i></td>";
                    }
                    echo '</tr>';
                
            }
}
else
{
    echo "<tr align='center'><td>-</td><td>-</td><td>-</td><td> No Student has been registered yet </td><td>-</td><td>-</td></tr>";
}     

$reciept="SELECT * FROM `vol_personal_details` WHERE college_code='$college_code' AND verification='1'";
$result=mysqli_query($conn,$reciept);
$count=mysqli_num_rows($result);

$po_name_query="SELECT * FROM `po_login_details` WHERE college_code='$college_code'";
$name=mysqli_query($conn,$po_name_query);
$row_po=mysqli_fetch_assoc($name);
$name_of_po=$row_po['po_name'];

?>
</tbody>
</table>
</div>
</div>
</form>
<script>
 $(document).ready(function() {
              var table=$("#tbl").DataTable({
                buttons: [ 'excel', 
                    {
                      extend: 'pdfHtml5',
                      orientation: 'landscape',
                      pageSize: 'LEGAL' 
                    }
                      ],
                    language: {
 oPaginate: {
   sNext: '<i class="fas fa-angle-double-right"></i>',
   sPrevious: '<i class="fas fa-angle-double-left"></i>',
//    sFirst: '<i class="fas fa-step-backward"></i>',
//    sLast: '<i class="fas fa-step-forward"></i>'
   }
   } 
                     });

            table.buttons().container()
                  .appendTo( '.my_buttons' );
            } );        
</script>

</body>
</html>