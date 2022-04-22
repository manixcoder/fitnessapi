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
    || !isset($data->description)
    || empty(trim($data->instructions))
    || empty(trim($data->Ingredients1))
    || empty(trim($data->Ingredients2))
    || empty(trim($data->Ingredients3))
    || empty(trim($data->cat))
    || empty(trim($data->createdby))
) :

    $fields = ['fields' => ['name', 'description', 'instructions']];
    $returnData = msg(0, 422, 'Please Fill in all Required Fields!', $fields);

// IF THERE ARE NO EMPTY FIELDS THEN-
else :

    $name = trim($data->name);
    $description = trim($data->description);
    $Ingredients1 = trim($data->Ingredients1);
    $Ingredients2 = trim($data->Ingredients2);
    $Ingredients3 = trim($data->Ingredients3);
    $cat=trim($data->cat);
    $instructions=trim($data->instructions);
    $createdby=trim($data->createdby);

    if (strlen($name) < 3) :
        $returnData = msg(0, 422, 'Name must be valid!');

    elseif (strlen($description) < 3) :
        $returnData = msg(0, 422, 'Your description must be at least 3 characters long!');

    elseif (strlen($Ingredients1) < 3) :
        $returnData = msg(0, 422, 'Your name must be at least 3 characters long!');

    else :
        try {

                $check_email_stmt = $conn->prepare("SELECT `name` FROM `Recipe` WHERE `name`=:name");
                $check_email_stmt->bindValue(":name", $name, PDO::PARAM_STR);
                $check_email_stmt->execute();

            if ($check_email_stmt->rowCount()) :
                $returnData = msg(0, 422, 'This name already in use!');

            else :
               // $insert_query = "INSERT INTO `users`(`name`,`email`,`password`,`firstname`,`lastname`,`mobile`,`gender`,`weight`,`height`,`medicalcondition`,`Age`,`healthOption`) VALUES (:name,:email,:password,:firstname,:lastname,:mobile,:gender,:weight,:height,:medicalcondition,:age,:healthOption)";

                 $insert_query = "INSERT INTO `Recipe`(`name`,`description`,`instructions`,`Ingredients1`,`Ingredients2`,`Ingredients3`,`cat`,`createdby`) VALUES (:name,:description,:instructions,:Ingredients1,:Ingredients2,:Ingredients3,:cat,:createdby)";



                $insert_stmt = $conn->prepare($insert_query);

                // DATA BINDING
                $insert_stmt->bindValue(':name', htmlspecialchars(strip_tags($name)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':description', htmlspecialchars(strip_tags($description)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':instructions', htmlspecialchars(strip_tags($instructions)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':Ingredients1', htmlspecialchars(strip_tags($Ingredients1)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':Ingredients2', htmlspecialchars(strip_tags($Ingredients2)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':Ingredients3', htmlspecialchars(strip_tags($Ingredients3)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':cat', htmlspecialchars(strip_tags($cat)), PDO::PARAM_STR);
                $insert_stmt->bindValue(':createdby', $createdby, PDO::PARAM_INT);

                $insert_stmt->execute();
                 $returnData = msg(1, 201, 'You have successfully created Recipe.');

            endif;
        } catch (PDOException $e) {
            $returnData = msg(0, 500, $e->getMessage());
        }
    endif;
endif;

echo json_encode($returnData);
