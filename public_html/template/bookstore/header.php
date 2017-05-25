<div class="container" style="margin-top: 10px;">
	
	<div class="row">
		<div class="col-md-4">
			<a href="/">
				<img src="/public_html/template/bookstore/images/logo.png" alt="">
			</a>
		</div>

		<div class="col-md-6">
			<form>
				<div class="input-group" style="padding-top: 15px;">
					<input type="text" class="form-control" placeholder="Search">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="glyphicon glyphicon-search"></i>
						</button>
					</div>
				</div>
			</form>
		</div>

		<div class="col-md-2">
			<li class="dropdown giohang" style="list-style: none;">
				<a class="dropdown-toggle" data-toggle="dropdown" style="color: #4CAF50; background-color: rgb(245, 245, 245);">
					<span class="glyphicon glyphicon-shopping-cart" style="font-size: 40px; margin-top:10px;"></span>
					<b >Giỏ hàng</b><br>
				</a>		
				<ul class="dropdown-menu">
					<li><a href="/gio-hang.html">Giỏ hàng</a></li>
					<li><a href="/thanh-toan.html">Thanh toán</a></li>	
				</ul>
			</li>
		</div>	
	</div>

</div>

<?php 
_nav();
?>