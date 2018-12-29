<?php

session_start();

include('connection.php');

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$userName = $_POST['username'];
$email = $_POST['email'];
$phoneNumber = $_POST['phonenumber'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmpassword'];

// include('connection.php');

// $_SESSION['errors'] = [];
// $_SESSION['user_id'] = $_GET['id'];
// var_dump($_SESSION['user_id']);
// exit;

if(empty($firstName)){
    $_SESSION['error'] = "Please input first name";
    header("location: index2.php");
    exit;
}

if(!preg_match("/^[A-Za-z ]/", $firstName)){
    $_SESSION['error'] = "Only letters and white spaces are allowed";
    header("location: index2.php");
    exit;
}
if(empty($lastName)){
    $_SESSION['error'] = "Please input last name";
    header("location: index2.php");
    exit;
}

if(!preg_match("/^[A-Za-z ]/", $lastName)){
    $_SESSION['error'] = "Only letters and white spaces are allowed";
    header("location: index2.php");
    exit;
}

if(empty($userName)){
    $_SESSION['error'] = "Please input a username";
    header("location: index2.php");
    exit;
}

if(!preg_match("/^[A-Za-z][A-Za-z0-9]/", $userName)){
    $_SESSION['error'] = "Invalid Username";
    header("location: index2.php");
    exit;
}

if(empty($email)){
    $_SESSION['error'] = "Please input an email address";
    header("location: index2.php");
    exit;
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['error'] = "Invalid email address";
    header("location: index2.php");
    exit;
}

if(empty($phoneNumber)){
    $_SESSION['error'] = "Please input a Phone Number";
    header("location: index2.php");
    exit;
}

if(!preg_match("/^[0-9]/", $phoneNumber)){
    $_SESSION['error'] = "Invalid Phone Number";
    header("location: index2.php");
    exit;
}

if(strlen($phoneNumber)<7){
    $_SESSION['error'] = "Invalid Phone Number";
    header("location: index2.php");
    exit;
}

if(empty($password)){
    $_SESSION['error'] = "Please input a password";
    header("location: index2.php");
    exit;
}

if(!preg_match("/[A-Za-z0-9]/", $password)){
    $_SESSION['error'] = "Invalid Password";
    header("location: index2.php");
    exit;
}
if(empty($confirmPassword)){
    $_SESSION['error'] = "Please input a password";
    header("location: index2.php");
    exit;
}

if($password !== $confirmPassword){
    $_SESSION['error'] = "Passwords do not match";
    header("location: index2.php");
    exit;
}
$checkUser = "SELECT * FROM users WHERE username = '$userName'";
$result = $conn->query($checkUser);
$user = $result->fetch(PDO::FETCH_ASSOC);


if($user){
    $_SESSION['error'] = "Username already exists. Please choose a different username";
    header("location: index2.php");
    exit;
};


include('insert.php');
header("location: index2.php");
exit;