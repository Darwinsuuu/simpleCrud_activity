<?php
    session_start();

    // prevent users from entering page with logging in their credentials
    if(!isset($_SESSION["ID"])) {
        header("Location: ../login.php?success=false");
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
                        <a href="index.php">
                            <i class="fas fa-file-alt"></i>
                            Manage Records
                        </a>
                    </li>

                    <li>
                        <a class="active" href="delete_all_records.php">
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
            
            <div class="content-card-delete-wrapper">

                <h1>Delete All Student Records</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa sint vero ipsam cumque aliquam, cupiditate eaque quas illo totam eos veniam. Sapiente praesentium itaque ut deserunt impedit maxime, dolor harum eum, beatae aut sequi eos vel ratione temporibus, architecto fugiat quia labore dolorum! Natus id, expedita non veritatis, accusantium asperiores deleniti tempora, officia saepe eligendi aliquid.

                <br><br>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia cupiditate odio voluptates. Porro fugit, mollitia cum numquam a hic pariatur dolore, sed, voluptatibus laboriosam voluptates odit.
                </p>

                <div class="form-group button-delete-all-wrapper">
                    <button type="button" class="btn btn-danger">Wipe all records</button>
                </div>
            </div>


        </div>
    </div>


</body>
</html>