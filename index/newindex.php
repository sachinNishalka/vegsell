<?php include '../include/sessionstart.php'; ?>
<?php include '../include/dbinit.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Bootstrap Theme The Band</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

    <style>
        body {
            font: 400 15px/1.8 Lato, sans-serif;
            color: rgba(47, 255, 0, 0.855);
        }

        h3,
        h4 {
            margin: 10px 0 30px 0;
            letter-spacing: 10px;
            font-size: 20px;
            color: #111;
        }

        .container {
            padding: 80px 120px;
        }

        .person {
            border: 10px solid transparent;
            margin-bottom: 25px;
            width: 80%;
            height: 80%;
            opacity: 0.7;
        }

        .person:hover {
            border-color: #f1f1f1;
        }

        .carousel-inner img {

            width: 100%;
            /* Set width to 100% */
            margin: auto;
        }

        .carousel-caption h3 {
            color: #fff !important;
        }

        @media (max-width: 600px) {
            .carousel-caption {
                display: none;
                /* Hide the carousel text when the screen is less than 600 pixels wide */
            }
        }

        .bg-1 {
            background: #00ff55;
            color: #bdbdbd;
        }

        .bg-1 h3 {
            color: #fff;
        }

        .bg-1 p {
            font-style: italic;
        }

        .list-group-item:first-child {
            border-top-right-radius: 0;
            border-top-left-radius: 0;
        }

        .list-group-item:last-child {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }

        .thumbnail p {
            margin-top: 15px;
            color: #555;
        }

        .btn {
            padding: 10px 20px;
            background-color: #055706;
            color: #f1f1f1;
            border-radius: 0;
            transition: .2s;
        }

        .btn:hover,
        .btn:focus {
            border: 1px solid #333;
            background-color: #fff;
            color: #000;
        }

        .modal-header,
        h4,
        .close {
            background-color: #333;
            color: #fff !important;
            text-align: center;
            font-size: 30px;
        }

        .modal-header,
        .modal-body {
            padding: 40px 50px;
        }

        .nav-tabs li a {
            color: rgb(34, 255, 0);
        }

        #googleMap {
            width: 100%;
            height: 400px;
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
        }

        .navbar {
            font-family: Montserrat, sans-serif;
            margin-bottom: 0;
            background-color: #04ff00;
            border: 0;
            font-size: 11px !important;
            letter-spacing: 4px;
            opacity: 0.9;
        }

        .navbar li a,
        .navbar .navbar-brand {
            color: #040404 !important;
        }

        .navbar-nav li a:hover {
            color: #fff !important;
        }

        .navbar-nav li.active a {
            color: #fff !important;
            background-color: #055706 !important;
        }

        .navbar-default .navbar-toggle {
            border-color: transparent;
        }

        .open .dropdown-toggle {
            color: #fff;
            background-color: #555 !important;
        }

        .dropdown-menu li a {
            color: rgb(0, 0, 0) !important;
        }

        .dropdown-menu li a:hover {
            background-color: red !important;
        }

        footer {
            background-color: #2d2d30;
            color: #f5f5f5;
            padding: 32px;
        }

        footer a {
            color: #f5f5f5;
        }

        footer a:hover {
            color: rgb(255, 0, 0);
            text-decoration: none;
        }

        .form-control {
            border-radius: 0;
        }

        textarea {
            resize: none;
        }



        .row.heading h2 {
            color: #fff;
            font-size: 52.52px;
            line-height: 95px;
            font-weight: 400;
            text-align: center;
            margin: 0 0 40px;
            padding-bottom: 20px;
            text-transform: uppercase;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .heading.heading-icon {
            display: block;
        }

        .padding-lg {
            display: block;
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .practice-area.padding-lg {
            padding-bottom: 55px;
            padding-top: 55px;
        }

        .practice-area .inner {
            border: 1px solid #999999;
            text-align: center;
            margin-bottom: 28px;
            padding: 40px 25px;
        }

        .our-webcoderskull .cnt-block:hover {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            border: 0;
        }

        .practice-area .inner h3 {
            color: #3c3c3c;
            font-size: 24px;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            padding: 10px 0;
        }

        .practice-area .inner p {
            font-size: 14px;
            line-height: 22px;
            font-weight: 400;
        }

        .practice-area .inner img {
            display: inline-block;
        }


        .our-webcoderskull {
            background: url("./img/team.jpg") no-repeat center top / cover;

        }

        .our-webcoderskull .cnt-block {
            float: left;
            width: 100%;
            background: #fff;
            padding: 30px 20px;
            text-align: center;
            border: 2px solid #d5d5d5;
            margin: 0 0 28px;
        }

        .our-webcoderskull .cnt-block figure {
            width: 148px;
            height: 148px;
            border-radius: 100%;
            display: inline-block;
            margin-bottom: 15px;
        }

        .our-webcoderskull .cnt-block img {
            width: 148px;
            height: 148px;
            border-radius: 100%;
        }

        .our-webcoderskull .cnt-block h3 {
            color: #2a2a2a;
            font-size: 20px;
            font-weight: 500;
            padding: 6px 0;
            text-transform: uppercase;
        }

        .our-webcoderskull .cnt-block h3 a {
            text-decoration: none;
            color: #2a2a2a;
        }

        .our-webcoderskull .cnt-block h3 a:hover {
            color: #337ab7;
        }

        .our-webcoderskull .cnt-block p {
            color: #2a2a2a;
            font-size: 13px;
            line-height: 20px;
            font-weight: 400;
        }

        .our-webcoderskull .cnt-block .follow-us {
            margin: 20px 0 0;
        }

        .our-webcoderskull .cnt-block .follow-us li {
            display: inline-block;
            width: auto;
            margin: 0 5px;
        }

        .our-webcoderskull .cnt-block .follow-us li .fa {
            font-size: 24px;
            color: #767676;
        }

        .our-webcoderskull .cnt-block .follow-us li .fa:hover {
            color: #025a8e;
        }

        .card-product .img-wrap {
            border-radius: 3px 3px 0 0;
            overflow: hidden;
            position: relative;
            height: 220px;
            text-align: center;
        }

        .card-product .img-wrap img {
            max-height: 100%;
            max-width: 100%;
            object-fit: cover;
        }

        .card-product .info-wrap {
            overflow: hidden;
            padding: 15px;
            border-top: 1px solid #eee;
        }

        .card-product .bottom-wrap {
            padding: 15px;
            border-top: 1px solid #eee;
        }

        .label-rating {
            margin-right: 10px;
            color: #333;
            display: inline-block;
            vertical-align: middle;
        }

        .card-product .price-old {
            color: #999;
        }

        .form-section {
            background-attachment: fixed;
            background-size: cover;
            background-position: 100% 100%;
            background-repeat: no-repeat;
            padding: px 0;
            position: relative;
            height: 100vh;
            padding-left: 0px;
        }

        .overlay {
            background: #00000026;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }

        .custom-button {
            width: 100%;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: 0.8s ease;
            background: #4DA0B0;
            background: -webkit-linear-gradient(to right, #D39D38, #4DA0B0);
            background: linear-gradient(to right, #FF5722, #3f51b5);
        }

        .custom-button:hover,
        .custom-button:focus {
            transition: 0.8s ease;
            letter-spacing: 3px;
            background: -webkit-linear-gradient(to right, #D39D38, #4DA0B0);
            background: linear-gradient(to right, #FF5722, #3f51b5);
        }

        .form-box-inner .form-control {
            background: #ffffff8a;
            border: 2px solid #000000;
            box-shadow: none;
        }

        .form-box-inner .form-control:focus {
            outline: none;
            box-shadow: none;
        }


        .heading-title {
            text-shadow: 2px 3px 0 #ffffff, 1px 4px 0 rgba(0, 0, 0, 0.15);
            text-align: center;
            margin: 0 auto;
            padding: 60px;
            font-size: 42px;
        }

        .contact {
            text-align: center;
        }

        .contact-box {
            background: #ffffff8a;
            height: 365px;
            padding: 15px;
        }

        .contact-box ul li {
            margin-bottom: 0px;
            padding: 8px;
        }

        .contact i {
            font-size: 25px;
            color: #000000;
        }

        .form-box-inner {
            background: #ffffff8a;
            padding: 15px;
        }
    </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

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
                    echo '<li><a href="#">Hi 👨'.$_SESSION["user"].'</a></li>';
                    echo '<li><a href="../login/logoutaction.php">Logout</a></li>';
                } else {
                    echo '<li><a href="../login">LOGIN</a></li>';
                }
                ?>


                <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
            </ul>
        </div>
    </div>
</nav>







<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="./img/carousel-1.jpeg" alt="New York" width="1200" height="700">
            <div class="carousel-caption">
                <h1>Fresh Vegetable</h1>

            </div>
        </div>

        <div class="item">
            <img src="./img/carousel-2.jpeg" alt="Chicago" width="1200" height="700">
            <div class="carousel-caption">
                <h1>Fresh fruits</h1>

            </div>
        </div>


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The STORE Section) -->
<div id="STORE">

    <div class="container">
        <center>
            <h1 style="color: green">Vegetable Stocks For Sale</h1>
        </center>
        <br>

        <table class="table table-hover" style="color: gray">
            <thead>
            <tr>
                <th>Vegetable Name</th>
                <th>Quentity</th>
                <th>Amount</th>
                <th>Contact</th>
                <th>Description</th>
            </tr>
            </thead>

            <tbody>

            <?php
            //                print_r($_SESSION);

            //                echo "<br>" . $uid. "</br>";
            $sql = "SELECT * FROM ads";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "    <tr> 
                                <td>".$row["vgname"]."</td>
                                <td>".$row["quentity"]."</td>
                                <td>".$row["amount"]."</td>
                                <td>".$row["contact"]."</td>
                                <td>".$row["description"]."</td>
                               
                             </tr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();



            ?>








            </tbody>
        </table>








    </div>
    <!--container.//-->


    <!-- Container (TEAM Section) -->
    <div id="TEAM" class="bg-1">

        <section class="our-webcoderskull padding-lg">
            <div class="container">
                <div class="row heading heading-icon">
                    <h2>Our Team</h2>
                </div>
                <ul class="row">
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="./img/yasiru.jpeg.jpg" class="img-responsive" alt=""></figure>
                            <h3><a href="http://www.webcoderskull.com/">Yasiru Bandara</a></h3>
                            <p>Freelance Web Developer</p>
                            <ul class="follow-us clearfix">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
                            <h3><a href="#">Kappua </a></h3>
                            <p>Freelance Web Developer</p>
                            <ul class="follow-us clearfix">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
                            <h3><a href="http://www.webcoderskull.com/">Manish </a></h3>
                            <p>Freelance Web Developer</p>
                            <ul class="follow-us clearfix">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
                            <h3><a href="http://www.webcoderskull.com/">Atul </a></h3>
                            <p>Freelance Web Developer</p>
                            <ul class="follow-us clearfix">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </section>




        <div id="CONTACT">
            <section class="form-section" style="background-image:url(./img/about_us.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="heading-title"> Get in touch with us</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-box">
                                <ul class="list-inline">
                                    <li>
                                        <div class="contact">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p> DieSachbearbeiter Choriner Straße 49 <br> 10435 Berlin </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p> Info@example.com <br> example@yourcompany.com </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact">
                                            <i class="fa fa-mobile" aria-hidden="true"></i> <br>
                                            <p> +91 9876543210 <br> +91 5689452158 </p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box-inner">
                                <form action="" method="">
                                    <div class="form-group">

                                        <button class="btn custom-button"><img src="./img/logo nsbm.png" alt=""></button>
                                </form>
                            </div>
                        </div>



                    </div>
                </div>
            </section>





            <script>
                $(document).ready(function () {
                    // Initialize Tooltip
                    $('[data-toggle="tooltip"]').tooltip();

                    // Add smooth scrolling to all links in navbar + footer link
                    $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

                        // Make sure this.hash has a value before overriding default behavior
                        if (this.hash !== "") {

                            // Prevent default anchor click behavior
                            event.preventDefault();

                            // Store hash
                            var hash = this.hash;

                            // Using jQuery's animate() method to add smooth page scroll
                            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                            $('html, body').animate({
                                scrollTop: $(hash).offset().top
                            }, 900, function () {

                                // Add hash (#) to URL when done scrolling (default click behavior)
                                window.location.hash = hash;
                            });
                        } // End if
                    });
                })
            </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>