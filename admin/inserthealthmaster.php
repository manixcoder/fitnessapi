<?php
include("config/config.php");
if (isset($_POST['update'])) {
    $query  = "INSERT INTO `healthmaster` (`heading`) 
    VALUES ('" . $_POST['heading'] . "')";
    $resnum = mysqli_query($con, $query);
    header("Location: " . BASE_URL . "/healthmaster.php");
}
