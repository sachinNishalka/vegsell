<?php include '../include/sessionstart.php'; ?>
<?php include '../include/dbinit.php'; ?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../index/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />>

    <title>Govipola.store</title>
</head>
<body>
<?php
include '../include/finalmenu.php';
?>
<center>
    <h1 class="mt-5">Edit your adds</h1>
</center>

<?php
    if (isset($_GET["message"])){

        if ($_GET["message"]=='success'){
            echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Success!</strong> Ad was updated.
</div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Success!</strong> Error occured when updating the Ad.
</div>';
        }
    }

    if (isset($_GET["delete"])){
    if($_GET["delete"]=='success'){
            echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Success!</strong> Ad was deleted.
</div>';
        }elseif ($_GET["delete"]=='error'){
            echo
           '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Success!</strong> Error occured when deleting the Ad.
</div>';
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
            <th>Image</th>
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
                                <td><img class='rounded float-start' src='../uploads/".$row["img"]."' style='width:100px;height:100px'></td>


                                <td>
                                    <a href='update.php?post_id=$postid' class='btn btn-warning'>Update</a>
                                    
                                    
                                    
                                    
                                    <a href='delete.php?post_id=$postid' class='btn btn-danger' style='color: white'>Delete</a>
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>