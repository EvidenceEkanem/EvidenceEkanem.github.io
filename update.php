<?php
session_start();
require "connection.php";

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

$sql = "UPDATE posts SET title='$title', content='$content' WHERE id=$id";

$result = $conn->exec($sql);


if ($result) {
    
    include_once "connection.php";
    $sql = "SELECT * FROM posts WHERE id=$id";

    $get_result = $conn->query($sql);

    $post = $get_result->fetch(PDO::FETCH_ASSOC);

    $_SESSION['message'] = "Post edited successfully!";
    header("location: single_post.php?id=$id");
    // header('location: index2.php');
    exit;
    // echo "Your update is successful!";
}else{
	$_SESSION['error'] = "Something just happened!";
	header("location: single_post.php?id=$id");
	// echo "Something just happened!";
	exit;
}

// $id = (int) $_GET['id'];
// require "connection.php";
// $sql = "SELECT * FROM posts WHERE id=$id";

// $result = $conn->query($sql);

// $post = $result->fetch(PDO::FETCH_ASSOC);