<?php
include_once '../vendor/autoload.php';

use \Firebase\JWT\JWT;

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// include database and object files
include_once '../config/database.php';
include_once '../objects/class.php';
$database = new Database();
$db = $database ->getConnection();
$class = new Class_($db);
$key = '__test_secret__';
$jwt = $_GET['jwt'];

// get_userID

$decoded = JWT::decode($jwt, base64_decode(strtr($key, '-_', '+/')), ['HS256']);

$user_id = $decoded->id;


$stmt = $class->getClassByUser($user_id);
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // products array
    $class_arr=array();
    $class_arr["data"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
 while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $class_item=array(
            "id" => $id,
            "name" => $name,
            "description" => html_entity_decode($decription),
            "create_by" => $create_by,
            "date_create" => $date_create,
        );
 
        array_push($class_arr["data"], $class_item);
    }
    // set response code - 200 OK
    http_response_code(200);
 
    // show products data in json format
    echo json_encode($class_arr);

}

else{
 
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user no products found
    echo json_encode(
        array("message" => $user_id)
    );
}