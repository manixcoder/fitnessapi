<?php
include("config/config.php");
if (isset($_POST['update'])) {

	$image = isset($_FILES['url']['name']) ? $_FILES['url']['name'] : '';
	$file_path = "upload/";
	$file_path = $file_path . basename($_FILES['url']['name']);
	move_uploaded_file($_FILES['url']['tmp_name'], $file_path);
	if ($image != '') {
		$url = BASE_URL . "/upload/" . $image;
	} else {
		$url = '';
	}
	$query  = "INSERT INTO `challangesmaster`(`url`, `healthoption`, `gender`, `IsPregency`, `medicalconditionId`, `agestart`, `ageend`) 
    VALUES ('" . $url . "','" . $_POST['healthoption'] . "','" . $_POST['gender'] . "','" . $_POST['IsPregency'] . "','" . $_POST['medicalconditionId'] . "','" . $_POST['agestart'] . "','" . $_POST['ageend'] . "')";
	$resnum = mysqli_query($con, $query);
	header("Location: " . BASE_URL . "/challangesmaster.php");
}
