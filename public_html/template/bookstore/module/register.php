<?php
$noti = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pwd = md5($_POST['password']);

	if ($name == '' || $email == '' || $pwd == '') {
		$noti = "<div class='alert alert-danger'>
		You must fill in all of the fields</div>";
	} else {
		$con = mysqli_connect("localhost","root","","bookstore");
		mysqli_set_charset($con, "utf8");
		// Check connection
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$sql = "SELECT user_email FROM user WHERE user_email = '$email' ";
		$result = $con->query($sql);

		// check if email exist
		if ($result->num_rows > 0) {
			$noti = "<div class='alert alert-danger'>
			This email has been used. Please try another</div>";
		} else {
			$sql = "INSERT INTO user (user_name, user_password, user_email)
			VALUE ('". $name ."', '". $pwd ."', '". $email ."')";
			if ($con->query($sql) === TRUE) {
				$noti = "<div class='alert alert-success'>
				Sign Up successfully, Login <a href='/dang-nhap.html'>Click Here</a></div>";
			} else {
				echo "Error: " . $sql . "<br>" . $con->error;
			}
			
		}
		$con->close();
	}
}
?>

<div id="register" style="padding: 20px;">
	<h2>Đăng ký thành viên</h2>

	<h3>  <?php echo $noti; ?><br>
	</h3>
	<form method="POST">			
		<div class="form-group">
			<label for="user">User name:</label>
			<input type="user" name="name" class="form-control" id="user">
		</div>

		<div class="form-group">
			<label for="email">Email address:</label>
			<input type="email" name="email" class="form-control" id="remail" value="">
		</div>
		<div id="mail"></div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" name="password" class="form-control" id="password" value="">
		</div>
		<div class="form-group">
			<label for="repwd">Confirm Password:</label>
			<input type="password" class="form-control" id="confirmpassword" value="" onchange="myFunction()">
		</div>
		<script>
			function myFunction() {
				var x = document.getElementById("password").value;
				var y = document.getElementById("confirmpassword").value;
				if (x == y) {
					document.getElementById("alert").className = "alert alert-success";
					document.getElementById("alert").innerHTML = "Mật khẩu trùng khớp";
				} else {
					document.getElementById("alert").className = "alert alert-warning";
					document.getElementById("alert").innerHTML = "Mật khẩu không trùng khớp";
				}
			}
		</script>
		<div id="alert"></div>
		<div class="checkbox">

			<label><input type="checkbox"> Remember me</label>
		</div>
		<button type="submit" class="btn btn-default" id="register">Submit</button>
		<a style="float: right;" href="index.php?v=page&id=2">Bạn đã có tài khoản, Đăng nhập tại đây!!</a>
	</form>
</div>