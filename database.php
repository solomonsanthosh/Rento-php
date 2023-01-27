<?php
    
    $servername = "sql308.epizy.com";
    $username = "epiz_33469596";
    $password = "infinitysanty1";
    $dbname = "epiz_33469596_Rento";
    
    // Create connection
    $conn =  mysqli_connect($servername, $username, $password,$dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
    
    
    
 
 ?> 