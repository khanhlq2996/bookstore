<!DOCTYPE html>
<html>
<head>
	<title>ad-min</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<style type="text/css">
		.vien{

		}
		#sidebar img{
			float: right;
			margin-top: -20px;
			width: 170px;
			height: 60px;
		}
		#menu{
			padding-top: 150px;
		}
		#content{
		padding: 1em ;
		background-color: #f1f1f1;
		height: 1000px;

		}
		#showuser{
			display: block;
			margin-top: 80px;
			text-align: center;
			color: #ffffff;
		}
		#box2{
			margin-left: 711px;
		}
		


	</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
 <?php

 	if(isset($_SERVER['REQUEST_METHOD'])){
 		if($_SERVER['REQUEST_METHOD'] == 'POST'){
 			$username = $_POST['txtusername'];
 			$password = $_POST['txtpassword'];
 			$passagain = $_POST['txtagainpass'];
 			$quyenhan = $_POST['txtquyenhan'];
 			$notice=""; // dua ra thong bao
 			if($username ==="" || $password ==="" || $passagain ==="" || $quyenhan ===""){
 				$notice ="<div class=\"alert alert-info\">
  						<strong>Info!</strong> Please , enter fills of fields.
						</div>";
 			}
 			else{
 				if($passagain != $password){
 					$notice ="<div class=\"alert alert-info\">
  						<strong>Info!</strong> Please, Enter again PassWord.
						</div>";
 				}
 				else{
 					include("connectsql.php");
 					$sqlt = "select*from admin where username = '$username' ";
 					$result = mysql_query($sqlt);
 					if(mysql_num_rows($result) != 0){
 						$notice ="<div class=\"alert alert-info\">
  						<strong>Info!</strong> username existed please enter another username.
						</div>";
 					}
 					else{
 						$pass = md5($password);
 						$sql = "insert into admin values('null', '$username', '$pass','$quyenhan')";
 						$result = mysql_query($sql);
 					}
 					include('closesql.php');
 				}
 			}
 		}
 	}
 ?>
<?php
//udate tai khoan
 	if(isset($_REQUEST['txtquyenhan1'])){
 		if(isset($_REQUEST['txtquyenhan1'])){
 			if(isset($_REQUEST['txtoldpassword'])) $pass1 = $_REQUEST['txtoldpassword'];
 			if(isset($_REQUEST['txtnewpassword'])) $pass2 = $_REQUEST['txtnewpassword'];
 			if(isset($_REQUEST['txtquyenhan1'])) 	$quyenhan = $_REQUEST['txtquyenhan1'];
 			$notice=""; // dua ra thong bao
 			if($pass1 ==="" || $pass2 ==="" || $quyenhan ===""){
 				$notices ="<div class=\"alert alert-info\">
  						<strong>Info!</strong> Please , enter fills of fields.
						</div>";
 			}
 			else{
 				
 					include("connectsql.php");
 						if(isset($_COOKIE['username'])){
 							$username = $_COOKIE['username'];
 							$pass22 = md5($pass2);
 							$sql = "update admin set password='$pass22', quyenhan ='$quyenhan' where username = '$username'";
 							$result = mysql_query($sql);
 							include('closesql.php');
 							$notices ="<div class=\"alert alert-info\">
  									UPDATE SUCCESSFULLY !!!
									</div>";

 						}
 						
 				
 			}
 		}
 	}
 ?>
<?php
// xoa tai khoan
		if(isset($_REQUEST['txtacount'])){
			$acount = $_REQUEST['txtacount'];
			include('connectsql.php');
			$sql = "select*from admin where hoten='$acount'";
			$result = mysql_query($sql);
			if(mysql_num_rows($result) != 0){
				mysql_query("delete from admin where hoten = '$acount'");
				$notices="<div class=\"alert alert-info\">
  								DELETE SUCCESSFULLY 
									</div>";
			}
			else{
				$notices="<div class=\"alert alert-info\">
  								acount not existed 
									</div>";
			}
			include('closesql.php');

		}
