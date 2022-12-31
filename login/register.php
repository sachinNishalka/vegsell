<?php include '../include/dbinit.php'; ?>
<?php
    if (isset($_POST["submit"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $uname = $_POST["uname"];
        $pwd = $_POST["pwd"];
        $utype="user";

        $sql= "INSERT INTO user(user_name, password, first_name, last_name, usertype) VALUES ('".$uname."','".$pwd."','".$fname."','".$lname."','".$utype."')";
        if(mysqli_query($conn, $sql)){
            header("Location: ./index.php?reg=success");
        }else{
            header("Location: ./index.php?reg=error");
        }

    }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" >

    <title>Welcome</title>
</head>
<body>
<?php
include '../include/menu.php';
?>
<center>
    <h1>Register Here!</h1>
</center>

<div class="container">

    <form action="./register.php" method="POST">
        <div class="form-group">
            <label for="fname">First Name:</label>
            <input type="text" class="form-control" id="fname" name="fname">
        </div>
        <div class="form-group">
            <label for="lname">Last Name:</label>
            <input type="text" class="form-control" id="lname" name="lname">
        </div>
        <div class="form-group">
            <label for="uname">Username:</label>
            <input type="text" class="form-control" id="uname" name="uname">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="pwd">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>




</div>



<script src="../js/jquery.min.js" ></script>
<script src="../js/bootstrap.min.js" ></script>
</body>
</html>