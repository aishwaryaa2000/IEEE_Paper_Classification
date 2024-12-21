<?php 
  session_start();
  if (!isset($_SESSION['head_user_id'])) {
    header('location:../logout');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
    <title>Statistical Data</title>
    <style>
        /* table,th,td{ 
            border: 1px solid black;
            border-collapse:collapse;
            padding:5px;
            width:100%;
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
    <script src="../DataTables/Buttons-1.6.2/js/buttons.print.min.js"></script>
  <script src="../DataTables/Buttons-1.6.2/js/buttons.colVis.min.js"></script>
    

<style>
    /* #my{
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
} */
</style>
</head>
<body>
<nav class="navbar navbar-light bg-white sticky-top justify-content-around">
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
$qu = "SELECT `sr_no`, `college_name`, `college_code` FROM `po_login_details` WHERE vec_gen=1 ";
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
                <div class="nav-link text-white text-center mylabels">Consolidated Statistical Information </div>
              </li>
              <li class="nav-item  list-unstyled col-sm-4 md-4 xl-6">
                <div class="nav-link text-white text-center mylabels my_buttons"></div>
              </li>
        </ul>
    <div class="card">
    <div class="card-body table-responsive">
    <div id="contentt">     
    <table id="tbl" class="table table-borderless table-striped table-hover">

    <thead>
    <tr>
    <th rowspan="2"><b>Sr.No.</th>
        <th rowspan="2"><b>College Code</th>
        <th rowspan="2"><b>College Name</th>

        <th colspan="8" class="bg-info" ><b><center>Male</center></th>
        <th colspan="8" class="alert-info"><b><center>Female</center></th>
        <th colspan="8" class="bg-info"><b><center>Transgender</center></th>
        <th colspan="8" class="alert-info"><b><center>Total</center></th>
    </tr>
    <tr>
    <th ><b>SC</b></th>
    <th><b>ST</b></th>
    <th><b>NT</b></th>
    <th><b>OBC</b></th>
    <th><b>OTHER</b></th>
    <th><b>Minority</b></th>
    <th><b>OPEN</b></th>
    <th><b>Total</b></th>

    <th><b>SC</b></th>
    <th><b>ST</b></th>
    <th><b>NT</b></th>
    <th><b>OBC</b></th>
    <th><b>OTHER</b></th>
    <th><b>Minority</b></th>
    <th><b>OPEN</b></th>
    <th><b>Total</b></th>

    <th><b>SC</b></th>
    <th><b>ST</b></th>
    <th><b>NT</b></th>
    <th><b>OBC</b></th>
    <th><b>OTHER</b></th>
    <th><b>Minority</b></th>
    <th><b>OPEN</b></th>
    <th><b>Total</b></th>

    <th><b>SC</b></th>
    <th><b>ST</b></th>
    <th><b>NT</b></th>
    <th><b>OBC</b></th>
    <th><b>OTHER</b></th>
    <th><b>Minority</b></th>
    <th><b>OPEN</b></th>
    <th><b>Total</b></th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($data = mysqli_fetch_assoc($result)) {
      $college_code=$data['college_code'];
      $college_name=$data['college_name'];
      $st_data=array();
      $st_data['Male']=array(
        "SC" =>0,
        "ST" =>0,
        "NT" =>0,
        "OBC" =>0,
        "other" =>0,
        "MINORITY" =>0,
        "OPEN" =>0,
        "total" =>0
      );
      $st_data['Female']=array(
        "SC" =>0,
        "ST" =>0,
        "NT" =>0,
        "OBC" =>0,
        "other" =>0,
        "MINORITY" =>0,
        "OPEN" =>0,
        "total" =>0
      );
      $st_data['Transgender']=array(
        "SC" =>0,
        "ST" =>0,
        "NT" =>0,
        "OBC" =>0,
        "MINORITY" =>0,
        "other" =>0,
        "OPEN" =>0,
        "total" =>0
      );
      $query_data="SELECT `caste`,`gender`,count(gender) AS tot FROM `vol_personal_details` WHERE college_code='$college_code' GROUP BY gender,caste";
      $res_data=mysqli_query($conn,$query_data);
      while($row_data = mysqli_fetch_assoc($res_data))
      {
         $gen=$row_data['gender'];
         $caste=$row_data['caste'];
         $cnt=$row_data['tot'];
         $st_data["$gen"]["$caste"]=$cnt;   
      }
      
      $st_data['Male']['total']=$st_data['Male']['SC']+$st_data['Male']['ST']+$st_data['Male']['NT']+$st_data['Male']['OBC']+$st_data['Male']['other']+$st_data['Male']['OPEN']+$st_data['Male']['MINORITY'];
      $st_data['Female']['total']=$st_data['Female']['SC']+$st_data['Female']['ST']+$st_data['Female']['NT']+$st_data['Female']['OBC']+$st_data['Female']['other']+$st_data['Female']['OPEN']+$st_data['Female']['MINORITY'];
      $st_data['Transgender']['total']=$st_data['Transgender']['SC']+$st_data['Transgender']['ST']+$st_data['Transgender']['NT']+$st_data['Transgender']['OBC']+$st_data['Transgender']['other']+$st_data['Transgender']['OPEN']+$st_data['Transgender']['MINORITY'];  

        echo '<tr><td>'.$srno.'</td>';
        echo "<td >$college_code</td>";
        echo "<td >$college_name</td>";
        ?>

        
        <td width="3%"><?php echo $st_data['Male']['SC'];?></td>
        <td width="3%"><?php echo $st_data['Male']['ST'];?></td>
        <td width="3%"><?php echo $st_data['Male']['NT'];?></td>
        <td width="3%"><?php echo $st_data['Male']['OBC'];?></td>
        <td width="3%"><?php echo $st_data['Male']['other'];?></td>
        <td width="3%"><?php echo $st_data['Male']['MINORITY'];?></td>
        <td width="3%"><?php echo $st_data['Male']['OPEN'];?></td>
        <td width="3%"><?php echo $st_data['Male']['total'];?></td>

        <td width="3%"><?php echo $st_data['Female']['SC'];?></td>
        <td width="3%"><?php echo $st_data['Female']['ST'];?></td>
        <td width="3%"><?php echo $st_data['Female']['NT'];?></td>
        <td width="3%"><?php echo $st_data['Female']['OBC'];?></td>
        <td width="3%"><?php echo $st_data['Female']['other'];?></td>
        <td width="3%"><?php echo $st_data['Female']['MINORITY'];?></td>
        <td width="3%"><?php echo $st_data['Female']['OPEN'];?></td>
        <td width="3%"><?php echo $st_data['Female']['total'];?></td>

        <td width="3%"><?php echo $st_data['Transgender']['SC'];?></td>
        <td width="3%"><?php echo $st_data['Transgender']['ST'];?></td>
        <td width="3%"><?php echo $st_data['Transgender']['NT'];?></td>
        <td width="3%"><?php echo $st_data['Transgender']['OBC'];?></td>
        <td width="3%"><?php echo $st_data['Transgender']['other'];?></td>
        <td width="3%"><?php echo $st_data['Transgender']['MINORITY'];?></td>
        <td width="3%"><?php echo $st_data['Transgender']['OPEN'];?></td>
        <td width="3%"><?php echo $st_data['Transgender']['total'];?></td>
        

        <td width="3%"><?php echo $st_data['Male']['SC']+$st_data['Female']['SC']+$st_data['Transgender']['SC'];?></td>
        <td width="3%"><?php echo $st_data['Male']['ST']+$st_data['Female']['ST']+$st_data['Transgender']['ST'];?></td>
        <td width="3%"><?php echo $st_data['Male']['NT']+$st_data['Female']['NT']+$st_data['Transgender']['NT'];?></td>
        <td width="3%"><?php echo $st_data['Male']['OBC']+$st_data['Female']['OBC']+$st_data['Transgender']['OBC'];?></td>
        <td width="3%"><?php echo $st_data['Male']['other']+$st_data['Female']['other']+$st_data['Transgender']['other'];?></td>
        <td width="3%"><?php echo $st_data['Male']['MINORITY']+$st_data['Female']['MINORITY']+$st_data['Transgender']['MINORITY'];?></td>
        <td width="3%"><?php echo $st_data['Male']['OPEN']+$st_data['Female']['OPEN']+$st_data['Transgender']['OPEN'];?></td>
        <td width="3%"><?php echo $st_data['Male']['total']+$st_data['Female']['total']+$st_data['Transgender']['total'];?></td>
        

        </tr>
        <?php
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

                buttons: [
                            'excel',
                            {
                            extend: 'pdfHtml5',
                            title: 'Consolidated Statistical Data',
                            orientation: 'landscape',
                            pageSize: 'A3' ,
                            responsive:true
                            }
                        ],
                language: {
                    oPaginate: {
                      sNext: '<i class="fas fa-angle-double-right"></i>',
                      sPrevious: '<i class="fas fa-angle-double-left"></i>',
                     }
                  } ,
                "scrollX": true
                });
         
            table.buttons().container()
                  .appendTo( ".my_buttons" );
            } );

</script>

</body>
</html>
