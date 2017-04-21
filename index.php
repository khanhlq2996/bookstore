<?php 
include "./function.php";
include "./config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>

	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/custom-style.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="./js/bootstrap.min.js"></script>
</head>
<body  onload="<?php if($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php') echo 'myFunction()'; ?>">
	<?php 
	// Call to top.php
	_top();

	// Call to header.php
	_header();

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
	_footer();
	?>
</body>
</html>