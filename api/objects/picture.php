<?php
class Picture {
 
    // database connection and table name
    private $conn;
    private $table_name = "pictures";
 
    // object properties
    public $id;
    public $pic_url;
    public $thumb_url;
    public $title;
    public $catid;
    public $authid;
 
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
}