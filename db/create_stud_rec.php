<?php

    include_once 'connection.php';

    if (isset($_POST['btnSubmitCreateStudentRecord'])) {


        $stud_name = $_POST['getCreateStudentName'];
        $stud_age = $_POST['getCreateStudentAge'];
        $stud_email = $_POST['getCreateEmailAddress'];
        $stud_gpa = $_POST['getCreateGPA'];


        $create_record_sql = "INSERT INTO student (name, age, email, gpa) VALUES ('$stud_name', '$stud_age', '$stud_email', '$stud_gpa')";




        if(mysqli_query($conn, $create_record_sql)) {
            echo "<script>console.log('Data records here is submitted in the database');</script>";
            echo "<script>console.log('".$stud_name."');</script>";
            echo "<script>console.log('".$stud_age."');</script>";
            echo "<script>console.log('".$stud_email."');</script>";
            echo "<script>console.log('".$stud_gpa."');</script>";
        
        
            echo "<script>$('#success-msg-rec-created').css('display', 'flex');</script>";
            echo "Record is successfully created!";
        }

        else {

            echo "There's a problem in creating record! Contact administrator!".mysqli_error($conn);
            echo "<script>$('#success-msg-rec-created').css('display', 'flex');</script>";

        }


    

    } else {

        header("Location: ../login.php?login=false");

    }

    

?>