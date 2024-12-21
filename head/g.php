<?php 
  session_start();
  if(!isset($_SESSION['head_user_id']))
  {
     header('location: ../logout');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
    <title>Advisory Committee</title>
    <style>
        /* table,th,td{ 
            border: 1px solid black;
            border-collapse:collapse;
            padding:5px;
            }
            img{margin-left:500px;margin-bottom: 50px;height:220px;width:220px;}
            @media print {
                body {zoom:70%;}
                table {page-break-inside: avoid;}
                img{margin-left:400px;height:220px;width:220px;}
                @page { margin: 10px; }
                .tohide{ display:none; }
                } */
                button.mybtn {
      display: block;
      width: 100%;
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
      margin-bottom: 1.2rem;
      cursor: pointer;
      transition: .5s;
    }

    button.mybtn:hover {
      background-position: right;
      -webkit-box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
      box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
    }
                
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
<nav class="navbar navbar-light bg-light sticky-top justify-content-around">
    <img src="../Assets/logos/NSS_LOGO.png" width="80" height="80" class="m" alt="">

    <ul class="navbar-nav">
      <li class="nav-item">
        <h4>IEEE-Institute of Electrical and Electronics Engineers</h4>
      </li>
    </ul>
    <a class="btn btn-info" style="background-color: #4A529D" href="index">BACK</a>
    
     </nav>     
<div class="jumbotron">
<form action="g" method="POST">     
<?php
include '../connect.php';
$college_select="SELECT `college_code`, `college_name` FROM `college_info` ORDER BY `college_code` ASC ";
$res_college=mysqli_query($conn,$college_select);
?>
<div class="card" style="background: linear-gradient(to right,#1fa2ff, #c4e0e5); ">
<br>
<div class ="row" style="margin:0.7rem;">
<div class="col-md-7">
<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" style="background-color: #3282B8; color:white;border:0px;"for="minor"><b>COLLEGE NAME</b></label>
                </div>
                <select class="custom-select"   id="minor" name="college" required>
                <option value="" selected >Choose</option>
                <?php

                      while ($row_college = mysqli_fetch_assoc($res_college)) {
                        $college_iden= $row_college['college_name'].'-'.$row_college['college_code'];
                            ?>
                              <option value="<?php echo $row_college['college_code']; ?>"><?php echo $row_college['college_name'].'-'.$row_college['college_code'] ?></option>

                            <?php
                          }
                 ?>
                </select>
</div>
</div>
<div class="col-md-3">

</div>
<div class="col-md-2">
<button type="submit" name="submit" value="submit" class="mybtn" style="border-radius: 24px;">SUBMIT</button>
</div>

</div>
</div>
</form>
<br>
<br>
    <ul class="navbar font-weight-bold mynav2">
              <li class="nav-item list-unstyled col-sm-8 md-8 xl-6">
                <div class="nav-link text-white text-center mylabels">Advisory Committee <?php if(isset($_POST['college'])){ echo 'of '.$college_iden;} ?></div>
              </li>
              <li class="nav-item  list-unstyled col-sm-4 md-4 xl-6">
                <div class="nav-link text-white text-center mylabels my_buttons"></div>
              </li>
        </ul>
    <div class="card">
    <div class="card-body table-responsive">
    <div id="contentt">
    <table id="tbl" class="table table-striped table-borderless table-hover">
    <thead>
    <tr>
    <th><b>Sr.No.</b></th>
        <th><b>Composition</b></th>
        <th><b>Name of the Member</b></th>
        <th><b>Contact Details</b></th>
       </tr>
    </thead>
    <tbody>
    <?php
include '../connect.php';
if(isset($_POST['college'])){
$filter = $_POST['college'];
$qu = "SELECT * FROM `advisory_committee` INNER JOIN `performa_1_reg` ON `advisory_committee`.`college_code` = `performa_1_reg`.`college_code` WHERE `advisory_committee`.`college_code` ='$filter' AND `performa_1_reg`.`verification` = 1 ";
$result =mysqli_query($conn,$qu);
if(!mysqli_query($conn,$qu)){
    printf(mysqli_error($conn));
    }
if (mysqli_num_rows($result) > 0){
     while ($data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo '<td>1</td>';
        echo '<td>Principal-<b>Chairperson</b></td>';
        echo '<td>'.$data['name1'].'</td>';
        echo '<td>'.$data['con1'].'</td>';
        echo '</tr>';

        echo "<tr>";
        echo '<td>2</td>';
        echo '<td>Staff member having social work background-<b>Member</b></td>';
        echo '<td>'.$data['name2'].'</td>';
        echo '<td>'.$data['con2'].'</td>';
        echo '</tr>';

        echo "<tr>";
        echo '<td>3</td>';
        echo '<td>Staff member having social work background-<b>Member</b></td>';
        echo '<td>'.$data['name3'].'</td>';
        echo '<td>'.$data['con3'].'</td>';
        echo '</tr>';

        echo "<tr>";
        echo '<td>4</td>';
        echo '<td>Representative from the Development Area-<b>Member</b></td>';
        echo '<td>'.$data['name4'].'</td>';
        echo '<td>'.$data['con4'].'</td>';
        echo '</tr>';

        echo "<tr>";
        echo '<td>5</td>';
        echo '<td>Representative from the Adopted Area-<b>Member</b></td>';
        echo '<td>'.$data['name5'].'</td>';
        echo '<td>'.$data['con5'].'</td>';
        echo '</tr>';

        echo "<tr>";
        echo '<td>6</td>';
        echo '<td>NSS student Leader(Male)</td>';
        echo '<td>'.$data['name6'].'</td>';
        echo '<td>'.$data['con6'].'</td>';
        echo '</tr>';

        echo "<tr>";
        echo '<td>7</td>';
        echo '<td>NSS student Leader(Female)</td>';
        echo '<td>'.$data['name7'].'</td>';
        echo '<td>'.$data['con7'].'</td>';
        echo '</tr>';

        echo "<tr>";
        echo '<td>8</td>';
        echo '<td>NSS Dist. Coordinator(invitee)-<b>University Representative</b></td>';
        echo '<td>'.$data['name8'].'</td>';
        echo '<td>'.$data['con8'].'</td>';
        echo '</tr>';

        echo "<tr>";
        echo '<td>9</td>';
        echo '<td>NSS Programme Officer-<b>Secretary</b></td>';
        echo '<td>'.$data['name9'].'</td>';
        echo '<td>'.$data['con9'].'</td>';
        echo '</tr>';
        }
}
}
    ?>
    </tbody></table>
</div>
  </div>
</div> 
</div> 
 
    
<script>
  console.log(document.title);
  document.title = 'Advisory Committee <?php if(isset($_POST['college'])){ echo 'of '.$college_iden;} ?>';
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