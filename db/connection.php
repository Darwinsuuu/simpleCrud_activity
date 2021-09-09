<?php

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database = "studentDB";
    

    $conn = mysqli_connect($localhost, $username, $password, $database);

    if(!$conn) {
        
        echo "There's a problem connect through the database!";
        echo "<br>" .mysqli_connect_error();

    }

?>