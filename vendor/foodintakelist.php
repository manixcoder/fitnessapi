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

$returnData = [];

// IF REQUEST METHOD IS NOT EQUAL TO POST
if($_SERVER["REQUEST_METHOD"] != "GET"):
    $returnData = msg(0,404,'Page Not Found!');

else:
        try{
            
            $list_of_foodintake = "SELECT * FROM `foodintake`";
            $query_stmt = $conn->prepare($list_of_foodintake);
            $query_stmt->execute();

                $row = $query_stmt->fetchAll(PDO::FETCH_ASSOC);
     
                    
                    $returnData = [
                        'success' => 1,
                        'message' => 'foodintake list',
                        'foodintake'=>$row,
                    ];
        }
        catch(PDOException $e){
            $returnData = msg(0,500,$e->getMessage());
        }

endif;

echo json_encode($returnData);