<?
include("connect.php");
$fio = $_POST["fio"];
$iin = $_POST["iin"];
$staff = $_POST["staff"];
$risk = $_POST["risk"];
$dateStart = $_POST["date-start"];
$price = $_POST["price"];

mysqli_query($connect, "INSERT INTO `live` VALUES (NULL,'$fio','$iin','$staff','$price','$dateStart',NULL,'$risk')");
header("Location: ../../index.html");
