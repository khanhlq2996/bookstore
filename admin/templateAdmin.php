<?php 
	include "function.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ad-min</title>
	<link rel="stylesheet" type="text/css" href="styleeee.css"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="vien" id="container">
		<?php 
			top();
			menu();
		 ?>

		<div class="vien" id="content">
			<?php account_manager(); ?>
		</div>


	</div>
</body>
</html>