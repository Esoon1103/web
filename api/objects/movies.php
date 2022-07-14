<?php
class Movies{
  
    // database connection
    private $conn;
  
    // object properties
    public $id;
    public $name;
    public $image;
    public $description;
    public $length;
    public $time;
    public $date;
    public $priceAdult;
    public $priceKid;
    public $location;
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    
    // read products
    function read(){
  
        // select all query
        $query = "SELECT * FROM movies";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
    
    // create product
    function create(){
        
                    
        // query to insert record
        $query = "INSERT INTO movies SET name=:name, image=:image, description=:description, length=:length, time=:time, date=:date, priceAdult=:priceAdult, priceKid=:priceKid, location=:location";
                

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->image=htmlspecialchars(strip_tags($this->image));
        $this->description=htmlspecialchars(strip_tags($this->description));
        $this->length=htmlspecialchars(strip_tags($this->length));
        $this->time=htmlspecialchars(strip_tags($this->time));
        $this->date=htmlspecialchars(strip_tags($this->date));
        $this->priceAdult=htmlspecialchars(strip_tags($this->priceAdult));
        $this->priceKid=htmlspecialchars(strip_tags($this->priceKid));
        $this->location=htmlspecialchars(strip_tags($this->location));
        

        // bind values
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":image", $this->image);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":length", $this->length);
        $stmt->bindParam(":time", $this->time);
        $stmt->bindParam(":date", $this->date);
        $stmt->bindParam(":priceAdult", $this->priceAdult);
        $stmt->bindParam(":priceKid", $this->priceKid);
        $stmt->bindParam(":location", $this->location);

        // execute query
        if($stmt->execute()){
            return true;
        }

        return false;

    }
    // used when filling up the update product form
    function readOne(){

        // query to read single record
        $query = "SELECT * FROM movies WHERE id = ?";

        // prepare query statement
        $stmt = $this->conn->prepare( $query );

        // bind id of movie to be updated
        $stmt->bindParam(1, $this->id);

        // execute query
        $stmt->execute();

        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values to object properties
        $this->name = $row['name'];
        $this->image = $row['image'];
        $this->description = $row['description'];
        $this->length = $row['length'];
        $this->time = $row['time'];
        $this->date = $row['date'];
        $this->priceAdult = $row['priceAdult'];
        $this->priceKid = $row['priceKid'];
        $this->location = $row['location'];
    }
    
    // update the product
    function update(){

        // update query
        $query = "UPDATE movies 
                SET
                    name = :name,
                    image = :image,
                    description = :description,
                    length = :length,
                    time = :time,
                    date = :date,
                    priceAdult = :priceAdult,
                    priceKid = :priceKid,
                    location = :location
                WHERE
                    id = :id";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->image=htmlspecialchars(strip_tags($this->image));
        $this->description=htmlspecialchars(strip_tags($this->description));
        $this->length=htmlspecialchars(strip_tags($this->length));
        $this->time=htmlspecialchars(strip_tags($this->time));
        $this->date=htmlspecialchars(strip_tags($this->date));
        $this->priceAdult=htmlspecialchars(strip_tags($this->priceAdult));
        $this->priceKid=htmlspecialchars(strip_tags($this->priceKid));
        $this->location=htmlspecialchars(strip_tags($this->location));
        $this->id=htmlspecialchars(strip_tags($this->id));

        // bind new values
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':image', $this->image);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':length', $this->length);
        $stmt->bindParam(':time', $this->time);
        $stmt->bindParam(':date', $this->date);
        $stmt->bindParam(':priceAdult', $this->priceAdult);
        $stmt->bindParam(':priceKid', $this->priceKid);
        $stmt->bindParam(':location', $this->location);
        $stmt->bindParam(':id', $this->id);

        // execute the query
        if($stmt->execute()){
            return true;
        }

        return false;
    }
    
    // delete the product
    function delete(){

        // delete query
        $query = "DELETE FROM movies WHERE id = ?";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->id=htmlspecialchars(strip_tags($this->id));

        // bind id of record to delete
        $stmt->bindParam(1, $this->id);

        // execute query
        if($stmt->execute()){
            return true;
        }

        return false;
    }
}
?>