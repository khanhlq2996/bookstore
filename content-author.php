<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php 
			include "./module/side-bar.php";
			?>
		</div>
		<div class="col-md-9"  style="margin-top: 50px;">
			<div class="row">
				<div class="col-md-4">
					<img src="http://saigongiaitri.net/uploads/news/2014_01/333.jpg" alt="Lights" style="width:100%">
				</div>
				<div class="col-md-8">
					<h3>Phạm Thị Kim Hoa</h3>
					<h3>Ngày sinh: dd-mm-yyyy</h3>
					<h3>Quê quán: abc</h3>
					....
				</div>
			</div>

			<div class="col-md-12">
				<h3>Giới thiệu về tác giả:</h3>
				<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Phong cách theo đuổi</a></li>
					<li><a data-toggle="tab" href="#menu1">Tác phẩm tiêu biểu</a></li>
					<li><a data-toggle="tab" href="#menu2">Danh hiệu đạt được</a></li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<h3>HOME</h3>
						<p>Some content.</p>
					</div>
					<div id="menu1" class="tab-pane fade">
						<h3>Menu 1</h3>
						<p>Some content in menu 1.</p>
					</div>
					<div id="menu2" class="tab-pane fade">
						<h3>Menu 2</h3>
						<p>Some content in menu 2.</p>
					</div>
				</div>
				Try it Yourself »

			</div>


		</div>
	</div>
	<ul class="pager">
		<li><a href="#">Previous</a></li>
		<li><a href="#">Next</a></li>
	</ul>

	<?php 
	include "./module/related-products.php";
	?>
</div>