<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/picture.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare product object
$picture = new Picture($db);
 
// set ID property of product to be edited
$picture->id = isset($_GET['id']) ? $_GET['id'] : die();
 
// read the details of product to be edited
$picture->readOne();
 
// create array
$picture_arr = array(
    "id" => $picture->id,
    "title" => $picture->title,
    "name" => $picture->name,
    "authorname" => $picture->authorname,
    "webpage" => $picture->webpage
);

// make it json format
print_r(json_encode($picture_arr));
?>