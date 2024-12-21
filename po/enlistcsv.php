<?php
session_start();
if(!isset($_SESSION['po_user_id']))
 {
    header('location: ../logout');
 }

$po_user_id=$_SESSION['po_user_id'];
include "../conn.php";
$conn = db_connection();
$college_code=$_SESSION['college_code'];
$sql = "SELECT `first_name`, `middle_name`, `last_name`, `mother_name`, `email_id`, `contact`, `vol_user_id`, `password` FROM `volunteer_user_id_po` WHERE college_code = '$college_code'";
$result = mysqli_query($conn,$sql);  
$filename="Student Enrollment List";
$file_ending = "xls";
//header info for browser
header("Content-Type: application/octet-stream");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
/*******Start of Formatting for Excel*******/   
//define separator (defines columns in excel & tabs in word)
$sep = "\t"; 
print("Sr No \t First Name \t Middle Name \t Last Name \t Mother Name \t Email Address \t Contact Number \t Volunteer UserId \t Password");
print "\n";
print "\n";
$number=1;
//start while loop to get data
    while($row = mysqli_fetch_assoc($result))
    {
        $schema_insert = "";
        $field=array_keys($row);
        $schema_insert .= $number.$sep;
        foreach($field as $x)
        {
            if(!isset($row[$x]))
                $schema_insert .= "Password Changed".$sep;
            elseif ($row[$x] != "")
                $schema_insert .= "$row[$x]".$sep;
            else
                $schema_insert .= "".$sep;
        }
        $schema_insert = str_replace($sep."$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
        $number++;
    }   
?>