<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
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

$id=$_POST['id'];
// IF REQUEST METHOD IS NOT EQUAL TO POST
if($_SERVER["REQUEST_METHOD"] != "POST"):
    $returnData = msg(0,404,'Page Not Found!');

else:
        try{

            $data_userid = $conn->prepare("SELECT * FROM `users` WHERE `id`=:id");
             $data_userid->bindValue(":id", $id, PDO::PARAM_INT);
             $data_userid->execute();
             $row = $data_userid->fetch(PDO::FETCH_ASSOC);
             $levelId=$row['Level'];
             $UpdatelevelId=$levelId+1;
             $update_stmt = $conn->prepare("UPDATE `users` SET `Level`=:UpdatelevelId WHERE id=:id");
             $update_stmt->bindValue(":UpdatelevelId", $UpdatelevelId, PDO::PARAM_INT);
             $update_stmt->bindValue(":id", $id, PDO::PARAM_INT);
             $update_stmt->execute();
     
                    $returnData = [
                        'success' => 1,
                        'message' => 'Challenges Updated',
                        'LevelId'=>$UpdatelevelId,
                    ];
        }
        catch(PDOException $e){
            echo "errer".$e->getMessage();
            $returnData = msg(0,500,$e->getMessage());
        }

endif;

echo json_encode($returnData);