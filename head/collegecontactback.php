<?php
session_start();
include "../conn.php";

$conn = db_connection();

$sql = "SELECT `college_code`, `college_name`, `college_address`, `college_telephone`, `college_email`, `college_status_grant`, `college_status_minority`, `college_pl_state` FROM `performa_1_reg` WHERE verification='1' ORDER BY college_code ASC";
$result = mysqli_query($conn,$sql);  
$filename="College Details";
$file_ending = "xls";
//header info for browser
header("Content-Type: application/octet-stream");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
/*******Start of Formatting for Excel*******/   
//define separator (defines columns in excel & tabs in word)
$sep = "\t"; 
    print("Sr No \t College Code \t College Name \t College Address \t College Telephone \t College Email \t Grant in aid status \t Minority status \t Linguistic/Religious");
    print "\n";
    print "\n";
//start while loop to get data
    $number=1;
    while($row = mysqli_fetch_assoc($result))
    {
        $schema_insert = "";
        $field=array_keys($row);
        $schema_insert .= $number.$sep;
        foreach($field as $x)
        {
            if(!isset($row[$x]))
                $schema_insert .= "NULL".$sep;
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