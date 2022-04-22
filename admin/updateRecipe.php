<?php
include("config/config.php");

if (isset($_POST['update'])) {
    // echo "<pre>";
    // print_r($_POST);
    // die;

    $sql = "UPDATE `recipe` SET 
    `name`='" . $_POST['name'] . "',
    `description`='" . $_POST['description'] . "',
    `instructions`='" . $_POST['instructions'] . "',
    `Ingredients1`='" . $_POST['Ingredients1'] . "',
    `Ingredients2`='" . $_POST['Ingredients2'] . "',
    `Ingredients3`='" . $_POST['Ingredients3'] . "',
    `cat`='" . $_POST['cat'] . "'
     WHERE id='" . $_POST['id'] . "'";
    $resnum = mysqli_query($con, $sql);
    header("Location: " . BASE_URL . "/recipe.php");
}
