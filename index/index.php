<?php include '../include/sessionstart.php'; ?>
<?php include '../include/dbinit.php'; ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../index/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Vegitable Shop</title>
</head>
<body>
<?php
include '../include/finalmenu.php';
?>
<center>
    <h1>Welcome</h1>
</center>

<div class="container">
    <table class="table table-hover">
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>