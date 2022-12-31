<nav class="navbar navbar-expand-md bg-light navbar-light">
	<a class="navbar-brand" href="../index">WELCOME MAIN PAGE</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
  
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<li class="nav-item active"><a class="nav-link" href="../index">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="../user">User</a></li>
<!--			<li class="nav-item"><a class="nav-link" href="../item">Item</a></li>-->




            <?php
                if (isset($_SESSION["user"])){
                    if ($_SESSION["usertype"]==="user"){
//                        echo "<li class='nav-item'><a class='nav-link' href='../item'>View</a></li>";
//                        echo "<li class='nav-item'><a class='nav-link' href='../item'>Create</a></li>";
//                        echo "<li class='nav-item'><a class='nav-link' href='../item'>Edit</a></li>";

                        echo "<li class='nav-item dropdown'>
				<a class='nav-link dropdown-toggle' href='#' id='navbardrop' data-toggle='dropdown'>
                            Posts
				</a>
				<div class='dropdown-menu'>
					<a class='dropdown-item' href='../Crud/create.php'>Create</a>
					<a class='dropdown-item' href='../Crud/edit.php'>Edit</a>
					<a class='dropdown-item' href='../Crud/allads.php'>View</a>
				</div>
			</li>";
                    }
                }
            ?>










		</ul>
		
		<ul class="navbar-nav ml-auto">
			<?php 
			
			
			
			
			
				if(isset($_SESSION["user"])){
			
					
		if($_SESSION["usertype"]==="admin"){
            print_r($_SESSION);
			echo "Im Admin";}

	
			if($_SESSION["usertype"]==="user"){
			echo "Im user";


            }
			
			if($_SESSION["usertype"]===""){
			echo "";}



					
					echo '<li class="nav-item"><a class="nav-link" href="#">'.$_SESSION["user"].'</a></li>';
					
					echo '<li class="nav-item"><a class="nav-link" href="../login/logoutaction.php">Logout</a></li>';
				
				
		
				
				
				
				
				
				} else {
					echo '<li class="nav-item"><a class="nav-link" href="../login">Login</a></li>';
				}
			
			
		
			
			
			
			?>
			
			
		</ul>
	</div>
</nav>