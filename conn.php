<?php

function db_connection(){
// $db = new mysqli('localhost','u856232008_betanss','UWsX:r3*','u856232008_betanss');
$db = new mysqli('localhost','root','','u856232008_betanss');
if ($db->connect_error) {  die("Connection failed: " . $db->connect_error);  }else{    return $db;  }
}

function insert_data($table,$data){
  $db = db_connection();
  foreach ($data as $x){
  $db->query('INSERT INTO `'. $table .'` (`'.implode('`,`', array_keys($x)).'`) VALUES (\''.implode('\',\'', array_values($x)).'\')'); 
  if($db->error) {  echo $db->error;return FALSE;  } }
  $db->close();
}

function delete_data($college_code){
  $db = db_connection();
  foreach(['performa_1_reg',`adopted_area`,'po_details','student_leader','advisory_committee'] as $x){
  $db->query("DELETE FROM `.$x.` WHERE `college_name` = '.$college_code.'");
  if($db->error) {  echo $db->error;return FALSE;  } }
  $db->close();
}


function update_data2($table,$cond,$arr_val2)
    {
        $db=db_connection();
        foreach($arr_val2 as $arr_val){
        $complete_array = array();
        foreach($arr_val as $key => $value)
        { $complete_array[] = $key . " = '" . $value . "'"; }
        $db->query("UPDATE `".$table."` SET ". join(",",$complete_array) . " WHERE college_code='$cond'");
        if($db->error) {  echo $db->error;throw new Exception('Unable to Update');  } }
        $db->close();
      
    }

    function up_s($table,$arr_val,$cond,$sr){
      $db=db_connection();
      foreach($arr_val as $key => $value)
        { $complete_array[] = $key . " = '" . $value . "'"; }
        $db->query("UPDATE `".$table."` SET ". join(",",$complete_array) . " WHERE `college_code`='$cond' AND `sr_no` = $sr");
        if($db->error) {  echo $db->error;throw new Exception('Unable to Update');  } 
        $db->close();

    }
?>