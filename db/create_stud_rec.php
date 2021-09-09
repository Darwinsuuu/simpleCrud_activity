<?php

if (isset($_POST['btnSubmitCreateStudentRecord'])) {
    $stud_name = $_POST['getCreateStudentName'];
    $stud_age = $_POST['getCreateStudentAge'];
    $stud_email = $_POST['getCreateEmailAddress'];
    $stud_gpa = $_POST['getCreateGPA'];



    echo "<script>console.log('".$stud_name."');</script>";
    echo "<script>console.log('".$stud_age."');</script>";
    echo "<script>console.log('".$stud_email."');</script>";
    echo "<script>console.log('".$stud_gpa."');</script>";
    echo "<script>$('#success-msg-rec-created').css('display', 'flex');</script>";


    echo "Record is successfully created!";

} else {

    header("Location: ../login.php?login=false");

}

    

?>