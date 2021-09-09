<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    
    <link rel="icon" href="css/resources/it_logo.png">

    <title>ITELEC 4100 LAB | Login</title>

    <link rel="stylesheet" href="css/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">

    <script src="https://kit.fontawesome.com/674b5b9445.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</head>



<body>
    


    
    <div class="login-form-wrapper">

        <form method="POST">

            <h4 class="form-title">
                <i class="fas fa-user"></i>
                login credentials
            </h4>

            <div class="form-group inline-input-icon">
                <label for="getEmailAddress"><i class="fas fa-at"></i></label>
                <input type="text" name="getEmailAddress" id="getEmailAddress" class="form-control" placeholder="Email address">
            </div>


            <div class="desktop mt-4"></div>

            <div class="form-group inline-input-icon">
                <label for="getPassword"><i class="fas fa-key"></i></label>
                <input type="password" name="getPassword" id="getPassword" class="form-control" placeholder="Password">
            </div>


            


            <!-- PHP codes for login starts here -->
            <?php
                include_once 'db/connection.php';

                // for student login
                if(isset($_POST['submit-student'])) {


                    $email = $_POST['getEmailAddress'];
                    $password = $_POST['getPassword'];
                    $position = "student";

                    $stud_login_sql = "SELECT * FROM login";
                    $stud_login_result = mysqli_query($conn, $stud_login_sql);
                    

                    // check if the table login has content/values/data
                    if (mysqli_num_rows($stud_login_result) > 0) {

                        // loops all the data from the table
                        while($row = mysqli_fetch_assoc($stud_login_result)) {

                            // checks the inputted credentials whether it is valid or not
                            if ($email == $row['user_email'] && $password == $row['user_password'] && $row['user_position'] == "student") {
                                
                                session_start();
                                $_SESSION["ID"] = $row['user_id'];
                                header("Location: index.php?student=true");

                            }

                        }

                        // prints error message when condition is not met
                        echo "<p class='login-error-msg text-danger'>Invalid email address or password!</p>";

                    }

                }





                // for admin login
                if (isset($_POST['submit-admin'])) {


                    $email = $_POST['getEmailAddress'];
                    $password = $_POST['getPassword'];
                    $position = "admin";

                    $admin_login_sql = "SELECT * FROM login";
                    $admin_login_result = mysqli_query($conn, $admin_login_sql);
                    

                    // check if the table login has content/values/data
                    if (mysqli_num_rows($admin_login_result) > 0) {

                        // loops all the data from the table
                        while($row = mysqli_fetch_assoc($admin_login_result)) {

                            // checks the inputted credentials whether it is valid or not
                            if ($email == $row['user_email'] && $password == $row['user_password'] && $row['user_position'] == "admin") {
                                
                                session_start();
                                $_SESSION["ID"] = $row['user_id'];
                                header("Location: admin/index.php");

                            }

                        }

                        // prints error message when condition is not met
                        echo "<p class='login-error-msg text-danger'>Invalid email address or password!</p>";

                    }

                }




            ?>




            <p class="mt-4 mb-3 login-as">Login as</p>

            <div class="form-group form-buttons">
                <button type="submit" name="submit-student" class="btn btn-success">STUDENT</button>

                <div class="button-seperators">
                    <span class="line"></span>
                    <p>or</p>
                    <span class="line"></span>
                </div>

                <button type="submit" name="submit-admin" class="btn btn-primary">ADMINISTRATOR</button>
            </div>

        </form>



    </div>


    <div class="animation-text desktop">
        
        <div class="title-wrapper">
            <h1>PHP Refresher</h1>
        </div>

        <div class="activity-description">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus aliquam animi, vel numquam enim iste nulla autem quae. Labore impedit illo laudantium? Impedit optio rerum iure, quisquam eveniet et similique aspernatur nemo! Voluptates ducimus nihil est provident suscipit vero, cum eaque voluptate?</p>
        </div>

    </div>

    <div class="developer-wrapper desktop">
        <p class="text-white p-title">Activity 1</p>
        <p>Submitted by</p>
        <h1 id="loop-animation">LABISTE, DARWIN B.</h1>
    </div>



    <script src="js/script.js"></script>
</body>
</html>