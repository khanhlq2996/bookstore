<div class="row">
	<div class="col-md-8 col-md-offset-2">		
		<?php 
		if(!empty($_GET["id"])){
			if($_GET["id"] == "1"){
				include "./module/contact.php";
			} elseif ($_GET["id"] == "2"){
				include "./module/login.php";
			} elseif ($_GET["id"] == "3"){
				include "./module/cart.php";
			} elseif ($_GET["id"] == "4"){
				include "./module/checkout.php";
			} elseif ($_GET["id"] == "5"){
				include "./module/my-account.php";
			}
		}
		?>
	</div>
</div>
