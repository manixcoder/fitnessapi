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

// DATA FORM REQUEST
$data = json_decode(file_get_contents("php://input"));
$returnData = [];

if ($_SERVER["REQUEST_METHOD"] != "POST") :

    $returnData = msg(0, 404, 'Page Not Found!');

else :
    $userid = trim($data->userid);
    $watercount = trim($data->watercount);
    


        try {

                $insert_query = "INSERT INTO `watertracker`(`watercount`,`userid`) VALUES (:watercount,:user_id)";

                $insert_stmt = $conn->prepare($insert_query);

                // DATA BINDING
                $insert_stmt->bindValue(':user_id', htmlspecialchars(strip_tags($userid)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':watercount', htmlspecialchars(strip_tags($watercount)), PDO::PARAM_STR);
                       
                $insert_stmt->execute();

                $returnData = msg(1, 201, 'You have successfully.');

        } catch (PDOException $e) {
            $returnData = msg(0, 500, $e->getMessage());
        }
    endif;

echo json_encode($returnData);
