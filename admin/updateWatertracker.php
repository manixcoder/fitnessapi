<?php
include("config/config.php");

if (isset($_POST['update'])) {
    $sql = "UPDATE `watertracker` SET 
    `watercount`='" . $_POST['watercount'] . "'
     WHERE id='" . $_POST['id'] . "'";
    $resnum = mysqli_query($con, $sql);
    header("Location: " . BASE_URL . "/watertracker.php");
}
