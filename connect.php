<?php
    $host = "localhost";
    // $user = "u856232008_betanss";
    // $pass = "UWsX:r3*";
    $user = "root"; 
$pass = ""; 
    $db = "u856232008_betanss";
  
  
try {
   
    $conn = mysqli_connect($host, $user, $pass, $db);
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
?>