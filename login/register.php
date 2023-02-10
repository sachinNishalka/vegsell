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
   	 <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../index/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Govipola.store</title>
</head>
<body>
<?php
include '../include/finalmenu.php';
?>
<center>
    <h1 class="mt-5">Register Here!</h1>
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

        <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
    </form>




</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>