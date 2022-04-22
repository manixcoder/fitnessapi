<?php
include("config/config.php");

if (isset($_POST['update'])) {
    $sql = "UPDATE `foodintake` SET 
    `name`='" . $_POST['name'] . "'
     WHERE id='" . $_POST['id'] . "'";
    $resnum = mysqli_query($con, $sql);
    header("Location: " . BASE_URL . "/foodintake.php");
}
