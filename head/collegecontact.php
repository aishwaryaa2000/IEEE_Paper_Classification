<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
    <title>NSS | College details</title>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/style.min.css" rel="stylesheet">

  <script src="../Assets/bootstrap-4.5.0-dist/js/onlynum.js"></script>

  <!-- <style>

  
@media screen and (max-width: 480px) {
 .table.table-hove{
     width:50%;
 }
} -->
<style>
@media (min-width: 992px)
{
.container, .container-lg, .container-md, .container-sm {
    max-width: 1300px;
}
}
.card{
    border-radius: 1rem;
    -webkit-box-shadow: 10px 10px 25px 0px rgba(221,221,221,1);
-moz-box-shadow: 10px 10px 25px 0px rgba(221,221,221,1);
box-shadow: 10px 10px 25px 0px rgba(221,221,221,1);

  }

 .mynav2{
  border-radius: 0.5rem;
    margin-top:1.5rem;
    margin-bottom: 2.5rem;
    -webkit-box-shadow: 0px 10px 41px 0px rgba(230,230,230,0.69);
-moz-box-shadow: 0px 10px 41px 0px rgba(230,230,230,0.69);
box-shadow: 0px 10px 41px 0px rgba(230,230,230,0.69);

    background: #5161CE;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #8100FF,#5161CE, #3DB0D8);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #8100FF,#5161CE, #3DB0D8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  }
.navbar>li{
  border-right: 1px solid #fff;
}
.navbar>li:last-child{
   border: none;
}
@media only screen and (max-width: 580px) {
  .navbar>li{
  border:none;
}
}
</style>

  </style>
</head>
<body>

<?php 
 session_start();
//  if(!isset($_SESSION['po_user_id']))
//  {
//     header('location: ../logout.php');
//  }

// $po_user_id=$_SESSION['po_user_id'];
include '../connect.php';
// // echo "<br>".$po_user_id;
// // echo "<br>".$_SESSION['college_name'];

// $college_name= $_SESSION['college_name'];

$query = "SELECT `sr_no`, `verification`, `college_code`, `college_name`, `college_address`, `college_telephone`, `college_fax`, `college_email`, `college_status_grant`, `college_status_minority`, `college_pl_state` FROM `performa_1_reg` WHERE verification='1' ORDER BY college_code ASC";
$res=mysqli_query($conn,$query);

?>

<nav class="navbar navbar-light bg-white sticky-top justify-content-between ">  
  <img src="../Assets/logos/NSS_LOGO.png" width="80" height="80" class="m" alt="">
  <!-- &nbsp;&nbsp; -->
  <ul class="navbar-nav">
        <li class="nav-item">
            <h4>LIST OF COLLEGE DETAILS</h4>
        </li>
   </ul>
   <a href="table_form1"  class="btn btn-primary" style="background-color:#5950D7; border-radius: 14px; width:5rem;">Back</a>
</nav>


<div class="container jumbotron-fluid">   
        <ul class="navbar font-weight-bold mynav2">
              <li class="nav-item list-unstyled col-sm-6 md-6 xl-6">
                <a class="nav-link text-white text-center mylabels" href="javascript:void(0);"  onclick="myApp.printTable()">Print</a>
              </li>
              <li class="nav-item  list-unstyled col-sm-6 md-6 xl-6">
                <a class="nav-link text-white text-center mylabels"  href="collegecontactback">Export CSV</a>
              </li>
        </ul>

        <div class="card">
            <div class="card-body table-responsive">
                <table class="table table-borderless table-hover text-center" id='tab'>
                    <thead>
                      <tr>
                        <th scope="col">Sr No</th>
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Telephone no.</th>
                        <th scope="col">Email ID</th>
                        <th scope="col">Grant in aid status</th>
                        <th scope="col">Minority status</th>
                        <th scope="col">Linguistic / Religious</th>
                      </tr>
                    </thead>
                    <tbody>                     
                    <?php
$number=1;
if(mysqli_num_rows($res)>0)
{ 
    while($row=mysqli_fetch_assoc($res))
    {
        // $srno=$row['sr_no'];
        $cc=$row['college_code'];
        $cn=$row['college_name'];
        $clg_address=$row['college_address'];
        $ct=$row['college_telephone'];
        $clg_email=$row['college_email'];
        $grant=$row['college_status_grant'];
        $minority=$row['college_status_minority'];
        $pl=$row['college_pl_state'];
        
        $pl=($pl=="NULL")?"-":$pl;

        echo "<tr align='center'>";
        echo "<td>$number</td>";
        echo "<td>$cc</td>";
        echo "<td>$cn</td>";
        echo "<td>$clg_address</td>";
        echo "<td>$ct</td>";
        echo "<td>$clg_email</td>";
        echo "<td>$grant</td>";
        echo "<td>$minority</td>";
        echo "<td>$pl</td>";
        echo "</tr>";
        $number++;  
    }
         


}
else
{   
   
     echo "<tr align='center'><td>-</td><td>-</td><td>-</td><td> No results found</td><td>-</td><td>-</td></tr>";
}

?>
                      
                    </tbody>
                  </table>
            </div>
          </div>
    
</div>
<script>

        // $('#print').click(function() {
        //     window.print(document.write($('#content').html()));
        //     window.location.reload();
        // });
        var myApp = new function () {
        this.printTable = function () {
            var tab = document.getElementById('tab');
            var style = "<style>";
                style = style + "table {width: 100%;font: 17px Calibri;}";
                style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
                style = style + "padding: 2px 3px;text-align: center;}";
                style = style + "table thead tr th:last-child,table tbody tr td:last-child {visibility:visible;}";
                style = style + "</style>";
            var win = window.open('', '', 'height=700,width=1800');
            win.document.write(style); 
            win.document.write(tab.outerHTML);
            win.document.close();
            win.print();
        }
    }
</script>





























<!-- <div id ="content">

<center>
<table class="table table-condensed table-hover" border="1px" >
<thead class="thead-light">
<tr>
<th width="5%"><center>Sr no</center> </th>
<th width="14%"><center>College Code</center> </th>
<th width="14%"><center>College Name</center> </th>
<th width="14%"><center>College Address</center> </th>
<th width="18%"><center>College Telephone</center></th>
<th width="15%"><center>College Email</center> </th>
<th width="15%"><center>Grant in aid status</center> </th>
<th width="15%"><center>Minority Status</center> </th>
<th width="15%"><center>Linguistic/Religious</center> </th>

</tr>
 </thead>
 </center>
<?php
$number=1;
if(mysqli_num_rows($res)>0)
{ 
    while($row=mysqli_fetch_assoc($res))
    {
        // $srno=$row['sr_no'];
        $cc=$row['college_code'];
        $cn=$row['college_name'];
        $clg_address=$row['college_address'];
        $ct=$row['college_telephone'];
        $clg_email=$row['college_email'];
        $grant=$row['college_status_grant'];
        $minority=$row['college_status_minority'];
        $pl=$row['college_pl_state'];
        
        $pl=($pl=="NULL")?"-":$pl;

        echo "<tr align='center'>";
        echo "<td>$number</td>";
        echo "<td>$cc</td>";
        echo "<td>$cn</td>";
        echo "<td>$clg_address</td>";
        echo "<td>$ct</td>";
        echo "<td>$clg_email</td>";
        echo "<td>$grant</td>";
        echo "<td>$minority</td>";
        echo "<td>$pl</td>";
        echo "</tr>";
        $number++;  
    }
         


}
else
{   
   
     echo "<tr align='center'><td>-</td><td>-</td><td>-</td><td> No results found</td><td>-</td><td>-</td></tr>";
}

?>
</table>

</div>
<br>


<center><button type="button" class="btn btn-primary" style="border-radius: 24px;" onclick="location.href='table_form1.php'">&nbsp;&nbsp;BACK&nbsp;&nbsp;</button>
&nbsp;&nbsp;<a href="#" id="print" button type="rest" value="reset" class="btn btn-primary" onclick="location.href='collegecontactback.php'" style="border-radius: 24px;">&nbsp;Download excel &nbsp;</a></center>






<script>

        $('#print').click(function() {
            window.print(document.write($('#content').html()));
            window.location.reload();
        });
</script> -->

</body>
</html>