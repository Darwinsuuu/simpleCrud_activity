<?php
    include_once '../db/connection.php';

    session_start();

    // prevent users from entering page with logging in their credentials
    if(!isset($_SESSION["ID"])) {    
        header("Location: ../login.php?success=false");
    }

    $id = $_GET['id'];
    $sql_select_one = "SELECT * FROM student where id = $id";

    $result = mysqli_query($conn, $sql_select_one);

    if(mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)){

            $name = $row["name"];
            $age = $row["age"];
            $email = $row["email"];
            $gpa = $row["gpa"];

        }

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="icon" href="../css/resources/it_logo.png">

    <title>Admin | Manage records</title>

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
                        <a href="index.php">
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


        <div id="success-msg-rec-created" class="created-success-msg bg-success animateInSuccessMsg">
            <i class="fas fa-check-circle text-white"></i>
            <p id="msg-success-overlay"></p>
        </div>
                        

        <div class="content-wrapper">
            
        
            
            <div class="content-add-record-wrapper">


                <div class="title-img-wrapper">
                    <div class="img-wrapper-profile">
                        <img src="../css/resources/undraw_male_avatar_323b.svg" alt="undraw_male_avatar_323b.svg">
                    </div>
                    

                    <h1>Update student record</h1>

                </div>
    
                

                <div class="form-create-wrapper">
                    <form id="create_student_record_form" action="../db/create_stud_rec.php" method="POST">

                    
                        <input type="text" id="idCheck" value="<?php echo $id ?>">

                        <div class="form-group col-12">
                            <label for="getCreateStudentName">Student name <p>(Given name, middle name, surname)</p></label>
                            <div class="flex-input-icon">
                                <input type="text" class="form-control" id="getCreateStudentName" name="getCreateStudentName" autocomplete="off" value="<?php echo $name ?>">
                                <i id="error_msg" class="fas fa-exclamation-circle text-danger"></i>
                            </div>
                            
                            <p id="name_error_msg" class="create-stud-invalid-input"></p>
                        </div>
    
    
                        <div class="form-group col-12">
                            <label for="getCreateStudentAge">Age</label>
                            <div class="flex-input-icon">
                                <input type="text" class="form-control" id="getCreateStudentAge" name="getCreateStudentAge" autocomplete="off" value="<?php echo $age ?>">
                                <i id="error_msg1" class="fas fa-exclamation-circle text-danger"></i>
                            </div>
                            
                            <p id="name_error_msg1" class="create-stud-invalid-input"></p>
                        </div>
    
    
                        <div class="form-group col-12">
                            <label for="getCreateEmailAddress">Email Address</label>
                            <div class="flex-input-icon">
                                <input type="text" class="form-control email-only" id="getCreateEmailAddress" name="getCreateEmailAddress" autocomplete="off" value="<?php echo $email ?>">
                                <i id="error_msg2" class="fas fa-exclamation-circle text-danger"></i>
                            </div>
                            
                            <p id="name_error_msg2" class="create-stud-invalid-input"></p>
                        </div>
    
    
                        <div class="form-group col-12">
                            <label for="getCreateGPA">GPA</label><div class="flex-input-icon">
                                <input type="text" class="form-control" id="getCreateGPA" name="getCreateGPA" autocomplete="off" placeholder="0.00" value="<?php echo $gpa ?>">
                                <i id="error_msg3" class="fas fa-exclamation-circle text-danger"></i>
                            </div>

                            <p id="name_error_msg3" class="create-stud-invalid-input"></p>
                        </div>
    

    
                        <div class="form-group col-12 mt-5">
                            <button type="submit" id="submit-data" name="btnSubmitCreateStudentRecord" class="button-submit-create btn btn-success w-100 p-4">Create new record</button>
                        </div>
                        
                        <input type="text" id="page" value="1" readonly>


                    </form>
                </div>
                
               
               

            </div>


        </div>
    </div>


    <script src="../js/script.js"></script>


</body>
</html>