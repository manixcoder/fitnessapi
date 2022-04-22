<?php
include("config/config.php");

if (isset($_POST['update'])) {
    $sql = "INSERT INTO `caloriesmaster` (`item_name`, `qty`, `cal_value`, `foodintake_id`) 
    VALUES ('".$_POST['item_name']."', '".$_POST['qty']."', '".$_POST['cal_value']."', '".$_POST['foodintake_id']."')";
    $resnum = mysqli_query($con, $sql);
    header("Location: " . BASE_URL . "/caloriesmaster.php");
}