<?php

$sql = "INSERT INTO users (firstname, lastname, username, email, phonenumber, password, confirmpassword)
 VALUES ('$firstName', '$lastName', '$userName', '$email', '$phoneNumber', '$password', '$confirmPassword')";

$done = $conn->exec($sql);

$_SESSION['message'] = 'Registration Completed!, Please proceed to <a href="index.php"><button type="button" class="bg-danger login-butt text-white">  Login </button></a></p>';
header('location: index2.php');
exit;