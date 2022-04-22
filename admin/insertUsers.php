<?php
include("config/config.php");
if (isset($_POST['update'])) {

    $query  = "INSERT INTO `users` (`user_type`,`name`,`email`, `password`,`firstname`,`lastname`,`mobile`,`gender`,`weight`,`goalweight`, `height`, `datetime`, `activityid`, `medicalcondition`,`Age`,`healthOption`,`bmi`, `GoalStep`,`GoalWater`,`CalGoal`,`Level`,`IsPregnent`,`IsAllergies`,`Rating`) 
VALUES ( '2','" . $_POST['name'] . "','" . $_POST['email'] . "', '" . password_hash($_POST['password'], PASSWORD_DEFAULT) . "','" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['mobile'] . "',  '" . $_POST['gender'] . "','" . $_POST['weight'] . "','" . $_POST['goalweight'] . "', '" . $_POST['height'] . "', '" . $_POST['datetime'] . "',  '" . $_POST['activityid'] . "', '" . $_POST['medicalcondition'] . "', '" . $_POST['Age'] . "', '" . $_POST['healthOption'] . "', '" . $_POST['bmi'] . "', '" . $_POST['GoalStep'] . "', '" . $_POST['GoalWater'] . "', '" . $_POST['CalGoal'] . "', '" . $_POST['Level'] . "', '" . $_POST['IsPregnent'] . "', '" . $_POST['IsAllergies'] . "','" . $_POST['Rating'] . "')";
    $resnum = mysqli_query($con, $query);
    header("Location: " . BASE_URL . "/users.php");
}
