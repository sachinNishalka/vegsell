

<?php 
//Database Configuration-----------------------------------------------
	$dbServerName = "localhost";
	$dbUserName = "root";
	$dbPassword = "";
	$dbName = "mydb";

	// Create connection
	$conn = new mysqli($dbServerName, $dbUserName, $dbPassword, $dbName);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}	
?>