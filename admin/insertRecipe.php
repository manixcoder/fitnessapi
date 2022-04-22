<?php
include("config/config.php");
if (isset($_POST['update'])) {
    $image = isset($_FILES['image']['name']) ? $_FILES['image']['name'] : '';
    $file_path = "upload/";
    $file_path = $file_path . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $file_path);
    if ($image != '') {
        $url = BASE_URL . "/upload/" . $image;
    } else {
        $url = '';
    }
    $query  = "INSERT INTO `recipe` (`name`, `description`, `instructions`, `Ingredients1`, `Ingredients2`, `Ingredients3`, `image`, `cat`, `createdby`) 
    VALUES ('" . $_POST['name'] . "', '" . $_POST['description'] . "', '" . $_POST['instructions'] . "', '" . $_POST['Ingredients1'] . "', '" . $_POST['Ingredients2'] . "', '" . $_POST['Ingredients3'] . "', '" . $url . "', '" . $_POST['cat'] . "', '" . $_POST['createdby'] . "')";
    $resnum = mysqli_query($con, $query);
    header("Location: " . BASE_URL . "/recipe.php");
}
