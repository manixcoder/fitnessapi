<?php
include("config/config.php");

if (isset($_POST['update'])) {
    $sql = "UPDATE `users` SET 
    `name`='" . $_POST['name'] . "',
    `firstname`='" . $_POST['firstname'] . "',
    `lastname`='" . $_POST['lastname'] . "',
    `mobile`='" . $_POST['mobile'] . "',
    `gender`='" . $_POST['gender'] . "',
    `weight`='" . $_POST['weight'] . "',
    `goalweight`='" . $_POST['goalweight'] . "',
    `height`='" . $_POST['height'] . "',
    `activityid`='" . $_POST['activityid'] . "',
    `medicalcondition`='" . $_POST['medicalcondition'] . "',
    `Age`='" . $_POST['Age'] . "',
    `healthOption`='" . $_POST['healthOption'] . "',
    `bmi`='" . $_POST['bmi'] . "',
    `GoalStep`='" . $_POST['GoalStep'] . "',
    `GoalWater`='" . $_POST['GoalWater'] . "',
    `CalGoal`='" . $_POST['CalGoal'] . "',
    `Level`='" . $_POST['Level'] . "',
    `IsPregnent`='" . $_POST['IsPregnent'] . "',
    `IsAllergies`='" . $_POST['IsAllergies'] . "',
    `Rating`='" . $_POST['Rating'] . "'
     WHERE id='" . $_POST['user_id'] . "'";
    $resnum = mysqli_query($con, $sql);
    header("Location: " . BASE_URL . "/users.php");
}
