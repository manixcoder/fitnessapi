<?php
include("config/config.php");
$id  = $_GET['id'];

$query  = "DELETE FROM `users` WHERE id='" . $id . "'";
$resnum = mysqli_query($con, $query);
header("Location: " . BASE_URL . "/users.php");
