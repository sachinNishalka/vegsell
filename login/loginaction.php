<?php
include '../include/sessionstart.php';

$userName = $_GET["username"];
$password = $_GET["password"];
include '../include/dbinit.php';

$sql = "SELECT * FROM user WHERE user_name='$userName' AND password='$password'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();				
				
if ($result->num_rows > 0) {
	echo "Login success";
    $_SESSION["userid"]=$row["id"];
    $_SESSION["user"]=$row["fisrt_name"]. " " .$row["last_name"];
	$_SESSION['usertype']=$row["usertype"];
	
	header("Location:../index/finalindex.php");	
	

		
	
} else {
	echo "Login Failed";
	$_SESSION["messege"]="Invalid Login";
	header("Location:index.php");	
}
?>