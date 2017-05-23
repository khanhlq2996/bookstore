<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>

	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<!-- like button -->
		<div style='padding:10px 8px; position: fixed; top: 50%;  margin-top: -150px; border-radius: 0;border: 0px solid #d9d9d9;'>
			
			<!-- like button -->
			<div class="fb-like" data-href="http://bookstore.themelau.com/" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div><br>

			<!-- page plugin -->
			<div class="fb-page" data-href="https://www.facebook.com/TKLTweb-1672674682761947/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/TKLTweb-1672674682761947/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TKLTweb-1672674682761947/">TK&amp;LTweb</a></blockquote></div>
		</div>
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
		}
	} else {
		include "./content-home.php";
	}
	

	// Footer
	include "./footer.php";
	?>
</body>
</html>