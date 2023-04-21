<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'game_innovation_center';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Coonected successfully";
?>