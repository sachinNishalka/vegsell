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
        $uid = $_SESSION["userid"];
        //                echo "<br>" . $uid. "</br>";
        $sql = "SELECT * FROM ads WHERE userid='".$uid."'";
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



<script src="../js/jquery.min.js" ></script>
<script src="../js/bootstrap.min.js" ></script>
</body>
</html>