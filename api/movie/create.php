<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
include_once '../config/database.php';
  
// instantiate product object
include_once '../objects/movies.php';
  
$database = new Database();
$db = $database->getConnection();
  
$movie = new Movies($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));

// make sure data is not empty
if(
    !empty($data->name) &&
    !empty($data->image) &&
    !empty($data->description) &&
    !empty($data->length) &&
    !empty($data->time) &&
    !empty($data->date) &&
    !empty($data->priceAdult) &&
    !empty($data->priceKid) &&
    !empty($data->location)
){
  
    // set product property values
    $movie->name = $data->name;
    $movie->image = $data->image;
    $movie->description = $data->description;
    $movie->length = $data->length;
    $movie->time = $data->time;
    $movie->date = $data->date;
    $movie->priceAdult = $data->priceAdult;
    $movie->priceKid = $data->priceKid;
    $movie->location = $data->location;
  
    // create the product
    if($movie->create()){
        
       
        
        
        // set response code - 201 created
        http_response_code(201);
  
        // tell the user
        echo json_encode(array("message" => "Movies was created."));
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
?>