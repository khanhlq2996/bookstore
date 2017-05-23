<?php
session_start();
$c_bookstore = new C_bookstore();
$categories = $c_bookstore->menuCategory()['categoryes'];
$menu = $c_bookstore->menu()['menu'];
?>
<div class="container" style="margin-top: 30px;">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3">
					<div class="dropdown">
						<button onclick="myFunction()" class="dropbtn">Chuyên mục sách</button>
						<div id="myDropdown" class="dropdown-content">
							<?php
							for ($i=0; $i < 8; $i++) { 
								echo '<a href="/chuyen-muc/'. $categories[$i]->slug .'-'. $categories[$i]->category_id .'">'. $categories[$i]->category_name.'</a>';
							}
							if(count($categories) > 8){
								?>
								<div class="panel">
									<div id="collapse" class="panel-collapse collapse">
										<div>
											<ul class="nav nav-stacked"  role="tablist">
												<?php 
												for ($i=8; $i < count($categories); $i++) { 
													echo '<li><a href="/chuyen-muc/'. $categories[$i]->slug .'-'. $categories[$i]->category_id .'">'. $categories[$i]->category_name.'</a></li>';
												}
												?>
											</ul>
										</div>
									</div>
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse">Xem thêm</a>
								</div>
								<?php 
							}
							?>
						</div>
					</div>
				</div>
				<div class="col-md-9" style="padding: 0 -10px; border-bottom: 1px solid #cccccc;">
					<ul class="nav navbar-nav">	
						<?php
						for ($i=0; $i < count($menu); $i++) { 
							echo '<li><a href="'.$menu[$i]->menu_url.'">'. $menu[$i]->menu_name .'</a></li>';
						}
						?>									

					</ul>

					<ul class="nav navbar-nav navbar-right" style="color: blue;">
						<?php
						if(isset($_SESSION["name"])){
							echo '<li class="dropdown">';
							echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">Xin chào '. $_SESSION["name"] .'!</a>';
							echo '<ul class="dropdown-menu">
							<li><a href="thong-tin-ca-nhan.html">Thông tin cá nhân</a></li>
							<li><a href="/public_html/template/bookstore/module/logout.php">Đăng xuất</a></li>
						</ul></li>';

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
				<form role="form" action="/public_html/template/bookstore/module/processing-login-nav.php" method="POST">
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
					<button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-off"></span> Đăng nhập</button>

					<button type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-off"></span> Đăng nhập Bằng Facebook</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<p>Bạn chưa có tài khoản? <a href="dang-ky.html">Đăng ký</a></p>
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