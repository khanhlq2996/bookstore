<?php 
$c_bookstore = new C_bookstore();
$options = $c_bookstore->options();
?>
<div class="container-fluid">
	<div class="row tex-center">
		<div class="col-md-12">
			<img src="/public_html/template/bookstore/images/banner-top.jpg" width="100%">
		</div>
	</div>
</div>

<div class="container" style="border-bottom: 1px solid #cccccc; ">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav navbar-nav">
				<li><a href="mailto:<?= $options->site_email ?>">Mail: <?= $options->site_email ?></a></li>
				<li><a href="tel:<?= $options->site_phone ?>">Điện thoại: <?= $options->site_phone ?></a></li>
			</ul>
		</div>
	</div>
</div>