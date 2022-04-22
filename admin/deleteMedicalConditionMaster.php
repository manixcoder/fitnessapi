<?php
include("config/config.php");
$id  = $_GET['id'];

$query  = "DELETE FROM `medical_condition_master` WHERE id='" . $id . "'";
$resnum = mysqli_query($con, $query);
header("Location: " . BASE_URL . "/medical_condition_master.php");