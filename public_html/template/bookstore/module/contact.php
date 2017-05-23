<?php 
$c_bookstore = new C_bookstore();
$options = $c_bookstore->options();
?>
<h3 class="text-center">Liên Hệ</h3>
<p class="text-center"><em>We love our fans!</em></p>
<div class="row test">
  <div class="col-md-4">
    <p><span class="glyphicon glyphicon-map-marker"></span><?=$options->site_address?></p>
    <p><span class="glyphicon glyphicon-phone"></span>Phone: <?=$options->site_phone?></p>
    <p><span class="glyphicon glyphicon-envelope"></span>Email: <?=$options->site_email?></p> 
  </div>
  <div class="col-md-8">
    <div class="row">
      <div class="col-sm-6 form-group">
        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
      </div>
      <div class="col-sm-6 form-group">
        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
      </div>
    </div>
    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
    <div class="row">
    <div class="col-md-12 form-group" style="margin-top: 10px;">
        <button class="btn pull-right" type="submit">Send</button>
      </div>
    </div> 
  </div>
</div>
