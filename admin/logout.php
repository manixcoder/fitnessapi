<?php
include("config/config.php");
unset($_SESSION['admin_data']);
session_unset();
header("Location: ".BASE_URL."/index.php");
?>