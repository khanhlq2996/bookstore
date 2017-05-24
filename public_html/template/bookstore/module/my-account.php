<?php
if(isset($_SESSION["id"])){	
	$c_bookstore = new C_bookstore();
	if(isset($_REQUEST["update-info"]))
	{
		$id=$_SESSION["id"]; $name=""; $addr=""; $phone="";
		if(!empty($_POST["name"])){
			$name = $_POST["name"];
		}
		if(!empty($_POST["address"])){
			$addr = $_POST["address"];
		}
		if(!empty($_POST["phone"])){
			$phone = $_POST["phone"];
		}
		$c_bookstore = new C_bookstore();
		$update = $c_bookstore->updateUser($id, $name, $addr, $phone);
	}
	elseif (isset($_REQUEST["update-password"]))
	{
		$c_bookstore = new C_bookstore();
		$id=$_SESSION["id"]; 
		$pass=$_POST["new_password"];
		$update = $c_bookstore->updateUserPass($id, $pass);
	}
	$getuserinfo = $c_bookstore->getuser($_SESSION["id"]);
	?>

	<h3>Thông tin cá nhân</h3>
	<div class="row">
		<form method="POST" action="">
			<div class="col-md-6">
				<div class="form-group">
					<label for="usr">Tên hiển thị:</label>
					<input type="text"  class="form-control" name="name" style="margin-bottom: 10px;" value="<?= $getuserinfo->user_name ?>">

					<label for="addressa">Địa chỉ:</label>
					<input type="text"  class="form-control" name="address" style="margin-bottom: 10px;" value="<?= $getuserinfo->user_address ?>">

					<label for="email">Email:</label>
					<input type="text"  class="form-control" name="email" style="margin-bottom: 10px;" value="<?= $getuserinfo->user_email ?>" readonly>

					<label for="phone">Điện thoại:</label>
					<input type="text"  class="form-control" name="phone" style="margin-bottom: 10px;" value="<?= $getuserinfo->user_phone ?>">

					<button type="submit" name="update-info" class="btn btn-md btn-success navbar-right" style="margin: 10px;">Cập nhật</button>
				</div>
			</div>
		</form>

		<form method="POST">
			<div class="col-md-5 col-md-offset-1" style="margin-top: 13px;">
				<h3>Đổi mật khẩu</h3>
				<div class="form-group">
					<label for="phone">Nhập Mật khẩu cũ:</label>
					<input type="password"  class="form-control" name="old_password" style="margin-bottom: 10px;">


					<label for="phone">Nhập Mật khẩu mới:</label>
					<input type="password"  class="form-control" name="new_password" style="margin-bottom: 10px;">

					<label for="phone">Xác nhận Mật khẩu mới:</label>
					<input type="password"  class="form-control" name="renew_password" style="margin-bottom: 10px;">

					<button type="submit" name="update-password" class="btn btn-nd btn-success navbar-right" style="margin: 10px;">Lưu thay đổi</button>
				</div>
			</div>	
		</form>
	</div>

	<?php
} else {
	echo '<li><a href="#" id="mybtn">đăng nhập/đăng ký</a></li>';
}
?>	