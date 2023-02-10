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
            $img_name=$row["img"];
        }
    }

}

?>
<?php

if (isset($_POST['update'])){

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));                                     

        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        }

        if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }

        if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
            }















//        print_r($_SESSION);
    $pid = $_POST['postedid'];
    $vgname = $_POST["vgname"];
    $quentity = $_POST["quentity"];
    $expected_amount = $_POST["expected_amount"];
    $contact = $_POST["contact"];
    $description = $_POST["description"];
    
//    $userid = $_SESSION["userid"];
    $sql_update= "UPDATE ads SET vgname='".$vgname."', quentity='".$quentity."', amount='".$expected_amount."', contact='".$contact."', description='".$description."', img='".$_FILES["fileToUpload"]["name"]."' WHERE id ='".$pid."'  ";
//    $sql = "INSERT INTO ads(vgname,quentity,amount,contact,description,userid)VALUES('".$vgname."','".$quentity."','".$expected_amount."','".$contact."','".$description."','".$userid."')";




}


?>


<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../index/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Govipola.store</title>
</head>
<body>
<?php
include '../include/finalmenu.php';
?>

<center>
    <h1 class="mt-5">Update your Advertisement Here</h1>


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
            <label for="">Image</label>
            <img src="../uploads/<?php echo $img_name?> " class="img-thumbnail mt-3" alt="..." style="width:200px">
        </div>

        <div class="form-group mt-2">
            <label for="">New Image</label>
            <input type="file" name="fileToUpload" id="fileToUpload">
        </div>

        

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-warning mt-3" name="update">Update</button>
            </div>
        </div>
    </form>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>