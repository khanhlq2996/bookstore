<div class="container" style="margin-top: 30px;">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3">
					<div class="dropdown">
						<button onclick="myFunction()" class="dropbtn">Chuyên mục sách</button>
						<div id="myDropdown" class="dropdown-content">
							<a href="#about">About</a>
							<a href="#base">Base</a>
							<a href="#blog">Blog</a>
							<a href="#contact">Contact</a>
							<a href="#custom">Custom</a>
							<a href="#support">Support</a>
							<a href="#tools">Tools</a>
							<a href="#about">About</a>
							<div class="panel">
								<div id="collapse" class="panel-collapse collapse">
									<div>
										<ul class="nav nav-pills nav-stacked"  role="tablist">
											<li><a href="index.php?v=chart&ch=total">Total</a></li>
											<li><a href="index.php?v=chart&ch=temperiature">By Temperature</a></li>
											<li><a href="index.php?v=chart&ch=rh">By RH</a></li>
											<li><a href="index.php?v=chart&ch=vLight">By vLight</a></li>
											<li><a href="index.php?v=chart&ch=iLight">By iLight</a></li>
											<li><a href="index.php?v=chart&ch=location">By Location</a></li>
										</ul>
									</div>
								</div>
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse">Xem thêm</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9" style="padding: 0 -10px; border-bottom: 1px solid #cccccc;">
					<ul class="nav navbar-nav">												
						<li><a href="index.php?v=page&id=1">Liên hệ</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right" style="color: blue;">
						<?php 
						session_start();
						if(isset($_SESSION["name"])){
							echo '<li class="dropdown">';
							echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">Xin chào '. $_SESSION["name"] .'!</a>';
							echo '<ul class="dropdown-menu">
							<li><a href="index.php?v=page&id=6">Thôn tin cá nhân</a></li>
							<li><a href="index.php?v=page&id=4">Giỏ hàng</a></li>
							<li><a href="index.php?v=page&id=5">Thanh toán</a></li>	
							<li><a href="./module/logout.php">Đăng xuất</a></li>
						</ul>';

					} else {
						echo '<li><a href="#" id="myBtn">Đăng nhập/Đăng ký</a></li>';
					}
					?>							
				</ul>
			</div>
		</div>			
	</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header" style="padding:35px 50px;">
				<button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
				<h4><span class="glyphicon glyphicon-lock"></span> Đăng nhập</h4>
			</div>
			<div class="modal-body" style="padding:40px 50px;">
				<form role="form" action="./module/processing-login-nav.php" method="POST">
					<div class="form-group">
						<label for="usrname"><span class="glyphicon glyphicon-user"></span> Tài khoản hoặc Email</label>
						<input type="text" class="form-control" id="usrname" name="email" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Mật khẩu</label>
						<input type="password" class="form-control" id="psw" name="password" placeholder="Enter password">
					</div>
					<div class="checkbox">
						<label><input type="checkbox" value="" checked>Remember me</label>
					</div>
					<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Đăng nhập</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<p>Bạn chưa có tài khoản? <a href="index.php?v=page&id=3">Đăng ký</a></p>
				<p>Quên <a href="#">Mật khẩu?</a></p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#myBtn").click(function(){
			$("#myModal").modal();
		});
	});
	function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
	}
</script>	