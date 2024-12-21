<?php 
  session_start();
  if(!isset($_SESSION['po_user_id']))
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
    <title>Volunteer Details</title>
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

     
<?php
include '../connect.php';
$college_code=$_SESSION['college_code'];
$qu = "SELECT `first_name`, `middle_name`, `last_name`, `mother_name`,`vol_user_id`,`roll_number`, `contact`, `email_id`,`address`, `ward` 
       FROM `vol_personal_details` WHERE college_code='$college_code' AND verification=1";
$result =mysqli_query($conn,$qu);
if(!mysqli_query($conn,$qu)){
    printf(mysqli_error($conn));
    }
$srno = 1;
if (mysqli_num_rows($result) > 0){
    ?>
<div class="jumbotron">
    <ul class="navbar font-weight-bold mynav2">
              <li class="nav-item list-unstyled col-sm-4 md-4 xl-6">
                <div class="nav-link text-white text-center mylabels">Table Name</div>
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
    <th><b>VEC Number</b></th>
    <th><b>Volunteer Name</b></th>
    <th><b>College Roll Number</b></th>
    <th><b>Address</b></th>
    <th><b>Mobile Number</b></th>
    <th><b>Email ID</b></th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($data = mysqli_fetch_assoc($result)) {
       
        echo '<tr><th>'.$srno.'</th>';
        echo '<td>'.$data['vol_user_id'].'</td>';
        echo '<td>'.$data['first_name'].' '.$data['middle_name'].' '.$data['last_name'].' '.$data['mother_name'].'</td>';
        echo '<td>'.$data['roll_number'].'</td>';
        echo '<td>'.$data['address'].' Ward Number:'.$data['ward'].'</td>';
        echo '<td>'.$data['contact'].'</td>';
        echo '<td>'.$data['email_id'].'</td>';
        echo '</tr>';
        $srno += 1;
        }
    echo "</tbody></table>";
    }
    ?>
</div>
  </div>
</div> 
</div> 
 
    
<script>
 $(document).ready(function() {
              var table=$("#tbl").DataTable({
                    buttons: [ 'excel',
                                {
                                  extend: 'pdfHtml5',
                                  title:'Volunteer Contact Details',
                                  orientation: 'landscape',
                                  pageSize: 'LEGAL',
                                  responsive: true
                                }
                             ],
                    language: {
 oPaginate: {
   sNext: '<i class="fas fa-angle-double-right"></i>',
   sPrevious: '<i class="fas fa-angle-double-left"></i>',
   }
   } 
                     });

            table.buttons().container()
                  .appendTo( '.my_buttons' );
            } );        
</script>
</body>
</html>