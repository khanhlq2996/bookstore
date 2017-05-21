<?php
include("../function.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$email_user = $_POST['email'];
	$pwd = md5($_POST['password']);
	include "../config.php";
	session_start();

	$sql = "SELECT user_name, user_email, user_password FROM user WHERE (user_email = '$email_user') AND (user_password = '$pwd')";
	$result = $con->query($sql);
	if (!$result) {
		die('Invalid query: ' . mysql_error());
	}
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$_SESSION["name"] = $row["user_name"];
			$con->close();
			header("Location: ../index.php");
		}
	} else {
		header("Location: ../index.php?v=page&id=2");
	}
}
?>