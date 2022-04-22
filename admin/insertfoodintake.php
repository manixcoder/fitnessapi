<?php
include("config/config.php");
if (isset($_POST['update'])) {
    $query  = "INSERT INTO `foodintake` (`name`) 
    VALUES ('" . $_POST['name'] . "')";
    $resnum = mysqli_query($con, $query);
    header("Location: " . BASE_URL . "/foodintake.php");
}
