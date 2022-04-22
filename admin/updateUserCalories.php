<?php
include("config/config.php");

if (isset($_POST['update'])) {
   
    $sql = "UPDATE `user_calories` SET 
    `date`='" . $_POST['date'] . "',
    `time`='" . $_POST['time'] . "',
    `calburn`='" . $_POST['calburn'] . "',
    `caltaken`='" . $_POST['caltaken'] . "',
    `product`='" . $_POST['product'] . "',
    `energy`='" . $_POST['energy'] . "',
    `currentbmi`='" . $_POST['currentbmi'] . "'
     WHERE id='" . $_POST['user_id'] . "'";
    $resnum = mysqli_query($con, $sql);
    header("Location: " . BASE_URL . "/user_calories.php");
}
