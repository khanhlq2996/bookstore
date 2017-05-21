<?php 
$c_bookstore = new C_bookstore();
$author = $c_bookstore->author($_GET['id'])['author'][0];
?>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php 
			_side_bar();
			?>
		</div>
		<div class="col-md-9"  style="margin-top: 50px;">
			<div class="row">
				<div class="col-md-4">
					<img src="<?php if($author->avata == null){echo '/public_html/template/bookstore/images/333.jpg';} else echo $author->avata?>" alt="Lights" style="width:100%">
				</div>
				<div class="col-md-8">
					<h3><?= $author->author_name?></h3>
					<h3>Ngày sinh: <?= $author->author_birthday ?></h3>
					<h3>Quê quán: <?= $author->author_native_land ?></h3>
				</div>
			</div>

			<div class="col-md-12">
				<h3>Giới thiệu về tác giả:</h3>
				<p><?= $author->author_description ?></p>

			</div>


		</div>
	</div>

	<?php 
	include "./module/related-products.php";
	?>
</div>