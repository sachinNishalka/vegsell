<?php include '../include/sessionstart.php'; ?>
<?php include '../include/dbinit.php'; ?>

<?php
    if(isset($_GET["post_id"])){
      $post_id = $_GET["post_id"];
      $sql = "DELETE FROM ads WHERE id='".$post_id."'";

        if(mysqli_query($conn, $sql)){
            header("Location: ./edit.php?delete=success");
        }else{
            header("Location: ./edit.php?delete=error");
        }



    }

?>