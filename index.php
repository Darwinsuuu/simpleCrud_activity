<?php
    session_start();

    // prevent users from entering page with logging in their credentials
    if(!isset($_SESSION["ID"])) {    
        header("Location: login.php?success=false");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    

    <link rel="icon" href="css/resources/it_logo.png">

    <title>ITELEC 4100 LAB | Homepage</title>

    <link rel="stylesheet" href="css/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">

    <script src="https://kit.fontawesome.com/674b5b9445.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</head>
<body>
    
    <a href="db/logout.php" class="btn btn-danger button-logout">LOGOUT</a>

    <div class="container-fluid">

    
        <h1 class="student-record-title">STUDENT'S RECORD</h1>

        <div class="search-wrapper">
            <input type="text" class="form-control" placeholder="Search for student name">
        </div>
        

        <div class="student-wrapper">


            <table>

                <thead>
                    <th>Student Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>GPA</th>
                </thead>

                <tbody>
                    <tr>
                        <td>Darwin Bulgado Labiste</td>
                        <td>21 Yrs Old</td>
                        <td>labiste.darwin@clsu2.edu.ph</td>
                        <td>93.5%</td>
                    </tr>

                    <tr>
                        <td>Darwin Bulgado Labiste</td>
                        <td>21 Yrs Old</td>
                        <td>labiste.darwin@clsu2.edu.ph</td>
                        <td>93.5%</td>
                    </tr>


                    <tr>
                        <td>Darwin Bulgado Labiste</td>
                        <td>21 Yrs Old</td>
                        <td>labiste.darwin@clsu2.edu.ph</td>
                        <td>93.5%</td>
                    </tr>

                    <tr>
                        <td>Darwin Bulgado Labiste</td>
                        <td>21 Yrs Old</td>
                        <td>labiste.darwin@clsu2.edu.ph</td>
                        <td>93.5%</td>
                    </tr>


                    <tr>
                        <td>Darwin Bulgado Labiste</td>
                        <td>21 Yrs Old</td>
                        <td>labiste.darwin@clsu2.edu.ph</td>
                        <td>93.5%</td>
                    </tr>

                    <tr>
                        <td>Darwin Bulgado Labiste</td>
                        <td>21 Yrs Old</td>
                        <td>labiste.darwin@clsu2.edu.ph</td>
                        <td>93.5%</td>
                    </tr>

                    <tr>
                        <td>Darwin Bulgado Labiste</td>
                        <td>21 Yrs Old</td>
                        <td>labiste.darwin@clsu2.edu.ph</td>
                        <td>93.5%</td>
                    </tr>

                    <tr>
                        <td>Darwin Bulgado Labiste</td>
                        <td>21 Yrs Old</td>
                        <td>labiste.darwin@clsu2.edu.ph</td>
                        <td>93.5%</td>
                    </tr>

                    <tr>
                        <td>Darwin Bulgado Labiste</td>
                        <td>21 Yrs Old</td>
                        <td>labiste.darwin@clsu2.edu.ph</td>
                        <td>93.5%</td>
                    </tr>

                    <tr>
                        <td>Darwin Bulgado Labiste</td>
                        <td>21 Yrs Old</td>
                        <td>labiste.darwin@clsu2.edu.ph</td>
                        <td>93.5%</td>
                    </tr>

                    <tr>
                        <td>Darwin Bulgado Labiste</td>
                        <td>21 Yrs Old</td>
                        <td>labiste.darwin@clsu2.edu.ph</td>
                        <td>93.5%</td>
                    </tr>

                    <tr>
                        <td>Darwin Bulgado Labiste</td>
                        <td>21 Yrs Old</td>
                        <td>labiste.darwin@clsu2.edu.ph</td>
                        <td>93.5%</td>
                    </tr>
                </tbody>

            </table>

        </div>

    </div>

</body>
</html>