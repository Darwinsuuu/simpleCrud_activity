<?php

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database = "studentdb";
    

    $conn = mysqli_connect($localhost, $username, $password, $database);

    if(!$conn) {
        
        echo "There's a problem connecting through the database!";
        echo "<br>" .mysqli_connect_error();

    } 
    // else {
    //     echo "connected";
    // }

?>