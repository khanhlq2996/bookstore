
<h3>Giỏ hàng</h3>
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

		<tr>
			<td><img src="/images/product.jpg" width="150px;"></td>
			<td><p>Bí mật người DO THÁI</p></td>
			<td id="price">120000</td>
			<td class="text-center"> 
				<button type="button" class="glyphicon glyphicon-minus btn" onclick="pre()" id="btn-mi"></button>
				<span id="num"> 1 </span>
				<button type="button" class="glyphicon glyphicon-plus btn" onclick="plus()"></button>
			</td>
			<td id="total">120000</td>
			<td class="text-center"> <button type="button" class="glyphicon glyphicon-refresh btn"></button>&nbsp;&nbsp;<button type="button" class="glyphicon glyphicon-remove btn"></button></td>
		</tr>


		<tr>
			<td colspan="6">
				<a href="index.php" type="button" class="btn btn-primary">Tiếp tục mua hàng</a>
				<button type="button" class="btn btn-danger navbar-right" style="margin-right: 0px;">Xóa hết giỏ hàng</button>
			</td>
		</tr>	
	</tbody>
</table>

<div class="row">
	<div class="col-md-5">
		<h3>Mã giảm giá</h3>
		<div class="form-group text-center">
			<label>Điền mã giảm giá vào ô nếu bạn có </label>
			<input type="text" class="form-control" name="discount"  style="margin: 10px;"/>
			<button type="button" class="btn btn-primary">Áp dụng</button>
		</div>
	</div>

	<div class="col-md-5 col-md-offset-2 text-center">
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
		total(num);
	}

	function plus(){
		var num = +document.getElementById("num").innerHTML;
		if (num == 0) {			
			document.getElementById("pre").disabled = false;
		}
		num++;
		document.getElementById("num").innerHTML = num;
		total(num);
	}

	function total(num){
		var price = +document.getElementById("price").innerHTML;

		document.getElementById("total").innerHTML = (num * price);
	}
</script>