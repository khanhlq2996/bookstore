<?php 
if (!isset($_SESSION["id"])) {
	echo "Vui lòng đăng nhập!!";
}else {

	$c_bookstore = new C_bookstore();
	$bills = $c_bookstore->bills($_SESSION["id"])['bill'];
	echo '<h2>Đơn hàng</h2>';
	foreach ($bills as $value) {
		//echo $value->order_id;
		$order = $c_bookstore->getOrder(1);
		print_r($order);
		?>
		<div class="row bill">
			<div class="col-md-2">
				<img src="/public_html/template/bookstore/images/product.jpg" style="width: 120px;">
			</div>
			<div class="col-md-10">
				<div class="col-md-4">
					<h3>Thông tin sản phẩm</h3>
					<p></p>
					<p>Đơn giá: </p>
					<p>Số lượng: ........</p>
				</div>
				<div class="col-md-4">
					<h3>Địa chỉ thanh toán</h3>
					<p>Họ tên: <?= $value->user_name ?></p>
					<p>Địa chỉ: <?= $value->user_address ?></p>
					<p>Điện thoại: <?= $value->user_phone ?></p>
				</div>
				<div class="col-md-4">
					<h3>Đơn hàng</h3>
					<p>Ngày lập: <?= $value->bill_created ?></p>
					<p>Tổng tiền: <?= $value->total_pay?></p>
					<p>Trạng thái thanh toán: 
						<?php  
						if(!$value->transaction_status){
							echo "Chưa thanh toán";
						}else echo "Đã thanh toán";
						?> 
					</p>
				</div>
			</div>
		</div>

		<?php 

	}
}
?>