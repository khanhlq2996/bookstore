<!DOCTYPE html>
<html>
<head>
	<title>ad-min</title>
	<link rel="stylesheet" type="text/css" href="styleeee.css"/>
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
		


	</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php
  	$num;
  	function selectData(){
  		$conn=mysql_connect('localhost','root','');
  		mysql_select_db('qlsach',$conn);
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
  		$str.="So thanh vien la: ";
  		$str .=$num;
  		return $str;
  }
  ?>
</head>
<body>
<div class="vien" id="container">
	<div class="vien" id="sidebar">
		<img src="FF.png">

	</div>
	<div class="vien" id="menu">
		<img src="image/book.png" width="145px" height="150px" style="margin-top: -170px">
		<ul>
			<li><a href="#"> Dashboard </a></li>
			<li><a href="templateAdmin.php"> Quản lí tài khoản</a></li>
			<li><a href="#"> Quản lí thành viên</a></li>
			<li><a href="templateAdmin2.php"> Quản lí sách</a></li>
			<li><a href="#"> Quản lí Đơn hàng</a></li>
			<li><a href="#"> Quản lí giao dịch</a></li>
		</ul>

	</div>
	<div class="vien" id="content">
			<div id="box31">
			<h3 style="text-align: center"> Thống Kê tài khoản thành viên</h3>
					<?php echo selectData();?>

			<div id="box32">
				
				<label for="pwd">Xóa Acount: </label>
				<form action="processXoaAcount.php" method="POST">
					<table>
					<tr>
						<td><input type="text" name="txtacount" class="form-control" id="pwd" placeholder="Enter user name muốn xóa" size="100px">
						</td>
						<td><button type="submit" class="btn btn-default">Xóa</button></td>
					</tr>
				</table>

				</form>

			</div>

			</div>

	</div>
</body>
</html>