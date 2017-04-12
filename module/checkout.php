<h3>Thanh toán</h3>
<br><br>
<h4>Thông tin thanh toán</h4>
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<label for="usr">Họ và Tên:</label>
			<input type="text"  class="form-control" name="name" style="margin-bottom: 10px;">

			<label for="addressa">Địa chỉ:</label>
			<input type="text"  class="form-control" name="address" style="margin-bottom: 10px;">

			<label for="email">Email:</label>
			<input type="text"  class="form-control" name="email" style="margin-bottom: 10px;">

			<label for="phone">Phone:</label>
			<input type="text"  class="form-control" name="phone" style="margin-bottom: 10px;">
			<div class="form-group">
			<label for="comment">Ghi chú đơn hàng:</label>
				<textarea class="form-control" rows="5" id="comment"></textarea>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<h3></h3>
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Sản phẩm</th>
					<th>Đơn giá</th>
					<th>Số lượng</th>
					<th>Thành tiền</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>Bí mật người Do Thái</td>
					<td>120000 vnđ</td>
					<td>1</td>
					<td>120000 vnđ</td>
				</tr>

				<tr>
					<td colspan="2"><strong>TỔNG TIỀN</strong></td>
					<td colspan="2"><strong>120000 vnđ</strong></td>
				</tr>				
			</tbody>
		</table>
	</div>
</div>


<div style="margin: 20px;">
	<h4>Xác nhận hóa đơn</h4>
	<div class="checkbox">
		<label><input type="checkbox" name="cb">Tôi đã kiểm tra đơn hàng không có sai sót gì. Tôi chấp nhận mua hàng</label>
	</div>
	<button type="button" class="btn btn-primary">Đặt hàng</button>
</div>