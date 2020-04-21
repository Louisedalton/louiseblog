<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "louiseblog");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
	   
//define global constraints
	define('ROOT_PATH', 'C:\xampp\htdocs\louiseblog');
	define('BASE_URL', 'http://localhost/louiseblog');
?>