<?php
 
session_start();
 
include "../BackEnd/db.php";
 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $img = $_POST['img'];
    $description = $_POST['description'];
    $length = $_POST['length'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $adultTicket = $_POST['adultTicket'];
    $kidTicket = $_POST['kidTicket'];

    

    $checkDuplicate = "SELECT * FROM movies WHERE name = '$name'";

    $result = mysqli_query($conn, $checkDuplicate);
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['duplicateMovie'] = "Movie Duplicated";
    }else{
        $filename = $_FILES["img"]["name"];
        $tempname = $_FILES["img"]["tmp_img"];
        $folder = "../image/" . $filename;

        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>  Image uploaded successfully!</h3>";
        } else {
            echo "<h3>  Failed to upload image!</h3>";
        }
        
        
        $sql = "INSERT INTO `movies` (`name`, `image`, `description`, `length`, `time`, `date`, `location`, `priceAdult`, `priceKid`"
            . ") VALUES ('$name', '$filename', '$description', '$length', '$time', '$date', '$location', '$adultTicket', '$kidTicket')";
        
        $run = mysqli_query($conn, $sql) or die(mysqli_error());
        
        
        
        header("Location: ../admin/admin_create.php");
        exit();
    }
    
    

}