?>

<?php
//signout
if(isset($_REQUEST["signout"])){
	if($_REQUEST["signout"] === "true"){
        setcookie("flag_sign_in","false");
        header('Location: formLogin.php');
}
}

?>
</head>
<body>
<div class="vien" id="container">
	<div class="vien" id="sidebar">
		<img src="image/FF.png">

	</div>
	<div class="vien" id="menu">
		<img src="image/book.png" width="145px" height="150px" style="margin-top: -170px">
		<ul>
			<li><a href="#"> Dashboard </a></li>
			<li><a href="templateAdmin.php"> Quản lí tài khoản</a></li>
			<li><a href="templateAdmin3.php"> Quản lí thành viên</a></li>
			<li><a href="templateAdmin2.php"> Quản lí sách</a></li>
			<li><a href="#"> Quản lí Đơn hàng</a></li>
			<li><a href="#"> Quản lí giao dịch</a></li>
		</ul>
		<div  id = "showuser">
		<form>
			<p><?php if(isset($_COOKIE['username'])) echo "<b> Xin Chào <br>".$_COOKIE['username']."</b>" ;?> </p>
			<input type="hidden" name="signout" value="true">
			<button type="submit" class="btn btn-primary btn-sm">Đăng xuất</button>
		</form>
		</div>

	</div>
	<div class="vien" id="content">
		<h1 style="text-align: center;">Quản lí tài khoản</h1>
		
	<div id="box1">
	<h1>Đăng kí</h1>
		<form action="templateAdmin.php" method="post">
   		 <div class="form-group">
      		<label for="email">Username:</label>
     		 <input type="text" class="form-control" id="email" name="txtusername" placeholder="Enter username">
    	</div>
    	<div class="form-group">
      		<label for="pwd">Password:</label>
      		<input type="password" class="form-control" id="pwd" name="txtpassword" placeholder="Enter password">
    	</div>
    	<div class="form-group">
      		<label for="pwd">Nhập lại password:</label>
      		<input type="password" class="form-control" id="pwd" name="txtagainpass" placeholder="Enter password">
    	</div>
    	  	<div class="form-group">
      <label for="sel1">Quyền hạn: </label>
      <select class="form-control" id="sel1" name="txtquyenhan">
        <option>1</option>
        <option>2</option>
        <option>3</option>
      </select>
    	</div>
    
    		<button type="submit" class="btn btn-default">Đăng kí</button>
  		</form>
  		<?php if(isset($notice)) echo "<i>.$notice.</i>";?>
	</div>
		<div id="box2">
		<h1>Update</h1>
			<form>
				
    			<div class="form-group">
      				<label for="pwd">Password cũ:</label>
      				<input type="password" class="form-control" name="txtoldpassword" id="pwd" placeholder="Enter password cũ">
    			</div>
    			<div class="form-group">
      				<label for="pwd">Password mới:</label>
      				<input type="password" class="form-control" id="pwd" name="txtnewpassword" placeholder="Enter password mới">
    			</div>
    			<div class="form-group">
      				<label for="sel1">Thay đổi quyền: </label>
      				<select class="form-control" id="sel1" name="txtquyenhan1">
        				<option>1</option>
        				<option>2</option>
        				<option>3</option>
      				</select>
    			</div>
    			<button type="submit" class="btn btn-default">Sửa</button>
    			
			</form>
			<form>
				<label for="pwd">Xóa Acount: </label>
				<table>
					<tr>
						<td><input type="text" name="txtacount" class="form-control" id="pwd" placeholder="Enter user name muốn xóa" size="100px">
						</td>
						<td><button type="submit" class="btn btn-default">Xóa</button></td>
					</tr>
				</table>

			</form>
			<?php if(isset($notices)) echo $notices;?>
		</div>

		<div id="box3"></div>

	</div>


</div>
</body>
</html>