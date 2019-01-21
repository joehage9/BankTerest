<?php    
    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "root";
    $dbname="banterest";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
?>