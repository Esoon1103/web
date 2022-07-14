<?php
 
session_start();
 
include "../BackEnd/db.php";
 
if(isset($_POST['submit'])){
    $id = $_SESSION['curEditID'];
    $img = $_POST['img'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $length = $_POST['length'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $adultTicket = $_POST['adultTicket'];
    $kidTicket = $_POST['kidTicket'];
    
    $filename = $_FILES['img']['name'];
    $tempname = $_FILES['img']['tmp_name'];
    $folder = "../image/".$filename;
    
    //Select from movies to get the data so they can compare the value
    $query = "SELECT * FROM movies WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result) > 0){
        
        move_uploaded_file($tempname , $folder);
        
        $sql = "UPDATE movies SET 
         `name` = '$name', 
         `image` = '$filename', 
         `description` = '$description', 
         `length` = '$length', 
         `time` = '$time',
         `date` = '$date', 
         `location` = '$location', 
         `priceAdult` = '$adultTicket',
         `priceKid` = '$kidTicket'
         WHERE id = $id";

        mysqli_query($conn, $sql);

        

        header("Location: ../admin/index.php");
        exit();
    }
}    

