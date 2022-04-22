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
    $user_id = trim($data->user_id);
    $date = trim($data->date);
    $time = trim($data->time);
    $calburn=trim($data->calburn);
    $caltaken=trim($data->caltaken);
    $product=trim($data->product);
    $energy=trim($data->energy);
    $currentbmi=trim($data->currentbmi);
     $step=trim($data->stepCount);
    


        try {

                $insert_query = "INSERT INTO `user_calories`(`user_id`,`date`,`time`,`calburn`,`caltaken`,`product`,`energy`,`currentbmi`,`step`) VALUES (:user_id,:date,:time,:calburn,:caltaken,:product,:energy,:currentbmi,:step)";

                $insert_stmt = $conn->prepare($insert_query);

                // DATA BINDING
                $insert_stmt->bindValue(':user_id', htmlspecialchars(strip_tags($user_id)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':date', htmlspecialchars(strip_tags($date)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':time',htmlspecialchars(strip_tags($time)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':calburn', htmlspecialchars(strip_tags($calburn)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':caltaken', htmlspecialchars(strip_tags($caltaken)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':product', htmlspecialchars(strip_tags($product)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':energy', htmlspecialchars(strip_tags($energy)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':currentbmi', htmlspecialchars(strip_tags($currentbmi)), PDO::PARAM_STR); 
                 $insert_stmt->bindValue(':step', htmlspecialchars(strip_tags($step)), PDO::PARAM_STR);               
                $insert_stmt->execute();

                  $check_Bmi_stmt = $conn->prepare("UPDATE users SET bmi=:bmi WHERE id=:id");
             $check_Bmi_stmt->bindValue(":bmi", htmlspecialchars(strip_tags($currentbmi)), PDO::PARAM_STR);
             $check_Bmi_stmt->bindValue(":id", htmlspecialchars(strip_tags($user_id)), PDO::PARAM_STR);
             $check_Bmi_stmt->execute();

                $returnData = msg(1, 201, 'You have successfully.');

        } catch (PDOException $e) {
            $returnData = msg(0, 500, $e->getMessage());
        }
    endif;

echo json_encode($returnData);
