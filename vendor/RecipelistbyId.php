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
            $sqlquery = "SELECT * FROM `Recipe` WHERE `createdby`=0 or `createdby`=:id order by `id` DESC";
            $list_of_usercalories= $conn->prepare($sqlquery);
             $list_of_usercalories->bindValue(":id", $id, PDO::PARAM_INT);
             $list_of_usercalories->execute();

              $prescriptions = array();
                while($row = $list_of_usercalories->fetch(PDO::FETCH_ASSOC))
                            {
                            $prescriptions[] = $row;
                            }

                    $returnData = [
                        'success' => 1,
                        'message' => 'Recipe details by ID and createdby admin',
                        'list_of_Recipe'=>$prescriptions,
                    ];
        }
        catch(PDOException $e){
            echo "errer".$e->getMessage();
            $returnData = msg(0,500,$e->getMessage());
        }

endif;

echo json_encode($returnData);