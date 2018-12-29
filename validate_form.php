<?php
session_start();

include "connection.php";

$userName = $_POST['username'];
$password = $_POST['password'];

if (empty($username)) {
	$_SESSION['error'] = "please input your name";
	header("location: index.php");
	exit;
}
if (preg_match("/[^A-Za-z0-9\s]/", $userName)) {
	$_SESSION['error'] = "Invalid Username";
	header("location: index.php");
	exit;
}
if (empty($password)) {
	$_SESSION['error']  = "please input your password";
	header("location: index.php");
	exit;
}

if (preg_match("/[^A-Za-z0-9\s]/", $password)) {
	$_SESSION['error']  = "your password must only contain alphabets and/or number";
	header("location: index.php");
	exit;
}

$sql = "SELECT * FROM users WHERE username='$userName' && password='$password'";


$result = $conn->query($sql);

$user = $result->fetch(PDO::FETCH_ASSOC);


	if($userName !== $user['username'] || $password !== $user['password']){
		$_SESSION['error'] = "User not found. Please click on Register to create an Account";
		header("location: index.php");
		exit;
	}


	$_SESSION['username'] = $user['username'];
	
	if($user['username'] === $_SESSION['username']){
		header("location: new_post.php");
		exit;
	}

	exit;


$username = $_POST['username'];
$password = $_POST['password'];
