<div class="row" style="padding-left: 20px; height: 400px;">
	<div class="col-md-9 col-md-offset-3">
		<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
			<!-- Indicators -->
			<?php 	
			$c_bookstore = new C_bookstore();
			$noidung = $c_bookstore->slide();
			$slide = $noidung['slide'][0];
			$data = explode(',',$slide->slide_list_img);
			?>
			<ol class="carousel-indicators">
				<?php 
				for($i = 0; $i < sizeof($data); $i++){
					?>
					<li data-target="#myCarousel" data-slide-to=<?php echo '"'.$i.'"'; if($i == 0) echo ' class="active"'; ?> > </li>
					<?php
				}
				?>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">

				<?php 
				for ($i=0; $i < sizeof($data); $i++) { 
					?>

					<div class="item <?php if($i == 0) echo "active"; ?>">
						<img src="/public_html/template/bookstore<?php echo $data[$i]; ?>">
					</div>

					<?php
				}
				?>
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