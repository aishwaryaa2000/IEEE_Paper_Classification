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
    <title>Volunteer Details</title>

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
    <a class="btn btn-info" style="background-color: #4A529D" href="table_form2">BACK</a>
    
     </nav>

     
<?php
include '../connect.php';
$college_select="SELECT `college_code`, `college_name` FROM `college_info` ORDER BY `college_code` ASC ";
$res_college=mysqli_query($conn,$college_select);
?>

 <form action="volunteerdatabase" method="POST">       
<div class="jumbotron">

<div class="card" style="background: linear-gradient(to right,#1fa2ff, #c4e0e5);">
<br>
<div class ="row" style="margin:0.7rem;">
<div class="col-md-7">
<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" style="background-color: #3282B8; color:white;border:0px;"for="minor"><b>COLLEGE NAME</b></label>
                </div>
                <select class="custom-select" style="border-top:0px; border-right:0px;border-left:0px;"  id="minor" name="college" required>
                <option value="" selected>Choose</option>
                <?php
                  while ($row_college = mysqli_fetch_assoc($res_college)) {
                ?>
                  <option value="<?php echo $row_college['college_code']; ?>"><?php echo $row_college['college_name'].'-'.$row_college['college_code'] ?></option>
                <?php
                }
                ?>
                </select>
</div>
</div>
<div class="col-md-2">

</div>
<div class="col-md-3">
<button type="submit" name="submit" value="submit" class="mybtn btn" style="margin-top:0rem;">Search</button>
</div>
</div>
</div>
</form>


<br>
<br>
    <ul class="navbar font-weight-bold mynav2">
              <li class="nav-item list-unstyled col-sm-4 md-4 xl-6">
                <div class="nav-link text-white text-center mylabels">Volunteer Database</div>
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
    <th><b>Name of volunteer</b></th>
    <th><b>Mobile Number</b></th>
    <th><b>Email ID</b></th>
    <th><b>Voter ID Number</b></th>
    <th><b>7 Days Special Camp status</b></th>
    <th><b>Hobbies</b></th>
    <th><b>Skills</b></th>
       </tr>
    </thead>
    <tbody>
    <?php
    if(isset($_POST['submit']))
    {
      $college_code=$_POST['college'];
      $query_check="SELECT `vec_gen`, `college_name` FROM `po_login_details` WHERE college_code='$college_code'";
      $res_check=mysqli_query($conn,$query_check);
      $row_check=mysqli_fetch_assoc($res_check);
      if($row_check['vec_gen']==1)
      {
      $query_student="SELECT `first_name`, `middle_name`, `last_name`, `mother_name`, `contact`, `email_id`, `vol_user_id`,`hobbies`, `special_interest`,`voter_id`,`complete_camp` FROM `vol_personal_details` WHERE college_code='$college_code'";
      $res_student=mysqli_query($conn,$query_student);
        if(mysqli_num_rows($res_student)>0)
        {
        $srno=1;
        while ($data = mysqli_fetch_assoc($res_student)) {
          
            echo '<tr><td>'.$srno.'</td>';
            echo '<td>'.$data['vol_user_id'].'</td>';
            echo '<td>'.$data['first_name'].' '.$data['middle_name'].' '.$data['last_name'].' '.$data['mother_name'].'</td>';
            echo '<td>'.$data['contact'].'</td>';
            echo '<td>'.$data['email_id'].'</td>';
            echo ($data['voter_id']=="")?'<td> No Voter Id</td>':'<td>'.$data['voter_id'].'</td>';
            echo '<td>'.$data['complete_camp'].'</td>';
            echo '<td>'.$data['hobbies'].'</td>';
            echo '<td>'.$data['special_interest'].'</td>';
            echo '</tr>';
            $srno += 1;
          }
          ?>
           
          <?php
        }
   }
    else
    {
      ?>
      <script>window.alert('Selected college have not generated VEC Code')</script>;
      <?php
    }
    }
    echo "</tbody> </table>";
    
    ?>
</div>
  </div>
</div> 
</div> 
 
    
<script>
 $(document).ready(function() {
              var table=$("#tbl").DataTable({
                        initComplete: function () {
                            this.api().columns(6).every( function () {
                                var column = this;
                                var select = $('<select class="custom-select" style="border-top:0px; border-right:0px;border-left:0px;"><option value="">choose</option><option value="No">No</option><option value="yes">yes</option></select>')
                                    .appendTo( $(column.header()))
                                    .on( 'change', function () {
                                        var val = $.fn.dataTable.util.escapeRegex(
                                            $(this).val()
                                        );
                
                                        column
                                            .search( val ? '^'+val+'$' : '', true, false )
                                            .draw();
                                    } );
                
                                // column.data().unique().sort().each( function ( d, j ) {
                                //     select.append( '<option value="'+d+'">'+d+'</option>' )
                                //     } );
                            } );
                      },


                    buttons: [ 
                    {
            extend: 'excelHtml5',
            text: 'Excel',
            title: 'Volunteer Database',
            customize: function (xlsx) {
                var sheet = xlsx.xl.worksheets['sheet1.xml'];

                $('c[r=H2] t', sheet).text('7 Days Special Camp Status');
            },
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8],
                modifier: {
                    page: 'current',
                  
                }}},
                
                    {
                      extend: 'pdfHtml5',
                      title: 'Volunteer Database',
                      orientation: 'landscape',
                      pageSize: 'LEGAL',
                      responsive : true
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