<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php 
			_side_bar();
			?>
		</div>
		<div class="col-md-9"  style="margin-top: 50px;">
			<h2>Thông tin chi tiết Sản phẩm</h2><br>
			<?php 
			$c_bookstore = new C_bookstore();
			$product = $c_bookstore->product($_GET["id"])['product'][0];
			if(count($product) == 0){
				echo "Có gì đó sai sai";
				exit();
			} else {
				$count = 0;
				while ($count == 0) 
				{
					?>
					<div class="row">

						<div class="col-md-5">
							<img src="<?php if($product->product_avata == null) {echo '/public_html/template/bookstore/images/product.jpg';} else  echo $product->product_avata ?>" alt="Lights" style="width:100%">
						</div>

						<div class="col-md-7">
							<h2><?php echo $product->product_name ?></h2>
							<?php 
							$author_name = $c_bookstore->author($product->author_id)['author'][0];
							echo '<h3>Tác giả: <a href="/tac-gia/'.$product->author_id.'.html" style="margin:3px;">'.$author_name->author_name.'</a></h3>';
							?> 

							<h3>Giá: <?php echo $product->product_price ?> vnđ</h3>

							<h3>Số lượng: <button type="button" class="glyphicon glyphicon-minus btn"/></button>&nbsp;&nbsp; 1 &nbsp;&nbsp;<button type="button" class="glyphicon glyphicon-plus btn"></button></h3>

							<a href="/gio-hang.html" class="btn btn-primary btn-lg"> Mua Sách </a>
							
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
					</div>

					<div class="col-md-12">
						<h3>Giới thiệu Sách:</h3>
						<p>	<?php echo $product->product_description ?></p>
					</div>
					<?php 
					$count++;
				}
			}
			?>
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
	include "./module/related-products.php";
	?>
</div>