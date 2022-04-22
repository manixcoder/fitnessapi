<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require '../classes/Database.php';


 include_once(FCPATH.'phpmailer/phpmailer/src/PHPMailer.php');
  include_once(FCPATH.'phpmailer/phpmailer/src/SMTP.php');
  include_once(FCPATH.'phpmailer/phpmailer/Exception.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Include Composer autoload.php file
require 'autoload.php';
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
     !isset($data->email)
    || empty(trim($data->email))
) :

    $fields = ['fields' => ['email']];
    $returnData = msg(0, 422, 'Email is required !', $fields);

// IF THERE ARE NO EMPTY FIELDS THEN-
else :

   
    $email = trim($data->email);
    

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
        $returnData = msg(0, 422, 'Invalid Email Address!');

    else :
        try {

                $check_email_stmt = $conn->prepare("SELECT `email` FROM `users` WHERE `email`=:email");
                $check_email_stmt->bindValue(":email", $email, PDO::PARAM_STR);
                $check_email_stmt->execute();

            if ($check_email_stmt->rowCount()) :
                {
                //$returnData = msg(0, 422, 'This E-mail already in use!');
                $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
                $p= substr(str_shuffle($data), 0, 10);
                $mail = new PHPMailer();
                $mail ->isSMTP();
                $mail ->Host ="smtp.gmail.com";
                $mail -> SMTPAuth = true;
                $mail ->Username = '20293693saima@gmail.com';
                $mail ->Password = 'Saima20293693*';
                //$mail ->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
                $mail ->Port = '587';
                $mail ->SMTPSecure ='tls';
                $mail ->isHTML(true);
                
                $mail ->setFrom('20293693saima@gmail.com','Admin-FitnessApp');
                
                $mail ->addAddress($email);
                $mail ->Subject = 'Password-Reset-FitnessApp';
                
            
                $mail ->Body = 'Hello, Your Password is Reset and New password is : '.$p;
                
                
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );


                    if($mail->Send())
                    {
                        $insert_query = "Update `users` set `password`=:password Where `email`=:email";
                        $insert_stmt = $conn->prepare($insert_query);
                        $insert_stmt->bindValue(':email', $email, PDO::PARAM_STR);
                        $insert_stmt->bindValue(':password', password_hash($p, PASSWORD_DEFAULT), PDO::PARAM_STR);
                        $insert_stmt->execute();
                        $returnData = msg(1, 201, 'Reset Passowrd successfully sent to the email.');
                    }
                    else
                    {
                        $returnData = msg(1, 500, 'Email Sending Error.');
                    }

               

            }
            else :
                
                $returnData = msg(1, 201, 'Your email is not exist in our database.');

            endif;
        } catch (PDOException $e) {
            $returnData = msg(0, 500, $e->getMessage());
        }
    endif;
endif;

echo json_encode($returnData);
