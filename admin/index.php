<?php
    session_start();

    // prevent users from entering page with logging in their credentials
    if(!isset($_SESSION["ID"])) {    
        header("Location: ../login.php?login=false");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="icon" href="../css/resources/it_logo.png">

    <title>Admin | View All Records</title>

    <link rel="stylesheet" href="../css/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">

    <script src="https://kit.fontawesome.com/674b5b9445.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

</head>
<body>
    
    
    <div class="container-fluid">
        

        <div class="navigation">

            <div class="nav-title">
                <h2>Administrator's Module</h2>
            </div>

            <nav>
                <ul>

                    <div class="sub-title-nav">
                        <p>Student Records</p>
                    </div>

                    <li>
                        <a href="create_student_record.php">
                            <i class="fas fa-plus-circle"></i>
                            Create student record
                        </a>
                    </li>

                    <li>
                        <a class="active" href="index.php">
                            <i class="fas fa-file-alt"></i>
                            Manage records
                        </a>
                    </li>

                    <li>
                        <a href="delete_all_records.php">
                            <i class="fas fa-trash-alt"></i>
                            Delete all records
                        </a>
                    </li>


                    <div class="sub-title-nav">
                        <p>Accounts</p>
                    </div>
                    
                    <!-- <li>
                        <a href="acc_create.html">
                            <i class="fas fa-user-plus"></i>
                            Create account
                        </a>
                    </li>

                    <li>
                        <a href="acc_update.html">
                            <i class="fas fa-user-edit"></i>
                            manage accounts
                        </a>
                    </li> -->

                    <li>
                        <a href="../db/logout.php">
                            <i class="fas fa-sign-out-alt"></i>
                            logout
                        </a>
                    </li>
                </ul>

                
            </nav>
        </div>



        <div class="content-wrapper">
            
            
            <h1 class="title-table">STUDENT RECORDS</h1>
            
            <div class="content-card-wrapper">

                <!-- student info card template -->
                <!-- <div class="student-card-info">

                    <div class="img-student-card-wrapper">
                        <img src="../css/resources/undraw_male_avatar_323b.svg" alt="undraw_male_avatar_323b.svg">
                    
                        <div class="button-profile-update-delete-wrapper mt-3">
                            <button class="btn btn-primary w-100 mb-2">
                                <i class="fas fa-pencil-alt mr-1"></i>
                                Edit
                            </button>
                            <button class="btn btn-danger w-100">
                                <i class="fas fa-trash-alt mr-1"></i>
                                Delete
                            </button>
                        </div>
                    </div>

                    <div class="student-card-info-content-infos">

                        <div class="form-group">
                            <b>Fullname</b>
                            <p>Labiste, Darwin Bulgado</p>
                        </div>

                        <div class="form-group">
                            <b>Age</b>
                            <p>21 yrs old</p>
                        </div>

                        <div class="form-group">
                            <b>Email Address</b>
                            <p>labiste.darwin@clsu2.edu.ph</p>
                        </div>

                        <div class="form-grou">
                            <b>Grade Point Average (GPA)</b>
                            <p>92.56%</p>
                        </div>

                    </div>


                </div> -->

                
                <!-- no record found template -->
                <!-- <div class="no-record-found">
                    <p>No record found.</p>
                </div> -->

                <?php

                    include_once '../db/connection.php';


                    $sql_select_records = "SELECT * FROM student";
                    $result = mysqli_query($conn, $sql_select_records);

                    if(mysqli_num_rows($result) > 0) {

                        while($row = mysqli_fetch_assoc($result)) {

                        
                        echo "<div class='student-card-info'>"
                                ."<div class='img-student-card-wrapper'>"
                                    ."<img src='../css/resources/undraw_male_avatar_323b.svg' alt='undraw_male_avatar_323b.svg'>"
                                                            
                                    ."<div class='button-profile-update-delete-wrapper mt-3'>"
                                       

                                        ."<form action='edit_student_record.php?id=".$row['id']."' method='POST'>"
                                            ."<button class='btn btn-primary w-100 mb-2' id='btnEditCardInfo'>"
                                                ."<i class='fas fa-pencil-alt mr-1'></i>"
                                                ."Edit"
                                            ."</button>"
                                        ."</form>"


                                        ."<form action='../db/delete_record.php?id=".$row['id']."' method='POST'>"
                                        

                                            ."<button class='btn btn-danger w-100 text-white' name='btnDelete'>"
                                                ."<i class='fas fa-trash-alt mr-1'></i>"
                                                ."Delete"
                                            ."</button>"

                                        ."</form>"
                                        
                                    ."</div>"
                            
                                ."</div>"
                            
                            
                                ."<div class='student-card-info-content-infos'>"
                            
                                    ."<div class='form-group'>"
                                        ."<b>Fullname</b>"
                                        ."<p>".$row['name']."</p>"
                                    ."</div>"
                            
                                    ."<div class='form-group'>"
                                        ."<b>Age</b>"
                                        ."<p>".$row['age']."</p>"
                                    ."</div>"
                            
                                    ."<div class='form-group'>"
                                        ."<b>Email Address</b>"
                                        ."<p>".$row['email']."</p>"
                                    ."</div>"
                            
                                    ."<div class='form-grou'>"
                                    ."<b>Grade Point Average (GPA)</b>"
                                        ."<p>".$row['gpa']."</p>"
                                    ."</div>"
                            
                                ."</div>"
                            
                            ."</div>";

                        }

                    } 
                    
                    else {
                        

                        echo "<div class='no-record-found'><p>No record found.</p></div>";
 

                    }

                ?>




            </div>


        </div>
    </div>


    <div class="modal-card-info">
        <div class="modal-card-info-wrapper">

            <div class="modal-title-info">
                <p>UPDATE STUDENT RECORD</p>
            </div>

            <div class="img-wrapper">
                <img src="../css/resources/undraw_male_avatar_323b.svg" alt="undraw_male_avatar_323b.svg">
            </div>

            <div class="modal-body-info">
                <form action="">


                    <div class="form-group">
                        <label for="updateName">Fullname</label>
                        <input type="text" class="form-control" id="updateName">
                    </div>

                    <div class="form-group">
                        <label for="updateName">Age</label>
                        <input type="text" class="form-control" id="updateName">
                    </div>

                    <div class="form-group">
                        <label for="updateName">Email</label>
                        <input type="text" class="form-control" id="updateName">
                    </div>

                    <div class="form-group">
                        <label for="updateName">GPA</label>
                        <input type="text" class="form-control" id="updateName">
                    </div>


                    <div class="form-group mt-5">
                        <button class="btn btn-success w-100 mb-3 p-3">UPDATE</button>
                        <button class="btn btn-default w-100 p-3" id="closeBtnCardInfo">CANCEL</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <script src="../js/script.js"></script>

</body>
</html>