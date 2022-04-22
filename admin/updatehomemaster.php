<?php
include("config/config.php");

if (isset($_POST['update'])) {
    $sql = "UPDATE `homemaster` SET 
    `IsAllergiesLink`='" . $_POST['IsAllergiesLink'] . "',
    `IsPregnentLink`='" . $_POST['IsPregnentLink'] . "',
    `IsDefaultLink`='" . $_POST['IsDefaultLink'] . "',
    `bottomHeader`='" . $_POST['bottomHeader'] . "',
    `bottomNotes`='" . $_POST['bottomNotes'] . "',
    `IsAllergiesBottomHeader`='" . $_POST['IsAllergiesBottomHeader'] . "',
    `IsAllergiesBottomNotes`='" . $_POST['IsAllergiesBottomNotes'] . "',
    `IsPregnentBottomHeader`='" . $_POST['IsPregnentBottomHeader'] . "',
    `IsPregnentBottomNotes`='" . $_POST['IsPregnentBottomNotes'] . "',
    `healthoption1Link`='" . $_POST['healthoption1Link'] . "',
    `healthoption2Link`='" . $_POST['healthoption2Link'] . "',
    `healthoption3Link`='" . $_POST['healthoption3Link'] . "',
    `healthoption4Link`='" . $_POST['healthoption4Link'] . "',
    `DateTime`='" . $_POST['DateTime'] . "'
     WHERE Id='" . $_POST['id'] . "'";
   //  die;
    $resnum = mysqli_query($con, $sql);
    header("Location: " . BASE_URL . "/homemaster.php");
}
