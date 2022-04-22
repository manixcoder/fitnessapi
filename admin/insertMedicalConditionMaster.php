<?php
include("config/config.php");
if (isset($_POST['update'])) {
    $query  = "INSERT INTO `medical_condition_master` (`MC`) 
    VALUES ('" . $_POST['MC'] . "')";
    $resnum = mysqli_query($con, $query);
    header("Location: " . BASE_URL . "/medical_condition_master.php");
}