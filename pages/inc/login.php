<?php
// session_start();
$email = $_POST["email"];
$password = $_POST["password"];
include "connect.php";
// echo $email,$password;
$check = mysqli_query($connect, "SELECT * FROM `users` WHERE `email`= '$email'");

// print_r(mysqli_num_rows($check));
if (mysqli_num_rows($check) > 0) {
	// $user = mysqli_fetch_assoc($check);
	// // print_r($user);
	// $_SESSION['user'] = [
	// 	"positionId" => $user['postionId'],
	// ];
	header('Location: ../admin/index.php');
} else {
	$_SESSION['message'] = "Не верный логин или пароль";
	header('Location: ../login.html');
}
