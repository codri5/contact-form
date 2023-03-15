<?php

include("config/database.php");

extract($_POST);
$query = "INSERT INTO `form-data`(`name`, `email`, `message`) VALUES ('".$name."','".$email."','".$message."')";
$result = $conn->query($query);
$conn->close();

?>