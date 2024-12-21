<?php
session_start();
    if(isset($_SESSION['vol_user_id']))
    {
      $vol_id=$_SESSION['vol_user_id'];
    }
    else
    {
      header('location:../logout');
    }
  if(isset($_POST['submit']))
  {
    include '../conn.php';
     $vol_id=$_SESSION['vol_user_id']; 
    foreach(array('arrA','arrB','arrC','arrD') as $y) { ${"$y"} = $_POST[$y]; }
    if(!$_FILES["image"]["tmp_name"]==''){$arrA['photo'] = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));}
    if(!$_FILES["imagei"]["tmp_name"]==''){$arrA['sign'] = addslashes(file_get_contents($_FILES["imagei"]["tmp_name"]));}  


    function update_data($arr_val,$cond)
    {
        $conn=db_connection();
        $complete_array = array();
        foreach($arr_val as $key => $value)
        {
          $complete_array[] = $key . " = '" . $value . "'";
        }
        $sql = "UPDATE `vol_personal_details` SET ". join(",",$complete_array) . " WHERE vol_user_id='$cond'";
        $result=mysqli_query($conn,$sql);
    }
    update_data($arrA,$vol_id);
    update_data($arrB,$vol_id);
    update_data($arrC,$vol_id);
    update_data($arrD,$vol_id);
    echo "<script>alert('Form submitted to the Programme Officer for verification')</script>";
    header("refresh:1,url=index");
  }    
?>