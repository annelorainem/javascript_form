<?php
    echo"Hello World";

    var_dump ($_POST);
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "loraine";

// Create connection
    $conn = new mysqli($servername, $username, $password, $database);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>