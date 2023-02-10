<?php include '../include/sessionstart.php'; ?>
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
		<div class="container mt-5">	
			<center>
				<h2 class="mt-5">Login</h2>
			</center>	
				
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
				
				<button class="btn btn-warning mt-2" type="reset" >Reset</button>&nbsp;
				<button class="btn btn-success mt-2" type="submit" >Login</button>
                <a href="./register.php" class="btn btn-info mt-2">Register</a>

			</form>
		</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	</body>
</html>




