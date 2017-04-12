<div class="container" style="padding: 20px;">
	<div class="row">
		<div class="col-md-9 col-md-offset-3">
			<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="https://www.fahasa.com/media/magentothem/banner7/HTBHNew-870.jpg">
					</div>
					<div class="item">
						<img src="https://www.fahasa.com/media/magentothem/banner7/HTBHNew-870.jpg">
					</div>
					<div class="item">
						<img src="https://www.fahasa.com/media/magentothem/banner7/HTBHNew-870.jpg">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>

	<?php 
	$title = "Hot Product";
	include "./module/gird-type-1.php";

	$title = "New Product";
	include "./module/gird-type-2.php";

	$title = "Best Sale Product";
	include "./module/gird-type-1.php";
	?>
</div>  	