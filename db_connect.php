<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "faculty_corner";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "connect";
?>