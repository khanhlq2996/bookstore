<?php 
include "./function.php";
include "../../../controller/c_bookstore.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="/public_html/template/bookstore/css/custom-style.css">
	<link rel="stylesheet" href="/public_html/template/bookstore//css/font-awesome.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body  onload="<?php if($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == 'index.php') echo 'myFunction()'; ?>" style="background-color: #f5f5f5">
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