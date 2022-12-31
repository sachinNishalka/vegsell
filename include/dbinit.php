

<?php 
//Database Configuration-----------------------------------------------
	$dbServerName = "localhost";
	$dbUserName = "u996882231_janith";
	$dbPassword = "Janith123";
	$dbName = "u996882231_mydb";

	// Create connection
	$conn = new mysqli($dbServerName, $dbUserName, $dbPassword, $dbName);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}	
?>