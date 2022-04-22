<?php
include("config/config.php");

if (isset($_POST['update'])) {
    $sql = "UPDATE `healthmaster` SET 
    `heading`='" . $_POST['heading'] . "'
     WHERE id='" . $_POST['id'] . "'";
    $resnum = mysqli_query($con, $sql);
    header("Location: " . BASE_URL . "/healthmaster.php");
}