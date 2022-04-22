<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require '../classes/Database.php';


function msg($success,$status,$message,$extra = []){
    return array_merge([
        'success' => $success,
        'status' => $status,
        'message' => $message
    ],$extra);
}

$db_connection = new Database();
$conn = $db_connection->dbConnection();

if($_SERVER["REQUEST_METHOD"] != "GET"):
    $returnData = msg(0,404,'Page Not Found!');
else:
    $fetch_foodintake = "SELECT * FROM `foodintake`";
    $query_stmt = $conn->prepare($fetch_foodintake);
    $query_stmt->execute();
    $row = $query_stmt->fetchAll(PDO::FETCH_ASSOC);
   // $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
    $returnData = [
        'success' => 1,
        'message' => 'You have successfully logged in.',
        'foodintake'=>$row,
    ];
endif;
    echo json_encode($returnData);