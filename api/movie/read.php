<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// include database and object files
include_once '../config/database.php';
include_once '../objects/movies.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$movie = new Movies($db);
  
// query products
$stmt = $movie->read();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // products array
    $movies_arr=array();
    $movies_arr["records"]=array();
  
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
        
        $movies_item=array(
            "id" => $id,
            "name" => $name,
            "image" => $image,
            "description" => html_entity_decode($description),
            "length" => $length,
            "time" => $time,
            "date" => $date,
            "priceAdult" => $priceAdult,
            "priceKid" => $priceKid,
            "location" => $location
        );
  
        array_push($movies_arr["records"], $movies_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // show products data in json format
    echo json_encode($movies_arr);
}
  
else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no products found
    echo json_encode(
        array("message" => "No movies found.")
    );
}