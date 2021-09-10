<?php
    include_once 'connection.php';

    if (isset($_POST['btnDelete'])) {

        $id = $_GET['id'];

        $sql_delete = "DELETE FROM student where id = $id";

        if(mysqli_query($conn, $sql_delete)) { 

            header("Location: ../admin/index.php?deleted=true");
        }

        else {
            header("Location: ../admin/index.php?deleted=false");
        }

    }

?>