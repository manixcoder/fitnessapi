<?php
include("config/config.php");

if (isset($_POST['update'])) {
    //echo "<pre>";print_r($_POST);die;
    $sql = "UPDATE `challangesmaster` SET 
    `healthoption`='" . $_POST['healthoption'] . "',
    `gender`='" . $_POST['gender'] . "',
    `IsPregency`='" . $_POST['IsPregency'] . "',
    `medicalconditionId`='" . $_POST['medicalconditionId'] . "',
    `ageend`='" . $_POST['ageend'] . "'
     WHERE id='" . $_POST['id'] . "'";
    // die;
    $resnum = mysqli_query($con, $sql);
    header("Location: " . BASE_URL . "/challangesmaster.php");
}
