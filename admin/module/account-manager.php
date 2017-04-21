<h1 style="text-align: center;">Quản lí tài khoản</h1>
<div id="box1">
	<h1>Đăng kí</h1>
	<form action="prp.php" method="post">
		<div class="form-group">
			<label for="email">Username:</label>
			<input type="text" class="form-control" id="email" name="txtusername" placeholder="Enter username">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" name="txtpassword" placeholder="Enter password">
		</div>
		<div class="form-group">
			<label for="pwd">Nhập lại password:</label>
			<input type="password" class="form-control" id="pwd" name="txtagainpass" placeholder="Enter password">
		</div>
		<div class="form-group">
			<label for="sel1">Quyền hạn: </label>
			<select class="form-control" id="sel1" name="txtquyenhan">
				<option>1</option>
				<option>2</option>
				<option>3</option>
			</select>
		</div>

		<button type="submit" class="btn btn-default">Đăng kí</button>
	</form>
</div>
<div id="box2">
	<h1>Update</h1>
	<form>

		<div class="form-group">
			<label for="pwd">Password cũ:</label>
			<input type="password" class="form-control" name="txtoldpassword" id="pwd" placeholder="Enter password cũ">
		</div>
		<div class="form-group">
			<label for="pwd">Password mới:</label>
			<input type="password" class="form-control" id="pwd" name="txtnewpassword" placeholder="Enter password mới">
		</div>
		<div class="form-group">
			<label for="sel1">Thay đổi quyền: </label>
			<select class="form-control" id="sel1" name="txtquyenhan">
				<option>1</option>
				<option>2</option>
				<option>3</option>
			</select>
		</div>
		<button type="submit" class="btn btn-default">Sửa</button>
	</form>
	<form>
		<label for="pwd">Xóa Acount: </label>
		<table>
			<tr>
				<td><input type="text" name="txtacount" class="form-control" id="pwd" placeholder="Enter user name muốn xóa" size="100px">
				</td>
				<td><button type="submit" class="btn btn-default">Xóa</button></td>
			</tr>
		</table>

	</form>

</div>

<div id="box3"></div>
