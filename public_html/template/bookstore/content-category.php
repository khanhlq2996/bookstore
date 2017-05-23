<?php 
if (!isset($_GET["id"])) {
	header('Location: ../404.php');
} else {

	$c_bookstore = new C_bookstore();
	$category = $c_bookstore->category($_GET["id"])['category'][0];	
	$curent_page = isset($_GET['page']) ? $_GET['page'] : 1;
	$getInfoPage = $c_bookstore->infoPage($_GET["id"],$curent_page);
	$limit = $getInfoPage['limit'];
	$start = $getInfoPage['start'];
	$total_page = $getInfoPage['total_page'];
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php 
				_side_bar();
				?>
			</div>
			<div class="col-md-9">
				<!-- Title Category -->
				<h1><?= $category->category_name?></h1> 
				<div class="row">
					<div class="col-md-3">
						<img src="<?php if($category->category_avata == null){echo '/public_html/template/bookstore/images/image-placeholder-400x300.jpg';} else echo $category->category_avata?>" style="width: 100%;">
					</div>
					<div class="col-md-9">
						<h4><?= $category->category_description?></h4>
					</div>
				</div>
				<br><br>
				
				<div class="text-right">
					<ul class="pagination">
						
						<?php 
						if($curent_page > 1 && $total_page > 1){
							echo '<li><a href="/chuyen-muc/'. $category->slug .'-'. $category->category_id.'/trang-'.($curent_page-1).'.html">Prev</a></li>';
						}

						for ($i=1; $i <=$total_page ; $i++) { 
							if($i == $curent_page){
								echo "<li><a style='background-color: #4CAF50; color: #ffffff;'>".$i."</a></li>";
							} else {
								echo '<li><a href="/chuyen-muc/'. $category->slug .'-'. $category->category_id.'/trang-'.$i.'.html">'.$i.'</a></li>';
							}
						}

						if($curent_page < $total_page && $total_page > 1){
							echo '<li><a href="/chuyen-muc/'. $category->slug .'-'. $category->category_id.'/trang-'.($curent_page+1).'.html">Next</a></li>';
						}
						?>
					</ul>
				</div>
				<div class="row">
					<?php
					$products = $c_bookstore->products($category->category_id, $start, $limit)['products'];
					if(count($products) < 1){
						echo "Không có sản phẩm nào trong Chuyên mục này";
					}else {
						foreach ($products as $value) {
							?>
							<div class="col-md-3">
								<div class="thumbnail2">
									<a href="/san-pham/<?= $value->slug.'-'.$value->product_id ?>.html">
										<img src="<?php if($value->product_avata == null) {echo "/public_html/template/bookstore/images/product.jpg";} else echo $value->product_avata; ?>" alt="Lights" style="width:100%;">
									</a>


									<div class="caption text-center">
										<p><b><?= $value->product_name ?></b></p>
										<p><b><?= $value->product_price?> VNĐ</b></p>
									</div>
									<div class="text-center">
										<a href="/gio-hang.html" class="btn btn-primary"> Mua Sách </a>
									</div>
								</div>

							</div>
							<?php
						}
					}
					?>	
				</div>
				
				<div class="text-right">
					<ul class="pagination">
						
						<?php 
						if($curent_page > 1 && $total_page > 1){
							echo '<li><a href="/chuyen-muc/'. $category->slug .'-'. $category->category_id.'/trang-'.($curent_page-1).'.html">Prev</a></li>';
						}

						for ($i=1; $i <=$total_page ; $i++) { 
							if($i == $curent_page){
								echo "<li><a style='background-color: #4CAF50; color: #ffffff;'>".$i."</a></li>";
							} else {
								echo '<li><a href="/chuyen-muc/'. $category->slug .'-'. $category->category_id.'/trang-'.$i.'.html">'.$i.'</a></li>';
							}
						}

						if($curent_page < $total_page && $total_page > 1){
							echo '<li><a href="/chuyen-muc/'. $category->slug .'-'. $category->category_id.'/trang-'.($curent_page+1).'.html">Next</a></li>';
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php 
}
?>