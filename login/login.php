<?php
include_once '../vendor/autoload.php';

use \Firebase\JWT\JWT;

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// include database and obj
include_once '../config/database.php';
include_once '../objects/user.php';
  
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$user = new User($db);

$email = $_GET['email'];
$password = $_GET['password'];

// query products
$stmt = $user->getUser($email,$password);
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // products array
    $products_arr=array();
    $products_arr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
 while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $token_payload =[
            "id" => $id,
            "name" => $name,
        ];
        $key = '__test_secret__';

        // This is your id token
        $jwt = JWT::encode($token_payload, base64_decode(strtr($key, '-_', '+/')), 'HS256');
    }
    // set response code - 200 OK
    http_response_code(200);
 
    // show products data in json format
    echo json_encode($jwt);

}

else{
 
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user no products found
    echo json_encode(
        array("message" => "LoginFail")
    );
}