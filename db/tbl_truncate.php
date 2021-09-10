<?php

    include_once 'connection.php';

    if(isset($_POST['buttonTruncate'])) {

        $sql_truncate = "TRUNCATE TABLE student";

        if(mysqli_query($conn, $sql_truncate)){


            header("Location: ../admin/delete_all_records.php?records=deleted");
            

        } else {

            echo mysqli_error($conn);

        }

        
       


    } else {

        header("Location: ../login.php?login=false");

    }

?>