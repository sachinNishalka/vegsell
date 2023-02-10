<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light " style="background-color: #ADE792 !important;">
  <div class="container">
    <a class="navbar-brand" href="#">Vegitable Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 300px;">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#vs">Shop</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Vegitables</a>
        </li>


       <!-- this line for backend link to naigation bar -->

       <?php

            if(isset($_SESSION["user"])){

                if(($_SESSION["usertype"]==="user")){
                    echo '<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 🤪'.$_SESSION["user"].'</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="../Crud/create.php">Post Ad</a></li>
                                    <li><a class="dropdown-item" href="../Crud/allads.php">View Ads</a></li>
                                    <li><a class="dropdown-item" href="../Crud/edit.php">Edit Ads</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../login/logoutaction.php">Logout</a></li>';

                }

            }else{
                // print_r($_SESSION["user"]);
                echo '<li class="nav-item"><a class="nav-link" href="../login">Login</a></li>';
            }

        ?>
        


        
          
        





        

        <!-- End this line for backend link to naigation bar -->
        
      </ul>

      
    </div>
  </div>
</nav>


