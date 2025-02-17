<?php
    echo"Hello World";

    var_dump($_POST);
    $lastname = $_POST['Last_name'];
    $firstname = $_POST['First_name'];
?>
    <br>
    <br>
 <?php   
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

    $sql = "INSERT INTO students (id, last_name, first_name)
    VALUES ('', '$lastname', '$firstname')";

        if ($conn->query($sql) === TRUE) {
            echo "<br>";
            echo "<br>";
            echo "<br>";

        echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
?>