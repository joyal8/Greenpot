<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();


 $row=0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="loginpage/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="loginpage/css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="usercontroller/logreg.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title" style="color:white;">login here</h2>
                        
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" required/>
                        </div>


                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password" required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                       
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                            <label style="color:white;" for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service" style="color:wheat;">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" id="submit" class="form-submit" value="Login"/>
                        </div>
                    </form>
                    <p class="loginhere" style="color: lawngreen;">
                        New User? <a href="register.php" class="loginhere-link" style="color:white ">Register here</a>
                    </p>
                    <p style="color:white">forgot password?<a href="forgotemail.php?id=<?= $row['u_id']; ?>" style="color: lawngreen;"> try new password!</a></p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="loginpage/vendor/jquery/jquery.min.js"></script>
    <script src="loginpage/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>