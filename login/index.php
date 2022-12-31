<?php include '../include/sessionstart.php'; ?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="../css/bootstrap.min.css" >

		<title>Login</title>
	</head>
	<body>
		<?php
			include '../include/menu.php';
			//var_dump($_SESSION);
		?>

    <?php
        if (isset($_GET["reg"])){
            if ($_GET['reg']==='success'){
                echo
                "<div class='alert alert-info alert-dismissible' role='alert'>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
<strong>Congratulations!</strong> You successfully registered your account!
  </div>";
            }else{
                echo
                "<div class='alert alert-danger alert-dismissible' role='alert'>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
<strong>Sorry!</strong> You cound`t register the account!
  </div>";
            }
        }
    ?>
		<div class="container">		
			<h2>Login</h2>	
			<?php 
				if(isset($_SESSION["messege"])){
					echo '<h5 class="bg-danger">'.$_SESSION["messege"].'</h5>';	
					unset($_SESSION["messege"]);
				}			
			?>
			<form method="GET" action="loginaction.php" />
				<div class="form-group">
					<label for="username">User Name</label>
					<input class="form-control" type="text" name="username" id="username" />
				</div>
				
				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" type="text" name="password" id="password" />
				</div>
				
				<button class="btn btn-warning" type="reset" >Reset</button>&nbsp;
				<button class="btn btn-success" type="submit" >Login</button>
                <a href="./register.php" class="btn btn-info">Register</a>

			</form>
		</div>
		<script src="../js/jquery.min.js" ></script>
		<script src="../js/bootstrap.min.js" ></script>
	</body>
</html>




