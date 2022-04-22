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

elseif (
    !isset($data->name)
    || !isset($data->email)
    || empty(trim($data->name))
    || empty(trim($data->email))
) :

    $fields = ['fields' => ['name', 'email']];
    $returnData = msg(0, 422, 'Please Fill in all Required Fields!', $fields);

// IF THERE ARE NO EMPTY FIELDS THEN-
else :
    $name = trim($data->name);
    $email = trim($data->email);
    $firstname=trim($data->firstname);
    $lastname=trim($data->lastname);
    $mobile=trim($data->mobile);
    $gender=trim($data->gender);
    $weight=trim($data->weight);
    $height=trim($data->height);
    $medicalcondition=trim($data->medicalcondition);
    $age=trim($data->age);
    $healthOption=trim($data->healthOption);
    $id=$data->id;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
        $returnData = msg(0, 422, 'Invalid Email Address!');

    elseif (strlen($mobile) < 8) :
        $returnData = msg(0, 422, 'Your mobile number must be at least 8 characters long!');

    elseif (strlen($name) < 3) :
        $returnData = msg(0, 422, 'Your name must be at least 3 characters long!');

    else :
        try {

                $check_email_stmt = $conn->prepare("SELECT `email` FROM `users` WHERE `email`=:email and `id`!=:id");
                $check_email_stmt->bindValue(':email', $email, PDO::PARAM_STR);
                $check_email_stmt->bindValue(":id", $id, PDO::PARAM_INT);
                $check_email_stmt->execute();
                $no=$check_email_stmt->rowCount();

            if ($no>=1) :
                $returnData = msg(0, 422, 'This E-mail already in use!');

            else :
                    
                   $insert_query = "UPDATE `users` SET `name`=:name,`email`=:email,`firstname`=:firstname,`lastname`=:lastname,`mobile`=:mobile,`gender`=:gender,`weight`=:weight,`height`=:height,`medicalcondition`=:medicalcondition,`Age`=:age,`healthOption`=:healthOption WHERE `id`=:id";


                $insert_stmt = $conn->prepare($insert_query);

                // DATA BINDING
                $insert_stmt->bindValue(":id", $id, PDO::PARAM_INT);
                $insert_stmt->bindValue(':name', htmlspecialchars(strip_tags($name)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':email', $email, PDO::PARAM_STR);
                $insert_stmt->bindValue(':firstname', htmlspecialchars(strip_tags($firstname)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':lastname', htmlspecialchars(strip_tags($lastname)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':mobile', htmlspecialchars(strip_tags($mobile)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':gender', htmlspecialchars(strip_tags($gender)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':weight', htmlspecialchars(strip_tags($weight)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':height', htmlspecialchars(strip_tags($height)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':medicalcondition', htmlspecialchars(strip_tags($medicalcondition)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':age', htmlspecialchars(strip_tags($age)), PDO::PARAM_STR);
                 $insert_stmt->bindValue(':healthOption', htmlspecialchars(strip_tags($healthOption)), PDO::PARAM_STR);
                $insert_stmt->execute();

                $fetch_user_by_email = "SELECT * FROM `users` WHERE `email`=:email";
                $query_stmt = $conn->prepare($fetch_user_by_email);
                $query_stmt->bindValue(':email', $email,PDO::PARAM_STR);
                $query_stmt->execute();
                $row = $query_stmt->fetch(PDO::FETCH_ASSOC);

                $returnData = msg(1, 200, 'You have successfully updated data.');

            endif;
        } catch (PDOException $e) {
            $returnData = msg(0, 500, $e->getMessage());
        }
    endif;
endif;

echo json_encode($returnData);
