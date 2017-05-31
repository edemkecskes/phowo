<?php
class Picture {
 
    // database connection and table name
    private $conn;
    private $table_name = "pictures";
 
    // object properties
    public $id;
    public $title;
    public $catid;
    public $authid;
    public $authorname;
    public $webpage;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    
    // read products
    function read(){

        // select all query
        $query = "SELECT pictures.id, pictures.title, categories.name, authors.name AS authorname, authors.webpage AS webpage FROM
        " . $this->table_name . "
        INNER JOIN categories ON pictures.catid = categories.id
        INNER JOIN authors ON pictures.authid = authors.id ORDER BY pictures.id ASC";
  
        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
    
    function readOne(){ 
        // query to read single record
        $query = "SELECT pictures.id, pictures.title, categories.name, authors.name AS authorname, authors.webpage AS webpage FROM
        " . $this->table_name . "
        INNER JOIN categories ON pictures.catid = categories.id
        INNER JOIN authors ON pictures.authid = authors.id
        WHERE
                pictures.id = ?
        LIMIT 0,1";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // bind id of product to be updated
        $stmt->bindParam(1, $this->id);

        // execute query
        $stmt->execute();

        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values to object properties
        $this->title = $row['title'];
        $this->name = $row['name'];
        $this->authorname = $row['authorname'];
        $this->webpage = $row['webpage'];
    }
}