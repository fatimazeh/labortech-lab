<?php

$fistname = $_POST["fname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$message1 = $_POST["message1"];
$conn = mysqli_connect("localhost", "root", "", "project") or die("connection failed");
$sql = "INSERT INTO appointment(First_name, Email, Mobile, message1) VALUES ('{$fistname}','{$email}','{$mobile}','{$message1}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: appointment.php");
mysqli_close($conn);
?>