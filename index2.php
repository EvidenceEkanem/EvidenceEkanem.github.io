<?php
include_once "checkSession.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    
    <section id="registration">
    <?php include_once('header.php'); ?>
      

        <div class="container registration">
            <div class="row">
                <div class="col-md-6">
                    <div class="modern-solutions">
                        <div class="logo-img">
                            <img src="images/logo2.png" alt="Logo Image" class="registration-form-logo-img">
                        </div>
                        <h1 class="text-light">Modern Solutions-</h1>
                        <p class="text-light">Professional Landing Page</p>
                        <button type="submit" class="btn read-more-butt">Read More</button>
                        <button type="submit" class="btn watch-video-butt">Watch Video</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php
                        if(isset($_SESSION['error'])) {
                            echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
                            unset($_SESSION['error']);
                        }

                        if(isset($_SESSION['message'])) {
                            echo '<div class="alert alert-success">' . $_SESSION['message'] . '</div>';
                            unset($_SESSION['message']);
                        }
                    ?>
                    <div class="register-now">
                        <i class="fa fa-desktop" style="font-size:20px; color:#fff;"></i>
                        <h4 class="ml-2 text-light">Register Now</h4>
                    </div>
                    <div class="main-form">
                        <form action="validation.php" method="POST">
                            <input type="text" name="firstname" placeholder="First Name" class="input">
                            <input type="text" name="lastname" placeholder="Last Name" class="input">
                            <input type="text" name="username" placeholder="Username" class="input">
                            <input type="text" name="email" placeholder="Email" class="input">
                            <input type="text" name="phonenumber" placeholder="Phone Number" class="input">
                            <input type="password" name="password" placeholder="Password" class="input">
                            <input type="password" name="confirmpassword" placeholder="confirmPassword" class="input">
                            <button type="submit" class="btn btn-primary register-acc-butt">Register Account</button>
                            <p class="text-light text-center mt-3">Already have an Account? <a href="index.php"><button type="button" class="bg-light login-butt">  Login </button></a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>