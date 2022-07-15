<?php
session_start();
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// include database and object file
include_once '../api/config/database.php';
include_once '../api/objects/movies.php';
include "../BackEnd/db.php";
  
// get database connection
$database = new Database();
$db = $database->getConnection();
  
// prepare product object
$movie = new Movies($db);


$id = "";
if(isset($_GET["id"])){
    // set movie id to be deleted
    $movie->id = $_GET["id"];
    $sql = "SELECT * FROM movies WHERE id = '$movie->id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

// delete the product
if($movie->delete()){
    $_SESSION['deleteSuccess'] = "true";
    
    
    unlink("../image/".$row['image']);
    
    header("Location: ../admin/index.php");
    exit();
  
    // set response code - 200 ok
    http_response_code(200);
  
    // tell the user
    echo json_encode(array("message" => "Movie was deleted."));
}
  
// if unable to delete the product
else{
  
    // set response code - 503 service unavailable
    http_response_code(503);
  
    // tell the user
    echo json_encode(array("message" => "Unable to delete movie."));
}