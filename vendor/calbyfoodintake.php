<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require '../classes/Database.php';
require '../classes/JwtHandler.php';
function msg($success,$status,$message,$extra = []){
    return array_merge([
        'success' => $success,
        'status' => $status,
        'message' => $message
    ],$extra);
}
$db_connection = new Database();
$conn = $db_connection->dbConnection();

$data = json_decode(file_get_contents("php://input"));
$returnData = [];
$foodintake_id=trim($data->foodintake_id);
if($_SERVER["REQUEST_METHOD"] != "POST"):
   $returnData = msg(0,404,'Page Not Found!');   
else:
    try{
    $fetch_foodcalories = "SELECT * FROM `caloriesmaster` where `foodintake_id`=:foodintake_id";
    $query_stmt = $conn->prepare($fetch_foodcalories);
    $query_stmt->bindValue(':foodintake_id', $foodintake_id,PDO::PARAM_STR);   
    $query_stmt->execute();
    $row = $query_stmt->fetchAll(PDO::FETCH_ASSOC);
  // $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
    $returnData = [
        'success' => 1,
        'message' => 'success',
       'foodintake'=>$row,
    ];
}
catch(PDOException $e){
    $returnData = msg(0,500,$e->getMessage());
}
endif;
    echo json_encode($returnData);
