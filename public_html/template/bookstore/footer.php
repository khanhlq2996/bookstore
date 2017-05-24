<?php 
$c_bookstore = new C_bookstore();
$options = $c_bookstore->options();
?>
<div class="container" style="border-top: 1px solid #cccccc;">
	<div class="row" style="padding: 20px;">
		<div class="col-md-12 text-center">
			<form class="form-inline">		
				<div class="input-group">
					<input style="border-radius: 0px;" type="email" class="form-control" size="50" placeholder="Email Address" required>
					<div class="input-group-btn">
						<button type="button" class="btn btn-success" style="border-radius: 0px;">Subscribe</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
	<div class="row" style="border-top: 1px solid #cccccc; padding: 10px;">
		<div class="col-md-7">
			<h3>Liên hệ:</h3>
			
			<a><span class="glyphicon glyphicon-map-marker"></span><?=$options->site_address?></a><br>
			<a href="tel:<?=$options->site_phone?>"><span class="glyphicon glyphicon-phone"></span>Phone: <?=$options->site_phone?></a><br>

			<a href="mailto:<?=$options->site_email?>"><span class="glyphicon glyphicon-envelope"></span>Email: <?=$options->site_email?></a> 

		</div>
		<div class="col-md-5">
			<h3>Bản đồ</h3>
			<?= $options->site_maps_url ?>

		</div>
	</div>

</div>

<div class="container-fluid" style="height: 40px; background-color: #4CAF50;">
</div>