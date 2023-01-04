<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index">GoviPala</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../index">HOME</a></li>
                <li><a href="#STORE">STORE</a></li>
                <li><a href="#TEAM">TEAM</a></li>
                <li><a href="#CONTACT">CONTACT</a></li>

                <?php
                if(isset($_SESSION["user"])){
                    if($_SESSION["usertype"]==="admin"){
                        print_r($_SESSION);
                        echo "Im Admin";}
                    if($_SESSION["usertype"]==="user"){
                        echo "<span class='badge badge'>Regualar User</span>";
                    }
                    if($_SESSION["usertype"]===""){
                        echo "";}
                    echo '<li><ahref="#">Hi 👨'.$_SESSION["user"].'</a></li>';
                    echo '<li><a href="../login/logoutaction.php">Logout</a></li>';
                } else {
                    echo '<li><a href="../login">Login</a></li>';
                }
                ?>

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










                <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
            </ul>











        </div>
    </div>
</nav>