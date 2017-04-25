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
	margin-left: 620px;
	}

	</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php
  	$num;
  	function selectData(){
  		include('connectsql.php');
  		$sql = "select*from thanhvien";
  		$result = mysql_query($sql);
  		$num = mysql_num_rows($result);
  		$i = 0;
  		$str = "<table  class=\"table table-condensed\"><th>IDTV</td><td>HOTEN</td><td>PASS</td><td>DIACHI</td><td>EMAIL</td><td>PHONE</td><td>CREATED</td></th>";
  		while($rows = mysql_fetch_assoc($result)){
  			$str.="<tr>";
  			foreach ($rows as $key => $row) {
  				$str.="<td>$row</td>";
  			}
  			$str.="</tr>";
  		}
  		$str.= "</table>";
  		$num = mysql_num_rows($result);
  		$str.="Số thành viên là: ";
  		$str .="<strong>$num</strong>";
  		return $str;


  		

  }

  ?>
 <?php
 	//XOa thanh vien
 	$notice = "";
 	if(isset($_REQUEST['txtacount'])){
 	include("connectsql.php");	
 		mysql_query("delete from thanhvien where HOTEN ='".$_REQUEST['txtacount']."'");
 	include('closesql.php');
 		$notice = "<div class=\"alert alert-info\">
  						<strong> DELETE SUCCESSFULLY</strong>
						</div>";
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
			<div id="box31">
			<h3 style="text-align: center"> Thống Kê tài khoản thành viên</h3>
					<?php echo selectData();?>

			<div id="box32">
				
				<label for="pwd">Xóa Acount: </label>
				<form>
					<table>
					<tr>
						<td><input type="text" name="txtacount" class="form-control" id="pwd" placeholder="Enter Acount muốn xóa" size="100px">
						</td>
						<td><button type="submit" class="btn btn-default">Xóa</button></td>
					</tr>
				</table>

				</form>

				<?php if(isset($notice)) echo $notice;?>
			</div>

			</div>

	</div>
</body>
</html>