<?php 
if(isset($_SESSION["cart"]))
{
	$cart = $_SESSION["cart"];
	//print_r($cart);

	?>
	<h2>Giỏ hàng</h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th width="150px">Ảnh bìa</th>
				<th>Tên Sách</th>
				<th>Đơn giá</th>
				<th>Số lượng</th>
				<th>Tổng tiền</th>
				<th>Hành động</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($cart as $value) {
				$c_bookstore = new C_bookstore();
				$book = $c_bookstore->product($value["id"]);
				//print_r($book);
				?>
				<tr>
					<td><img src="<?= $book["product"][0]->product_avata?>" width="150px;"></td>
					<td><p><?= $book["product"][0]->product_name?></p></td>
					<td id="price"><?= $book["product"][0]->product_price?></td>
					<td class="text-center"> 
						<button type="button" class="glyphicon glyphicon-minus btn" onclick="pre()" id="btn-mi"></button>
						<span id="num"> <?= $value["qty"]?> </span>
						<button type="button" class="glyphicon glyphicon-plus btn" onclick="plus()"></button>
					</td>
					<td id="total"></td>
					<td class="text-center"> <button type="button" class="glyphicon glyphicon-refresh btn"></button>&nbsp;&nbsp;<button type="button" class="glyphicon glyphicon-remove btn"></button></td>
				</tr>
				<?php
			}
			?>

			<tr>
				<td colspan="6">
					<a href="/" type="button" class="btn btn-primary">Tiếp tục mua hàng</a>
					<button type="button" class="btn btn-danger navbar-right" style="margin-right: 0px;">Xóa hết giỏ hàng</button>
				</td>
			</tr>	
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<h3>Tổng số tiền phải thanh toán</h3>
			<table class="table table-bordered text-left">
				<thead>
					<tr>
						<th>Tổng cộng</th>
						<th>Số tiền</th>
					</tr>
				</thead>
				<tbody>

					<tr>
						<td>Tất cả</td>
						<td>120000 vnđ</td>
					</tr>

				</tbody>
			</table>

			<button type="button" class="btn btn-primary" style="margin-bottom: 30px;">Thanh toán</button>
		</div>
	</div>


	<script type="text/javascript">
		function pre(){
			var num = +document.getElementById("num").innerHTML;
			if(num == 1) {
				document.getElementById("pre").disabled = true;
			}
			num--;
			document.getElementById("num").innerHTML = num;
		}

		function plus(){
			var num = +document.getElementById("num").innerHTML;
			if (num == 0) {			
				document.getElementById("pre").disabled = false;
			}
			num++;
			document.getElementById("num").innerHTML = num;
		}

		function total(){
			var num = +document.getElementById("num").innerHTML;
			var price = +document.getElementById("price").innerHTML;
			document.getElementById("total").innerHTML = (num * price);
		}
	</script>

	<?php 

} else {
	?>
	<h3>Bạn chưa thêm sản phẩm nào vào Giỏ hàng!!</h3>
	<h3><a href="/">Trở lại cửa hàng</a></h3>
	<?php
}
?>