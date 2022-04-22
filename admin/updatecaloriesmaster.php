<?php
include("config/config.php");

if (isset($_POST['update'])) {
    $sql = "UPDATE `caloriesmaster` SET 
    `item_name`='" . $_POST['item_name'] . "',
    `qty`='" . $_POST['qty'] . "',
    `cal_value`='" . $_POST['cal_value'] . "',
    `foodintake_id`='" . $_POST['foodintake_id'] . "'
     WHERE item_id='" . $_POST['item_id'] . "'";
    // echo "<pre>";print_r($_POST);die;
    $resnum = mysqli_query($con, $sql);
    header("Location: " . BASE_URL . "/caloriesmaster.php");
}
