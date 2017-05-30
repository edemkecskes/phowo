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
    
    function readOne(){ 
        // query to read single record
        $query = "SELECT
                    c.name as category_name, p.id, p.name, p.description, p.price, p.category_id, p.created
                FROM
                    " . $this->table_name . " p
                    LEFT JOIN
                        categories c
                            ON p.category_id = c.id
                WHERE
                    p.id = ?
                LIMIT
                    0,1";
        $query = "SELECT pictures.id, pictures.title, categories.name, authors.name AS authorname, authors.webpage AS webpage FROM
        " . $this->table_name . "
        INNER JOIN categories ON pictures.catid = categories.id
        INNER JOIN authors ON pictures.authid = authors.id
        WHERE
                pictures.id = ?
        LIMIT 0,1";

        // prepare query statement
        $stmt = $this->conn->prepare( $query );

        // bind id of product to be updated
        $stmt->bindParam(1, $this->id);

        // execute query
        $stmt->execute();

        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values to object properties
        $this->id = $row['id'];
        $this->title = $row['title'];
        $this->name = $row['name'];
        $this->authorname = $row['authorname'];
        $this->webpage = $row['webpage'];
    }
}