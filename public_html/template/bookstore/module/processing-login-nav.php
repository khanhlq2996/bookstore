<?php
//include("../function.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$email_user = $_POST['email'];
	$pwd = md5($_POST['password']);
	include "../config.php";
	session_start();
	$con = mysqli_connect("localhost","root","","bookstore");
	mysqli_set_charset($con, "utf8");
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$sql = "SELECT user_name, user_email, user_password FROM user WHERE (user_email = '$email_user') AND (user_password = '$pwd')";
	$result = $con->query($sql);
	if (!$result) {
		die('Invalid query: ' . mysql_error());
	}
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$_SESSION["name"] = $row["user_name"];
			$con->close();
			header("Location: /");
		}
	} else {
		header("Location: /dang-nhap.html");
	}
}
?>