<?php
session_start();
 include_once "functions.php";

 if (!isLoggedIn()) {
 	session_destroy();
 	 // header("location: index2.php");
 }