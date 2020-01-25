<?php
session_start();

$username = $_POST["user_name"];
$_SESSION["user_name"] = $username;

$new_page = "hello.php";
header("Location: $new_page");
die();

?>