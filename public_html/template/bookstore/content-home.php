<div class="container" style="padding: 20px;">
	<?php 
	_slide_home();
	?>

	<!-- San pham moi -->
	<div style="border-top: 1px solid #cccccc; margin-top: 20px;">

		<h2>Sản phẩm mới</h2>
		<div class="row">
			<?php
			$c_bookstore = new C_bookstore();
			$products = $c_bookstore->newProducts()['products'];
			if(count($products) < 1){
				echo "Không có sản phẩm nào trong Chuyên mục này";
			}else {
				?>
				<div class="col-md-4">
					<div class="thumbnail2">
						<a href="/san-pham/<?= $products[0]->slug.'-'.$products[0]->product_id ?>.html">
							<img src="<?php if($products[0]->product_avata == null) {echo "/public_html/template/bookstore/images/product.jpg";} else echo $products[0]->product_avata; ?>" alt="Lights" style="width:100%;">
						</a>


						<div class="caption text-center">
							<p><b><?= $products[0]->product_name ?></b></p>
							<p><b><?= $products[0]->product_price?> VNĐ</b></p>
						</div>
						<div class="text-center">
							<a style="border-radius: 0px;" href="/gio-hang.html" class="btn btn-success"> Mua Sách </a>
						</div>
					</div>

				</div>
				<div class="col-md-8">
					<?php
					for ($i=1; $i < 9; $i++) {
						?>
						<div class="col-md-3">
							<div class="thumbnail2">
								<a href="/san-pham/<?= $products[$i]->slug.'-'.$products[$i]->product_id ?>.html">
									<img src="<?php if($products[$i]->product_avata == null) {echo "/public_html/template/bookstore/images/product.jpg";} else echo $products[$i]->product_avata; ?>" alt="Lights" style="width:100%;">
								</a>


								<div class="caption text-center">
									<p><b><?= $products[$i]->product_name ?></b></p>
									<p><b><?= $products[$i]->product_price?> VNĐ</b></p>
								</div>
								<div class="text-center">
									<a style="border-radius: 0px;" href="/gio-hang.html" class="btn btn-success"> Mua Sách </a>
								</div>
							</div>

						</div>
						<?php
					}
					?>
				</div>
				<?php
			}
			?>	
		</div>

	</div>	


	<!-- San pham hot -->


	<div style="border-top: 1px solid #cccccc; margin-top: 20px;">

		<h2>Sản phẩm được xem nhiều</h2>
		<div class="row">
			<?php
			$c_bookstore = new C_bookstore();
			$products = $c_bookstore->bestViewProducts()['products'];
			if(count($products) < 1){
				echo "Không có sản phẩm nào trong Chuyên mục này";
			}else {
				?>
				<div class="col-md-8">
					<?php
					for ($i=0; $i < 8; $i++) {
						?>
						<div class="col-md-3">
							<div class="thumbnail2">
								<a href="/san-pham/<?= $products[$i]->slug.'-'.$products[$i]->product_id ?>.html">
									<img src="<?php if($products[$i]->product_avata == null) {echo "/public_html/template/bookstore/images/product.jpg";} else echo $products[$i]->product_avata; ?>" alt="Lights" style="width:100%;">
								</a>


								<div class="caption text-center">
									<p><b><?= $products[$i]->product_name ?></b></p>
									<p><b><?= $products[$i]->product_price?> VNĐ</b></p>
								</div>
								<div class="text-center">
									<a style="border-radius: 0px;" href="/gio-hang.html" class="btn btn-success"> Mua Sách </a>
								</div>
							</div>

						</div>
						<?php
					}
					?>
				</div>		
				<div class="col-md-4">
					<div class="thumbnail2">
						<a href="/san-pham/<?= $products[0]->slug.'-'.$products[0]->product_id ?>.html">
							<img src="<?php if($products[0]->product_avata == null) {echo "/public_html/template/bookstore/images/product.jpg";} else echo $products[0]->product_avata; ?>" alt="Lights" style="width:100%;">
						</a>
						<div class="caption text-center">
							<p><b><?= $products[0]->product_name ?></b></p>
							<p><b><?= $products[0]->product_price?> VNĐ</b></p>
						</div>
						<div class="text-center">
							<a style="border-radius: 0px;" href="/gio-hang.html" class="btn btn-success"> Mua Sách </a>
						</div>
					</div>

				</div>
				<?php
			}
			?>	
		</div>



	</div>
</div>
