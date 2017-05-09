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
			$product = "SELECT * FROM product WHERE (product_id = ". $_GET["id"] . ")";
			$productqr = $con->query($product);
			if(!$productqr){
				echo "Có gì đó sai sai";
				exit();
			} else {
				while ($row = $productqr->fetch_assoc()) 
				{
					?>
					<div class="row">

						<div class="col-md-5">
							<img src="<?php echo $row['product_avata'] ?>" alt="Lights" style="width:100%">
						</div>

						<div class="col-md-7">
							<h2><?php echo $row["product_name"] ?></h2>
							<?php 
							$author = $row["author_id"];
							$getAuthorName = "SELECT author_name FROM author WHERE author_id = $author";
							$result_author = $con->query($getAuthorName);
							$author_name = $result_author->fetch_assoc();
							echo '<h3>Tác giả: <a href="http://lkshop.dev/index.php?v=author&id='.$author.'" style="margin:3px;">'.$author_name["author_name"].'</a></h3>';
							?> 

							<h3>Giá: <?php echo $row["product_price"] ?> vnđ</h3>

							<h3>Số lượng: <button type="button" class="glyphicon glyphicon-minus btn"/></button>&nbsp;&nbsp; 1 &nbsp;&nbsp;<button type="button" class="glyphicon glyphicon-plus btn"></button></h3>

							<a href="index.php?v=page&id=3" class="btn btn-primary btn-lg"> Mua Sách </a>
							
							<h3>Danh mục:</h3>

							<?php 
							$categories = explode(",", $row["categories"]);
							foreach ($categories as $value) {
								# code...
								$getCategoryName = "SELECT category_name FROM category WHERE category_id = $value";
								$result_cate = $con->query($getCategoryName);
								$category_name = $result_cate->fetch_assoc();
								echo '<a href="http://lkshop.dev/index.php?v=category&id='.$value.'"class="btn btn-success btn-sm" style="margin:3px;">'.$category_name["category_name"].'</a>';
							}
							?> 
							
						</div>
					</div>

					<div class="col-md-12">
						<h3>Giới thiệu Sách:</h3>
						<p>	<?php echo $row["product_description"] ?></p>
					</div>
					<?php 
				}
			}
			?>

		</div>
	</div>
	<ul class="pager">
		<li><a href="#">Previous</a></li>
		<li><a href="#">Next</a></li>
	</ul>

	<?php 
	include "./module/related-products.php";
	?>
</div>