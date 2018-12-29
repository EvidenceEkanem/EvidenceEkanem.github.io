<?php
session_start();
	require "connection.php";
	$id = $_GET['id'];

	$sql = "DELETE FROM posts WHERE id = $id";

	$result = $conn->exec($sql);

	if ($result) {
		$_SESSION['delete'] = "Student Deleted Successfully";
		
		header("location: cardPost.php?id=$id");
	} else {
		$_SESSION['error'] = "Unable to delete student - Back off!!!";
		header("location: cardPost.php?id=$id");
	}