<?php
class User{
  
    // database connection
    private $conn;
  
    // object properties
    public $id;
    public $username;
    public $email;
    public $password;
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    
    // read products
    function read(){
  
        // select all query
        $query = "SELECT * FROM user";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}
?>