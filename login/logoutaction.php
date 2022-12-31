<?php 
	include '../include/sessionstart.php';
	session_destroy();
	header("Location:../login");
?>