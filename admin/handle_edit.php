<?php
 
session_start();

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// include database and object files
include_once '../api/config/database.php';
include_once '../api/objects/movies.php';
include "../BackEnd/db.php"; 

// get database connection
$database = new Database();
$db = $database->getConnection();
  
// prepare product object
$movie = new Movies($db); 

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
    
    move_uploaded_file($tempname , $folder);
     
    // set ID property of product to be edited
    $movie->id = $id;
    
    // set product property values
    $movie->name = $name;
    $movie->image = $filename;
    $movie->description = $description;
    $movie->length = $length;
    $movie->time = $time;
    $movie->date = $date;
    $movie->priceAdult = $adultTicket;
    $movie->priceKid = $kidTicket;
    $movie->location = $location;
    
    $sql = "SELECT * FROM movies WHERE id = '$movie->id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // update the product
    if($movie->update()){
        unlink("../image/".$row['image']);

        // set response code - 200 ok
        http_response_code(200);

        // tell the user
        echo json_encode(array("message" => "Movie was updated."));
        
        header("Location: ../admin/index.php");
        exit();
    }

    // if unable to update the product, tell the user
    else{

        // set response code - 503 service unavailable
        http_response_code(503);

        // tell the user
        echo json_encode(array("message" => "Unable to update movie."));
    }
}   

