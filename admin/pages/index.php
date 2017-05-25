<?php ob_start();
  session_start();
?>

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
  		margin-top: 150px;
  		margin-left: 490px;
  		width: 500px;
  		height: 400px;
  	}
  	#icon{
  		width: 500px;
  		height: 100px;
  	}
  	button{
  		margin-left: 180px;
  		margin-top: 50px;
  	}
    #login{
      width: 90%;
      height: 80%;
      margin-left: 20px;
    }
  </style>
<?php
//xu li dang nhap
  $notice="";
  include('conn.php');
  if(isset($_POST['submit'])){
    $userName = $_POST['txtusername'];
    $passWord = $_POST['txtpassword'];
    $pass = md5($passWord);
    $query = "select*from adminstrator where admin_name = '$userName' and admin_password = '$pass'";
    $result = mysql_query($query);
    $num = mysql_num_rows($result);
    if($num>0){
      setcookie('flag_sign_in', 'true');
       $row = mysql_fetch_assoc($result);
       $level = $row['admin_level'];
       $_SESSION['level'] = $level;
       $_SESSION['userName'] = $userName;
       header('Location: admin.php?v=dashboard');
       

    }
    else{

      $notice = '<div class="alert alert-danger">
                                <strong>Đăng nhập thất bại</strong>
                                </div>';
    }
  }
?>
  
<?php 
// luu tru trang thai dang nhap
  if(isset($_COOKIE['flag_sign_in'])){
    if($_COOKIE['flag_sign_in'] ==='true'){
      header('Location: admin.php?v=dashboard');
    }
  }
?>

</head>

<body>
<div id="main">
	<div id="icon">
		<img src="../uploads/images.png" width="100px" height="100px" style="margin-left: 200px">

	</div>
	<div id="login">
		<form action="" method='POST'>
      <p><?php if(isset($str)) echo $str;?></p>
   		 <div class="form-group">
      		<label for="email">Username:</label>
     		 <input type="text" class="form-control" id="email" name="txtusername" placeholder="Enter username">
    	</div>
    	<div class="form-group">
      		<label for="pwd">Password:</label>
      		<input type="password" class="form-control" id="pwd" name="txtpassword" placeholder="Enter password">
          <?=$notice;?>
      		<button type="submit"  class="btn btn-primary" name="submit">Đăng nhập</button>
    	</div>
  		</form>

	</div>

</div>
</body>
</html>