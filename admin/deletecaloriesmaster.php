<?php
include("config/config.php");
$id  = $_GET['id'];

$query  = "DELETE FROM `caloriesmaster` WHERE item_id='" . $id . "'";
$resnum = mysqli_query($con, $query);
header("Location: " . BASE_URL . "/caloriesmaster.php");
