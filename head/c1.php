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
    <title>Contact details of the program officer</title>
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
<nav class="navbar navbar-light bg-white sticky-top justify-content-around">
    <img src="../Assets/logos/NSS_LOGO.png" width="80" height="80" class="m" alt="">

    <ul class="navbar-nav">
      <li class="nav-item">
        <h4>IEEE-Institute of Electrical and Electronics Engineers</h4>
      </li>
    </ul>
    <a class="btn btn-info" style="background-color: #4A529D" href="table_form1">BACK</a>
    
     </nav>     
<div class="jumbotron">
    <ul class="navbar font-weight-bold mynav2">
              <li class="nav-item list-unstyled col-sm-4 md-4 xl-6">
                <div class="nav-link text-white text-center mylabels">Contact details of the program officer</div>
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
    <th><b>Name of the Program Officer</b></th>
    <th><b>Name of the College</b></th>
    <th><b>Program officer’s mobile no 1</b></th>
    <th><b>Program officer’s mobile no 2</b></th>
    <th><b>Program Officer’s email id</b></th>
       </tr>
    </thead>
    <tbody>
    <?php
include '../connect.php';
$qu = "SELECT * FROM `po_details` ORDER BY `college_code` ASC";
$result =mysqli_query($conn,$qu);
if(!mysqli_query($conn,$qu)){
    printf(mysqli_error($conn));
    }
$srno = 1;
if (mysqli_num_rows($result) > 0){
     while ($data = mysqli_fetch_assoc($result)) {
        if(!$data['po_name']==''&&mysqli_fetch_row(mysqli_query($conn,"SELECT `verification` FROM `performa_1_reg` WHERE `college_code` = '{$data['college_code']}' "))[0]){
        echo '<tr>';       
        echo '<td>'.$srno.'</td>';
        echo '<td>'.$data['po_name'].'</td>';
        echo '<td>'.$data['college_name'].'</td>';
        echo '<td>'.$data['po_mobile_1'].'</td>';
        echo '<td>'.$data['po_mobile_2'].'</td>';
        echo '<td>'.$data['po_email'].'</td>';
        echo '</tr>';
        $srno += 1;
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