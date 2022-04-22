<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require '../classes/Database.php';
$db_connection = new Database();
$conn = $db_connection->dbConnection();
function msg($success, $status, $message, $extra = [])
{
    return array_merge([
        'success' => $success,
        'status' => $status,
        'message' => $message
    ], $extra);
}
$data = json_decode(file_get_contents("php://input"));
$returnData = [];

if ($_SERVER["REQUEST_METHOD"] != "POST") :
    $returnData = msg(0, 404, 'Page Not Found!');

    else :
        try {
                // DATA BINDING
                $id = trim($data->id);
                $StepGoal = trim($data->StepGoal);
             $update_weight_stmt= $conn->prepare("UPDATE `users` SET `GoalStep`=:StepGoal  WHERE `id`=:id");
             $update_weight_stmt->bindValue(":id", $id, PDO::PARAM_INT);
             $update_weight_stmt->bindValue(":StepGoal", htmlspecialchars(strip_tags($StepGoal)), PDO::PARAM_STR);
      
             $update_weight_stmt->execute();
             $returnData = msg(1, 200, 'Your Step Goal Updated.');         
        } catch (PDOException $e) {
            $returnData = msg(0, 500, $e->getMessage());
        }
endif;

echo json_encode($returnData);


