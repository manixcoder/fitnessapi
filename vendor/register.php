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
    || !isset($data->password)
    || empty(trim($data->name))
    || empty(trim($data->email))
    || empty(trim($data->password))
) :

    $fields = ['fields' => ['name', 'email', 'password']];
    $returnData = msg(0, 422, 'Please Fill in all Required Fields!', $fields);

// IF THERE ARE NO EMPTY FIELDS THEN-
else :

    $name = trim($data->name);
    $email = trim($data->email);
    $password = trim($data->password);
    $firstname=trim($data->firstname);
    $lastname=trim($data->lastname);
    $mobile=trim($data->mobile);
    $gender=trim($data->gender);
    $weight=trim($data->weight);
    $height=trim($data->height);
    $medicalcondition=trim($data->medicalcondition);
    $age=trim($data->age);
    $healthOption=trim($data->healthOption);
    $IsAllergies=trim($data->IsAllergies);
    $IsPregnent=trim($data->IsPregnent);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
        $returnData = msg(0, 422, 'Invalid Email Address!');

    elseif (strlen($password) < 8) :
        $returnData = msg(0, 422, 'Your password must be at least 8 characters long!');

    elseif (strlen($name) < 3) :
        $returnData = msg(0, 422, 'Your name must be at least 3 characters long!');

    else :
        try {

                $check_email_stmt = $conn->prepare("SELECT `email` FROM `users` WHERE `email`=:email");
                $check_email_stmt->bindValue(":email", $email, PDO::PARAM_STR);
                $check_email_stmt->execute();

            if ($check_email_stmt->rowCount()) :
                $returnData = msg(0, 422, 'This E-mail already in use!');

            else :
                $insert_query = "INSERT INTO `users`(`name`,`email`,`password`,`firstname`,`lastname`,`mobile`,`gender`,`weight`,`height`,`medicalcondition`,`Age`,`healthOption`,`IsAllergies`,`IsPregnent`) VALUES (:name,:email,:password,:firstname,:lastname,:mobile,:gender,:weight,:height,:medicalcondition,:age,:healthOption,:IsAllergies,:IsPregnent)";

                $insert_stmt = $conn->prepare($insert_query);

                // DATA BINDING
                $insert_stmt->bindValue(':name', htmlspecialchars(strip_tags($name)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':email', $email, PDO::PARAM_STR);
                $insert_stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
                $insert_stmt->bindValue(':firstname', htmlspecialchars(strip_tags($firstname)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':lastname', htmlspecialchars(strip_tags($lastname)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':mobile', htmlspecialchars(strip_tags($mobile)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':gender', htmlspecialchars(strip_tags($gender)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':weight', htmlspecialchars(strip_tags($weight)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':height', htmlspecialchars(strip_tags($height)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':medicalcondition', htmlspecialchars(strip_tags($medicalcondition)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':age', htmlspecialchars(strip_tags($age)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':healthOption', htmlspecialchars(strip_tags($healthOption)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':IsAllergies', htmlspecialchars(strip_tags($IsAllergies)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':IsPregnent', htmlspecialchars(strip_tags($IsPregnent)), PDO::PARAM_STR);
                $insert_stmt->execute();

                $returnData = msg(1, 201, 'You have successfully registered.');

            endif;
        } catch (PDOException $e) {
            $returnData = msg(0, 500, $e->getMessage());
        }
    endif;
endif;

echo json_encode($returnData);
