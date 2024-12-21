<?php
session_start();
if(!isset($_SESSION['head_user_id']))
{
   header('location: ../logout');
}
include '../connect.php';
if(isset($_POST['submit']))
{
    if(isset($_POST['arrAtr']))
    {
     $arrAtr=$_POST['arrAtr'];
     foreach($arrAtr as $key => $value)
     {
        $sql = "UPDATE `performa_1_reg` SET `atr`='$value' WHERE college_code='$key'";
        $result=mysqli_query($conn,$sql);
     }
    echo "<script>alert('ATR Successfull')</script>";
    header("refresh:1,url=Atr");
    }
    else
    {
        echo "<script>alert('All Atr submitted already')</script>";
        header("refresh:1,url=Atr"); 
    }
}
else
{
    header('location: Atr');
}
?>