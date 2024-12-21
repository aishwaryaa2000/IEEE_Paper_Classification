<?php
session_start();
include '../conn.php';
  if(isset($_POST['submit']))
  {
      foreach(array('arrA','arrB_1','arrB_2','arrB_3','arrC_1','arrC_2','arrC_3','arrD_1','arrD_2','arrD_3','arrE') as $x){
        $_POST[$x]['college_code'] = $_SESSION['college_code'];
        $_POST[$x]['college_name'] = $_SESSION['college_name'];  }
    foreach(array('arrA','arrB_1','arrB_2','arrB_3','arrC_1','arrC_2','arrC_3','arrD_1','arrD_2','arrD_3','arrE') as $y) { ${"$y"} = $_POST[$y]; }
    $arrA['img1'] = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $arrA['img2'] = addslashes(file_get_contents($_FILES["imagei"]["tmp_name"]));
    // $arrA['verification'] = 0;
    $arrA['submit'] = 1;
    insert_data('performa_1_reg',[$arrA]); 
    insert_data('adopted_area',[$arrB_1,$arrB_2,$arrB_3]);
    insert_data('po_details',[$arrC_1,$arrC_2,$arrC_3]);
    insert_data('student_leader',[$arrD_1,$arrD_2,$arrD_3]);
    insert_data('advisory_committee',[$arrE]);
    echo "<script>alert('Proforma I sent to the Principal for verification')</script>";
    header('refresh:0,url=index');
  }
  elseif(isset($_POST['update'])){
    foreach(array('arrA','arrB_1','arrB_2','arrB_3','arrC_1','arrC_2','arrC_3','arrD_1','arrD_2','arrD_3','arrE') as $x){
      $_POST[$x]['college_code'] = $_SESSION['college_code'];
      $_POST[$x]['college_name'] = $_SESSION['college_name']; }
  foreach(array('arrA','arrB_1','arrB_2','arrB_3','arrC_1','arrC_2','arrC_3','arrD_1','arrD_2','arrD_3','arrE') as $y) { ${"$y"} = $_POST[$y]; }
  if(!$_FILES["image"]["tmp_name"]==''){$arrA['img1'] = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));}
  if(!$_FILES["imagei"]["tmp_name"]==''){$arrA['img2'] = addslashes(file_get_contents($_FILES["imagei"]["tmp_name"]));}  
  $arrA['submit'] = 1;
  try{
  update_data2('performa_1_reg',$_SESSION['college_code'],[$arrA]); 
  // update_data2('adopted_area',$_SESSION['college_code'],[$arrB_1,$arrB_2,$arrB_3]);
  up_s('adopted_area',$arrB_1,$_SESSION['college_code'],$_POST['aa_sr'][1]);
  up_s('adopted_area',$arrB_2,$_SESSION['college_code'],$_POST['aa_sr'][2]);
  up_s('adopted_area',$arrB_3,$_SESSION['college_code'],$_POST['aa_sr'][3]);
  // update_data2('po_details',$_SESSION['college_code'],[$arrC_1,$arrC_2,$arrC_3]);
  up_s('po_details',$arrC_1,$_SESSION['college_code'],$_POST['po_sr'][1]);
  up_s('po_details',$arrC_2,$_SESSION['college_code'],$_POST['po_sr'][2]);
  up_s('po_details',$arrC_3,$_SESSION['college_code'],$_POST['po_sr'][3]);
  // update_data2('student_leader',$_SESSION['college_code'],[$arrD_1,$arrD_2,$arrD_3]);
  up_s('student_leader',$arrD_1,$_SESSION['college_code'],$_POST['sl_sr'][1]);
  up_s('student_leader',$arrD_2,$_SESSION['college_code'],$_POST['sl_sr'][2]);
  up_s('student_leader',$arrD_3,$_SESSION['college_code'],$_POST['sl_sr'][3]);
  update_data2('advisory_committee',$_SESSION['college_code'],[$arrE]);
  echo "<script>alert('Proforma-I updated successfully!')</script>";
  header('refresh:1,url=index');
  }catch(Exception $e){
    echo "<script>alert('".$e."')</script>";
    header('refresh:0,url=index');
  }
    }elseif(isset($_POST['save'])){
      foreach(array('arrA','arrB_1','arrB_2','arrB_3','arrC_1','arrC_2','arrC_3','arrD_1','arrD_2','arrD_3','arrE') as $x){
        $_POST[$x]['college_code'] = $_SESSION['college_code'];
        $_POST[$x]['college_name'] = $_SESSION['college_name'];  }
    foreach(array('arrA','arrB_1','arrB_2','arrB_3','arrC_1','arrC_2','arrC_3','arrD_1','arrD_2','arrD_3','arrE') as $y) { ${"$y"} = $_POST[$y]; }
    if($_FILES['image']['name']!='') {$arrA['img1'] = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));}
    if($_FILES['imagei']['name']!=''){$arrA['img2'] = addslashes(file_get_contents($_FILES["imagei"]["tmp_name"]));}
    insert_data('performa_1_reg',[$arrA]); 
    insert_data('adopted_area',[$arrB_1,$arrB_2,$arrB_3]);
    insert_data('po_details',[$arrC_1,$arrC_2,$arrC_3]);
    insert_data('student_leader',[$arrD_1,$arrD_2,$arrD_3]);
    insert_data('advisory_committee',[$arrE]);
    echo "<script>alert('Proforma I has been saved')</script>";
    header('refresh:0,url=index');

    }











  
//  $test=$_POST['college_code'];
      //  $arr["college_code"]=$test;
      //  $columns = array_keys($data); 
      //  $values = array_values($data);
      //  $query = "INSERT INTO `performa_1_reg` (" . implode(", ", $columns) . ") VALUES ('" . implode("', '", $values) . "')";
      //  $res=mysqli_query($conn,$query);

      // if(insert_data('performa_1_reg',[$dataA]) and insert_data('adopted_area',[$dataB_1,$dataB_2,$dataB_3])){
      //   echo "done dana done";
      // }else{  echo "haga naaaa!!!";  }



      ?>