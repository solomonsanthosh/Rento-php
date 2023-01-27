<?php
    
    $servername = "bgoexhylean3hznrtojp-mysql.services.clever-cloud.com";
    $username = "u3mv4mnaiqulxl3c";
    $password = "KGYbFkghcWVmJac4tkWu";
    $dbname = "bgoexhylean3hznrtojp";
    
    // Create connection
    $conn =  mysqli_connect($servername, $username, $password,$dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
    
    
    
 
 ?> 