<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>

	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="./js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
	// Top 
	include "./top.php";

	// Header
	include "./header.php";

	// Content
	if (!empty($_GET["v"])){
		if($_GET["v"] === "product"){
			include "./content-singer.php";
		} elseif ($_GET["v"] === "category") {
			include "./content-category.php";
		} elseif ($_GET["v"] === "page") {
			include "./content-page.php";
		} elseif ($_GET["v"] === "author") {
			include "./content-author.php";
		}
	} else {
		include "./content-home.php";
	}
	

	// Footer
	include "./footer.php";
	?>
</body>
</html>