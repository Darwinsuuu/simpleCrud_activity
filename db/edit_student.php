<?php

    include_once 'connection.php';

    if (isset($_POST['btnSubmitCreateStudentRecord'])) {

        $id = $_POST['id'];
        $stud_name = $_POST['getCreateStudentName'];
        $stud_age = $_POST['getCreateStudentAge'];
        $stud_email = $_POST['getCreateEmailAddress'];
        $stud_gpa = $_POST['getCreateGPA'];

        $create_record_sql = "UPDATE student SET name='$stud_name', age='$stud_age', email='$stud_email', gpa='$stud_gpa' WHERE id = $id";




        if(mysqli_query($conn, $create_record_sql)) {
            echo "<script>console.log('Data records here is submitted in the database');</script>";
            echo "<script>console.log('".$stud_name."');</script>";
            echo "<script>console.log('".$stud_age."');</script>";
            echo "<script>console.log('".$stud_email."');</script>";
            echo "<script>console.log('".$stud_gpa."');</script>";
        
        
            echo "<script>$('#success-msg-rec-created').css('display', 'flex');</script>";
            echo "Record is successfully updated!";

        }

        else {

            echo "There's a problem in updaing record! Contact administrator!".mysqli_error($conn);
            echo "<script>$('#success-msg-rec-created').css('display', 'flex');</script>";


        }


    

    } else {

        header("Location: ../login.php?login=false");

    }

    

?>