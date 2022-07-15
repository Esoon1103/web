<?php
 
session_start();

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
include_once '../api/config/database.php';
  
// instantiate product object
include_once '../api/objects/movies.php';
  
$database = new Database();
$db = $database->getConnection();
  
$movie = new Movies($db);
 
include "../BackEnd/db.php";
// make sure data is not empty
if(isset($_POST['submit'])){
    
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
    
    if(
    !empty($filename) &&
    !empty($name) &&
    !empty($description) &&
    !empty($length) &&
    !empty($time) &&
    !empty($date) &&
    !empty($location) &&
    !empty($adultTicket) &&
    !empty($kidTicket)
){
    move_uploaded_file($tempname , $folder);
  
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
    
    
  
    // create the product
    if($movie->create()){
        
        
        // set response code - 201 created
        http_response_code(201);
  
        // tell the user
        echo json_encode(array("message" => "Movies was created."));
        
        header("Location: index.php", TRUE, 301);
        exit();
    }
  
    // if unable to create the product, tell the user
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to create movie."));
    }

}
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to create movie. Data is incomplete."));
}
}