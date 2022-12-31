<?php include '../include/sessionstart.php'; ?>
<?php include '../include/dbinit.php'; ?>
<?php
if(isset($_GET["post_id"])) {
    $postid = $_GET["post_id"];

    $sql = "SELECT * FROM ads WHERE id ='" . $postid . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
//            print_r($row);
            $vgname = $row["vgname"];
            $quentity=$row["quentity"];
            $amount = $row["amount"];
            $contact = $row["contact"];
            $description = $row["description"];
        }
    }

}

?>
<?php

if (isset($_POST['update'])){
//        print_r($_SESSION);
    $pid = $_POST['postedid'];
    $vgname = $_POST["vgname"];
    $quentity = $_POST["quentity"];
    $expected_amount = $_POST["expected_amount"];
    $contact = $_POST["contact"];
    $description = $_POST["description"];
//    $userid = $_SESSION["userid"];
    $sql_update= "UPDATE ads SET vgname='".$vgname."', quentity='".$quentity."', amount='".$expected_amount."', contact='".$contact."', description='".$description."' WHERE id ='".$pid."'  ";
//    $sql = "INSERT INTO ads(vgname,quentity,amount,contact,description,userid)VALUES('".$vgname."','".$quentity."','".$expected_amount."','".$contact."','".$description."','".$userid."')";




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
    <h1>Update your Advertisement Here</h1>


</center>

<?php
if (isset($_POST['update'])){
    if(mysqli_query($conn, $sql_update)){
        header("Location: ./edit.php?message=success");
    }else{
        header("Location: ./edit.php?message=error");
    }
}
?>

<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="update.php">
        <div class="form-group">
            <label class="col-sm-2 control-label">Post ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="postedid" placeholder="Post ID" value="<?php echo $postid?>">
            </div>
        </div><div class="form-group">
            <label class="col-sm-2 control-label">Vegetable Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="vgname" placeholder="Vegetable Name" value="<?php echo $vgname?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Quentity in kg.</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="quentity" placeholder="Quentity" value="<?php echo $quentity?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label">Expected Amount in Rs.</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="expected_amount" placeholder="Rs." value="<?php echo $amount?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label">Contact Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="contact" placeholder="Constact Number +94" value="<?php echo $contact?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label" >Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" rows="3" value=""><?php echo $description?></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-warning" name="update">Update</button>
            </div>
        </div>
    </form>

</div>



<script src="../js/jquery.min.js" ></script>
<script src="../js/bootstrap.min.js" ></script>
</body>
</html>