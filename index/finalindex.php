<?php include '../include/sessionstart.php'; ?>
<?php include '../include/dbinit.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Vegitable Shop</title>
</head>
<body>
	
<!-- Navigation Bar -->

<?php include "../include/finalmenu.php" ?>

<!--End Navigation Bar -->

<!-- First Banner -->

<div class="banner-area">
  <div class="content-area">
    <div class="content">
      <h1>Welcome To Market</h1>
      <p>Srilanka First Online Vegitable Market.</p>
      <button class="btn btn-success" href="#">Fresh Vegitables</button>
    </div>
  </div>
</div>

<!-- End First Banner -->


<!-- Start vegitable Section -->

<div class="container">
  <div class="row mx-auto">
    <div class="col-12">
      <h1 class="text-center my-5" id="vs">FRESH VEGITABLES</h1>
    </div>
    <hr>
    
    

     <?php
//                print_r($_SESSION);
               
//                echo "<br>" . $uid. "</br>";
                $sql = "SELECT * FROM ads";
                $result = $conn->query($sql);


            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {

                    echo '<div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-lg-3 mb-3 mt-3 mx-auto" style="width: 18rem;">
  <img src="../uploads/'.$row["img"].'" class="card-img-top" alt="tomato">
  <div class="card-body">
    <h5 class="card-title">'.$row["vgname"].'</h5>
    <p class="card-text">'.$row["description"].'</p>
    <h5 class="card-title">1KG - Rs:'.$row["amount"].'/=</h5>
    <h6 class="card-title">Contact : '.$row["contact"].'</h6>
   
  </div>
  </div>';








                }
            } else {
                echo "0 results";
            }
            $conn->close();



            ?>

  




  

  


  


 




  </div>
</div>

<!-- End vegitable Section -->

<!-- Start buy or sell Section -->

<div class="container mt-3">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl- mt-3 mb-2">
      

<div class="sellbuy-area">
  <div class="content-sellbuy-area">
    <div class="sellbuy-area-content">
      <h1>Sell Your Vegitables</h1>
      <p>Srilanka First Online Vegitable Market.</p>
      <button class="btn btn-success" href="#">Sell Vegitables</button>
    </div>
  </div>
</div>




    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-3 mb-2">
      



<div class="sellbuy-area1">
  <div class="content-sellbuy-area">
    <div class="sellbuy-area-content">
      <h1>Buy Your Vegitables</h1>
      <p>Srilanka First Online Vegitable Market.</p>
      <button class="btn btn-success" href="#">Buy Vegitables</button>
    </div>
  </div>
</div>



    </div>
  </div>
</div>

<!-- End buy or sell Section -->


<!-- footer section -->


<div class="container-fluid">
 
  <footer
          class="text-center text-lg-start text-dark"
          style="background-color: #ECEFF1"
          >
    <!-- Social media -->
    <section
             class="d-flex justify-content-between p-4 text-white"
             style="background-color: #21D192"
             >
      
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      

      
      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        
      </div>
      
    </section>
    
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Vegitable Shop</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
          
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Vegitables</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-dark">Tomato</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Beans</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Jack Fruit</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Vegi 1</a>
            </p>
          </div>
          
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-dark">Your Account</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Sell Vegitables</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Buy Vegitables</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Help</a>
            </p>
          </div>
          
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> Homagama, Nsbm, Srilanka</p>
            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p><i class="fas fa-phone mr-3"></i> 0766278839</p>
            <p><i class="fas fa-print mr-3"></i> 0773974468</p>
          </div>
          
        </div>
        
      </div>
    </section>
    

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2022 Design & Develop By 
      <a class="text-dark" href="https://www.linkedin.com/in/savindu-senanayake-8878841b3"
         >Savindu Senanayake.</a
        >
    </div>
    
  </footer>
  
</div>


<!-- end footer section -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>