<?php include '../include/sessionstart.php'; ?>
<?php include '../include/dbinit.php'; ?>



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
    <h1>Edit your adds</h1>
</center>

<?php
    if (isset($_GET["message"])){
//        print_r($_GET);
        if ($_GET["message"]=='success'){
            echo
            "<div class='alert alert-warning alert-dismissible' role='alert'>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
<strong>Congratulations!</strong> You successfully updated your ad!
  </div>";
        }else{
            echo
            "<div class='alert alert-danger alert-dismissible' role='alert'>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
<strong>Sorry!</strong> You cound`t update the ad!
  </div>";
        }
    }
?>






<div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Vegetable Name</th>
            <th>Quentity</th>
            <th>Amount</th>
            <th>Contact</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>

        <?php
        //                print_r($_SESSION);
        $uid = $_SESSION["userid"];
        //                echo "<br>" . $uid. "</br>";
        $sql = "SELECT * FROM ads WHERE userid='".$uid."'";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $postid = $row["id"];
                echo "    <tr> 
                                <td>".$row["vgname"]."</td>
                                <td>".$row["quentity"]."</td>
                                <td>".$row["amount"]."</td>
                                <td>".$row["contact"]."</td>
                                <td>".$row["description"]."</td>
                               


                                <td>
                                    <a href='update.php?post_id=$postid' class='btn btn-warning'>Update</a>
                                    
                                    
                                    
                                    
                                    <a href='' class='btn btn-danger' style='color: white'>Delete</a>
                                </td>
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



<script src="../js/jquery.min.js" ></script>
<script src="../js/bootstrap.min.js" ></script>
</body>
</html>