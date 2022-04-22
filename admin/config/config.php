<?php
ini_set('display_errors',0);
define('BASE_URL', 'http://localhost/fitnessapi/admin');
$serverName = "localhost"; 
$userName = "root";
$password = "";
$dbName = "testproject";
$con = mysqli_connect($serverName, $userName, $password, $dbName);
mysqli_select_db($con, $dbName);
if ($con) {
    //echo "Db connected";
} else {
    echo "Connection Fail!";
}
