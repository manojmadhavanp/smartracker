<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);
if($_SERVER['HTTP_HOST'] == "localhost"){
    array_shift($uri);
    array_shift($uri);
    array_shift($uri);  
}
$requestMethod = $_SERVER["REQUEST_METHOD"];

echo json_encode($uri);
?>