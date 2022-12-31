<?php include '../include/sessionstart.php'; ?>
<?php include '../include/dbinit.php';?>
<?php

//    print_r($_POST);
    if (isset($_POST['save'])){
//        print_r($_SESSION);
        $vgname = $_POST["vgname"];
        $quentity = $_POST["quentity"];
        $expected_amount = $_POST["expected_amount"];
        $contact = $_POST["contact"];
        $description = $_POST["description"];
        $userid = $_SESSION["userid"];
        $sql = "INSERT INTO ads(vgname,quentity,amount,contact,description,userid)VALUES('".$vgname."','".$quentity."','".$expected_amount."','".$contact."','".$description."','".$userid."')";



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
        <h1>Create an add</h1>


    </center>

    <?php
        if (isset($_POST['save'])){
            if(mysqli_query($conn, $sql)){
                echo
                "<div class='alert alert-success alert-dismissible' role='alert'>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
<strong>Congratulations!</strong> You successfully created your add!
  </div>";



            }else{
                echo
                "<div class='alert alert-danger alert-dismissible' role='alert'>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
<strong>Sorry!</strong> You cound`t create the add!
  </div>";
            }
        }
    ?>

    <div class="container">
        <form class="form-horizontal" role="form" method="POST" action="create.php">
            <div class="form-group">
                <label class="col-sm-2 control-label">Vegetable Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="vgname" placeholder="Vegetable Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Quentity in kg.</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="quentity" placeholder="Quentity">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Expected Amount in Rs.</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="expected_amount" placeholder="Rs.">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Contact Number</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="contact" placeholder="Constact Number +94">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label" >Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success" name="save">Save</button>
                </div>
            </div>
        </form>

    </div>



<script src="../js/jquery.min.js" ></script>
<script src="../js/bootstrap.min.js" ></script>
</body>
</html>