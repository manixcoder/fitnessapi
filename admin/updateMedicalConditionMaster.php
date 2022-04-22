<?php
include("config/config.php");

if (isset($_POST['update'])) {
    $sql = "UPDATE `medical_condition_master` SET 
    `MC`='" . $_POST['MC'] . "'
     WHERE Id='" . $_POST['id'] . "'";
    //  die;
    $resnum = mysqli_query($con, $sql);
    header("Location: " . BASE_URL . "/medical_condition_master.php");
}
