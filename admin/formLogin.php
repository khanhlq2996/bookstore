<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body{
  		background-color: #dcd3d3;
  	}
  	#main{
  		background-color: #ffffff;
  		margin-top: 100px;
  		margin-left: 360px;
  		width: 500px;
  		height: 400px;
  	}
  	#icon{
  		width: 500px;
  		height: 100px;
  	}
  	button{
  		margin-left: 200px;
  		margin-top: 70px;
  	}
  </style>
  
</head>

<body>
<div id="main">
	<div id="icon">
		<img src="image/images.png" width="100px" height="100px" style="margin-left: 200px">

	</div>
	<div id="login">
		<form action="processFormlogin.php" method="get">
   		 <div class="form-group">
      		<label for="email">Username:</label>
     		 <input type="text" class="form-control" id="email" name="txtusername" placeholder="Enter username">
    	</div>
    	<div class="form-group">
      		<label for="pwd">Password:</label>
      		<input type="password" class="form-control" id="pwd" name="txtpassword" placeholder="Enter password">
      		
      		<button type="submit"  class="btn btn-primary">Đăng nhập</button>
    	</div>
  		</form>

	</div>

</div>
</body>
</html>