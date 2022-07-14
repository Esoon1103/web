<?php
session_start();
include "../BackEnd/db.php";

$id = "";
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $_SESSION['curMovieID'] = $id;
}

$sql = "SELECT * FROM movies WHERE id = '$id'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

 if(mysqli_num_rows($result) > 0){
    $deleteID = $_SESSION['curMovieID'];
    $delete = "DELETE FROM movies WHERE id = '$deleteID'";
    
    $run = mysqli_query($conn, $delete);
    
    if($run){
        unlink("../image/$row[image]");
    }
    
    $_SESSION['deleteSuccess'] = "true";
    header("Location: ../admin/index.php");
    exit();
 }