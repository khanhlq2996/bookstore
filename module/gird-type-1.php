<div style="border-top: 1px solid #cccccc; margin-top: 20px;">
	<h2><?php	
		echo $title;
		?>
	</h2>
	<div class="row">

		<div class="col-md-4">
			<?php 
			$col = "";
			include "./module/product.php";
			?>	
		</div>
		
		<div class="col-md-8">
			<?php 
			$col = "col-md-3";
			for($i = 0; $i < 8; $i++){
				include "./module/product.php";
			}
			?>	
		</div>
	</div>
</div>