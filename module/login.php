<ul class="nav nav-tabs" style="margin-top: 50px;">
	<li class="active"><a data-toggle="tab" href="#login">Login</a></li>
	<li><a data-toggle="tab" href="#register">Register</a></li>
</ul>

<div class="tab-content">
	<div id="login" class="tab-pane fade in active">
		<form>
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd">
			</div>
			<div class="checkbox">
				<label><input type="checkbox"> Remember me</label>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	<div id="register" class="tab-pane fade">
		<form>			
			<div class="form-group">
				<label for="user">User name:</label>
				<input type="user" class="form-control" id="user">
			</div>
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd">
			</div>
			<div class="form-group">
				<label for="repwd">RePassword:</label>
				<input type="password" class="form-control" id="pwd">
			</div>
			<div class="checkbox">

				<label><input type="checkbox"> Remember me</label>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</div>