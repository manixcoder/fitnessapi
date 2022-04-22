<?php
include("config/config.php");
$id  = $_GET['id'];

$query  = "DELETE FROM `user_calories` WHERE id='" . $id . "'";
$resnum = mysqli_query($con, $query);
header("Location: " . BASE_URL . "/user_calories.php");