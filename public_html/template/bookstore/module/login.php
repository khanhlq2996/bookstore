<div style="padding: 20px;<?php if(isset($_SESSION["name"])){ echo ' display: none;"';}?>" >
	<h2>Đăng nhập</h2>
	<div id="login" class="tab-pane fade in active">

		<?php
		// if(!isset($_SESSION["register"])) {
		// } else {
		// 	echo '<div class="alert-success alert">';
		// 	echo "Đăng ký thành công, Hãy đăng nhập bằng Form dưới đây!!";
		// 	echo '</div>';
		// }
		?>
		<form method="POST" action="/public_html/template/bookstore/module/processing-login-nav.php">
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" name="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" name="password" class="form-control" id="pwd">
			</div>
			<div class="checkbox">
				<label><input type="checkbox"> Remember me</label>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
			<a style="float: right;" href="/dang-ky.html">Bạn chưa có tài khoản, Đăng ký tại đây!!</a>
		</form>
	</div>
</div>

<?php 
if(isset($_SESSION["name"])){ 
	echo "<div style='padding: 20px;'>";
		echo "<h2>Bạn đã đăng nhập với tên tài khoản " . $_SESSION["name"] . "</h2>";
		echo 'Vui lòng <a href="./module/logout.php">Đăng xuất</a></li> trước, rồi Đăng nhập tài khoản khác!';
	echo "</div>";
}
?>