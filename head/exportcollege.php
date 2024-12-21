<?php
ob_start();
session_start();
if(!isset($_SESSION['head_user_id']))
{
    header('location: ../logout');
}
$head_user_id=$_SESSION['head_user_id'];
include '../connect.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
    <title>Export College Details</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="src/tableHTMLExport.js"></script>

     <!-- Bootstrap core CSS -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/style.min.css" rel="stylesheet">

  <script src="../Assets/bootstrap-4.5.0-dist/js/onlynum.js"></script>

  <style>
      .navbar{
    -webkit-box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
-moz-box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
box-shadow: 0px 10px 15px -8px rgba(203,203,203,1);
}
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

#subbtn{
background:transparent;
background-color:transparent;
border:transparent;
width: 25rem;
}
</style>
</head>
<body>



<nav class="navbar navbar-light bg-white sticky-top justify-content-between ">  
  <img src="../Assets/logos/NSS_LOGO.png" width="80" height="80" class="m" alt="">
  <!-- &nbsp;&nbsp; -->
  <ul class="navbar-nav">
        <li class="nav-item">
            <h4>EXPORT OR TRUNCATE THE COLLEGE DETAILS</h4>
        </li>
   </ul>
   <a href="index"  class="btn btn-primary" style="background-color:#5950D7; border-radius:7px; width:5rem;">Home</a>
</nav>


<div class="container jumbotron-fluid">   

        <ul class="navbar font-weight-bold mynav2">
            <li class="nav-item list-unstyled col-sm-4 md-4 xl-4">
           <center><form method="POST">
                   <button class="nav-link text-white text-center mylabels" type="submit" id="subbtn" onclick="return confirm('ARE YOU SURE YOU WANT TO TRUNCATE ALL COLLEGE DETAILS');" name="truncate" value="truncate"><b>Truncate</b></button>
              </form></center>
              </li>
              <li class="nav-item list-unstyled col-sm-4 md-4 xl-4">
                <a class="nav-link text-white text-center mylabels" href="javascript:void(0);"  onclick="myApp.printTable()">Print</a>
              </li>
              <li class="nav-item  list-unstyled col-sm-4 md-4 xl-4">
                <a class="nav-link text-white text-center mylabels" id="csv" href="">Export CSV</a>
              </li>
        </ul>


    <!-- <button type="submit" id="csv" >Export To CSV</button> -->
    <!-- <form method="POST">
        <button type= "submit"  onclick="showAlert()" name="truncate" value="truncate">Truncate </button>
    </form> -->


    <div id="contentt">
    <div class="card">
            <div class="card-body table-responsive">
                <table class="table table-borderless table-hover text-center" id='tbl'>
    <tr>
        <th scope="col">Sr Number Area</th>
        <th scope="col">College Code</th>
        <th scope="col">College Name</th>
        <th scope="col">Area</th>
        <th scope="col">Status</th>
        <th scope="col">Max Allocation</th>
        <th scope="col">College Email</th>
    </tr>
    <?php
    $query_select_college="SELECT * FROM `college_info`";
    $res=mysqli_query($conn,$query_select_college); 
    if(mysqli_num_rows($res)>0)
    {
       
        while($row=mysqli_fetch_assoc($res))
        {
            ?>
            <tr>
            <td><?php echo $row['srno_area'];?> </td>
            <td><?php echo $row['college_code'];?> </td>
            <td><?php echo $row['college_name'];?> </td>
            <td><?php echo $row['area'];?> </td>
            <td><?php echo $row['status'];?> </td>
            <td><?php echo $row['max_allot'];?> </td>
            <td><?php echo $row['college_email'];?> </td>
            </tr>
            <?php
        }
        
    ?>
    <?php
    }
    else
    {
        echo "NO DATA UPLOAD COLLEGE DETAILS";
    }
?>
    </table>
    </div>

    <script>
        document.getElementById('csv').addEventListener('click', ()=>{
            $("#tbl").tableHTMLExport({
                type:'csv',
                filename:'sample.csv'
                });
            })
        var myApp = new function () {
            this.printTable = function () {
                var tab = document.getElementById('contentt');
                var style = "<style>";
                style = style + "table {width: 100%;font: 17px Calibri;}";
                style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
                style = style + "padding: 2px 3px;text-align: center;}";
                style = style + "table thead tr th:last-child,table tbody tr td:last-child {visibility:hidden;}";
                style = style + "img{margin-left:500px;margin-bottom: 50px;height:220px;width:220px;}";
                style = style + "@media print {  ";
                style = style + "img{margin-left:400px;margin-bottom:20px;height:220px;width:220px;} ";
                style = style + "body{zoom:70%} @page { margin: 10px; }}";
                style = style + "</style>";
                var win = window.open('', '', 'height=700,width=1800');
                win.document.write(style); 
                win.document.write(tab.outerHTML);
                win.document.close();
                win.print();
                }
            }
</script>
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
            var tab = document.getElementById('tbl');
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

<?php
if(@isset($_POST['truncate']))
{
    $query="TRUNCATE TABLE `college_info`";
    $res1=mysqli_query($conn,$query);
    if($res1)
    {
        echo "<script>alert('Truncate Success')</script>";
        header('refresh:0');
    }
    else
    {
        echo mysqli_error($conn);
    }
}
?>
</body>
</html>