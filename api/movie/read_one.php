<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
  
// include database and object files
include_once '../config/database.php';
include_once '../objects/movies.php';
  
// get database connection
$database = new Database();
$db = $database->getConnection();
  
// prepare product object
$movie = new Movies($db);
  
// set ID property of record to read
$movie->id = isset($_GET['id']) ? $_GET['id'] : die();

// read the details of product to be edited
$movie->readOne();
  
if($movie->name!=null){
    // create array
    $movie_arr = array(
        "id" =>  $movie->id,
        "name" => $movie->name,
        "image" => $movie->image,
        "description" => $movie->description,
        "length" => $movie->length,
        "time" => $movie->time,
        "date" => $movie->date,
        "priceAdult" => $movie->priceAdult,
        "priceKid" => $movie->priceKid,
        "location" => $movie->location
  
    );
  
    // set response code - 200 OK
    http_response_code(200);
  
    // make it json format
    echo json_encode($movie_arr);
}
  
else{
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user product does not exist
    echo json_encode(array("message" => "Movie does not exist."));
}
?>