<?php
//echo date("Y-m-d");
$c_bookstore = new C_bookstore();
$product = $c_bookstore->product($_GET["id"])['product'][0];
if (isset($_REQUEST['addComment'])) {
	$mes = $_POST["mes"];
	$user_id = $_SESSION["id"];
	$product_id = $_GET["id"];
	$addComment = $c_bookstore->addComment($user_id, $product_id, $mes);
}
?>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php 
			_side_bar();
			?>
		</div>
		<!-- Chi tiet san pham -->
		<div class="col-md-9"  style="margin-top: 50px;">
			<h2>Thông tin chi tiết Sản phẩm</h2><br>
			<?php 
			if(count($product) == 0){
				echo "Có gì đó sai sai";
				exit();
			} else {
				$count = 0;
				while ($count == 0) 
				{
					?>
					<div class="row"  style="background: #ffffff; margin: 0px; padding: 10px; border-radius: 10px;">

						<div class="col-md-5">
							<img src="<?php if($product->product_avata == null) {echo '/public_html/template/bookstore/images/product.jpg';} else  echo $product->product_avata ?>" alt="Lights" style="width:100%">
						</div>

						<div class="col-md-7">
							<h2><?php echo $product->product_name ?></h2>
							<h2>Lượt xem: <?= $product->product_view ?></h2>
							<?php 
							$author_name = $c_bookstore->author($product->author_id)['author'][0];
							echo '<h3>Tác giả: <a href="/tac-gia/'.$product->author_id.'.html" style="margin:3px;">'.$author_name->author_name.'</a></h3>';
							?> 

							<h3>Giá: <?php echo $product->product_price ?> vnđ</h3>

							<form method="POST" action="/gio-hang.html">
								<h3>Số lượng: <button type="button" class="glyphicon glyphicon-minus btn" onclick="pre()" id="btn-mi"></button>
									<input size="1" id="num" name="qty" value="1" style="border: 0px; padding-left: 50px;">
									<button type="button" class="glyphicon glyphicon-plus btn" onclick="plus()"></button>
								</h3>
								<button type="submit" type="submit" name="add_to_cart" class="btn btn-primary btn-lg" value="<?= $product->product_id ?>">Mua sách</button>
							</form>

							<h3>Danh mục:</h3>

							<?php 
							$categories = explode(",", $product->categories);
							foreach ($categories as $value) {
								# code...
								$category = $c_bookstore->category($value)['category'][0];
								echo '<a href="/chuyen-muc/'.$category->slug.'-'.$value.'" class="btn btn-success btn-sm" style="margin:3px;">'.$category->category_name.'</a>';
							}
							?> 

						</div>
						<div class="col-md-12" style="margin-top: 20px;">
							<h3>Giới thiệu Sách:</h3>
							<p>	<?php echo $product->product_description ?></p>
						</div>
					</div>

					<?php 
					$count++;
				}
			}
			?>



			<!-- Comments -->
			<div class="col-md-12" style="background: #ffffff; margin-top: 50px; padding: 40px;  border-radius: 10px;">
				<h2>Bình luận</h2>
				<?php 
				$comments = $c_bookstore->getComments($product->product_id);
				if(count($comments) == 0){
					echo '<p><i>Hãy là người đầu tiên bình luận bài viết này!!</i></p>';
				}
				?>
				<form method="POST" action="">
					<div class="form-group">
						<textarea class="form-control" name="mes" rows="2" id="comment"></textarea>
					</div>

					<?php 
					if(!isset($_SESSION["id"])){
						echo "<h3 class='.text-warning'>Tính năng này cần đăng nhập!!!</h3>";
						echo '<a href="/dang-nhap.html"><h3>Đăng nhập</h3></a>';
					} else {
						echo '<input type="submit" class="btn btn-primary" name="addComment" value="Thêm bình luận">';
					}
					?>

				</form>
				<?php
				foreach ($comments as $value) {
					$user = $c_bookstore->getUser($value->user_id);
					//print_r($user);
					?>
					<div class="media">

						<div class="media-left">
							<img src="/public_html/template/bookstore/images/img_avatar1.png" class="media-object" style="width:45px">
						</div>
						<div class="media-body">
							<h4 class="media-heading"><?= $user->user_name?> </h4>
							<small><i>Bình luận vào <?= $value->comment_created ?></i></small>
							<p><?= $value->comment_messenger ?></p>
						</div>
					</div>
					<?php 
				}
				?>
			</div>
		</div>

	</div>

	<ul class="pager">
		<?php 
		$productNext = $c_bookstore->product($_GET["id"]+1)['product'][0];
		$productPrevious = $c_bookstore->product($_GET["id"]-1)['product'][0];
		?>
		<li><a href="/san-pham/<?= $productPrevious->slug.'-'.$productPrevious->product_id ?>.html">Previous</a></li>
		<li><a href="/san-pham/<?= $productNext->slug.'-'.$productNext->product_id ?>.html">Next</a></li>
	</ul>

	<?php 
	$add=$c_bookstore->addView($product->product_id);
	?>
</div>

<script type="text/javascript">
	function pre(){
		var num = +document.getElementById("num").value;
		if(num == 1) {
			document.getElementById("pre").disabled = true;
		}
		num--;
		document.getElementById("num").value = num;
	}

	function plus(){
		var num = +document.getElementById("num").value;
		if (num == 0) {			
			document.getElementById("pre").disabled = false;
		}
		num++;
		document.getElementById("num").value = num;
	}
</script>