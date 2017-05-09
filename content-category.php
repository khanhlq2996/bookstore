<?php 
if (!isset($_GET["id"])) {
	header('Location: ../404.php');
} else {

	?>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php 
				_side_bar();
				?>
			</div>
			<div class="col-md-9">
				<?php 
				$category_id = $_GET["id"];
				$sql = "SELECT * FROM category WHERE category_id = $category_id";
				$result = $con->query($sql);
				$data = $result->fetch_assoc();
				?>
				<!-- Title Category -->
				<h1><?= $data["category_name"]?></h1> 
				<div class="row">
					<div class="col-md-3">
						<img src="<?= $data["category_avata"]?>" style="width: 100%;">
					</div>
					<div class="col-md-9">
						<p><?= $data["category_description"]?></p>
					</div>
				</div>
				<br><br>
				<div class="row">
					<?php
					$sql = "SELECT * FROM product WHERE find_in_set($category_id, categories)";
					$result = $con -> query($sql);
					if($result->num_rows < 1){
						echo "Không có sản phẩm nào trong Chuyên mục này";
					}else {
						while ($row = $result->fetch_assoc()) {
							?>
							<div class="col-md-3">
								<div class="thumbnail2">
									<a href="index.php?v=product&id=<?= $row["product_id"] ?>">
										<img src="<?php if($row["product_avata"] == null) {echo "/images/product.jpg";} else echo $row["product_avata"]; ?>" alt="Lights" style="width:100%;">
									</a>


									<div class="caption text-center">
										<p><b><?= $row["product_name"] ?></b></p>
										<p><b><?= $row["product_price"]?> VNĐ</b></p>
									</div>
									<div class="text-center">
										<a href="index.php?v=page&id=4" class="btn btn-primary"> Mua Sách </a>
									</div>
								</div>

							</div>
							<?php
						}
					}
		// $proinline = 4;
		// $numpro = 20;
		// include "./module/gird-type-3.php";
		// 
					?>	
				</div>

				<div class="text-right">
					<ul class="pagination">
						<li><a href="#">Prev</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">Next</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php 
}
?>