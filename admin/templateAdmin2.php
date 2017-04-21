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
		height: auto;

		}
		


	</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
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
			<li><a href="templateAdmin3.php"> Quản lí thành viên</a></li>
			<li><a href="templateAdmin2.php"> Quản lí sách</a></li>
			<li><a href="#"> Quản lí Đơn hàng</a></li>
			<li><a href="#"> Quản lí giao dịch</a></li>
		</ul>

	</div>

	<div class="vien" id="content">
		<div id="box21">
		<h1><strong>Form thêm Sách</strong></h1>
		<form method="post" action="processAddbooks.php">
   		 <div class="form-group">
      		<label for="email">Tên Sách:</label>
     		 <input type="text" name="txttensach" class="form-control" id="email" placeholder="Enter tên sách">
    	</div>
    	<div class="form-group">
      		<label for="pwd">Loại sách:</label>
      		<input type="text" name="txtloaisach" class="form-control" id="pwd" placeholder="Enter loại sách">
    	</div>
    	<div class="form-group">
      		<label for="pwd">Tác giả:</label>
      		<input type="text" name="txttacgia" class="form-control" id="pwd" placeholder="Enter Tác giả">
    	</div>
    	<div class="form-group">
      		<label for="pwd">Nhà xuất bản:</label>
      		<input type="text" name="txtnxb" class="form-control" id="pwd" placeholder="Enter nhà xuất bản">
    	</div>
    	<div class="form-group">
      		<label for="pwd">Giá Sách:</label>
      		<input type="text" name="txtgiasach" class="form-control" id="pwd" placeholder="Enter Giá sách">
    	</div>
    	<div class="form-group">
      	<label for="sel1">Giảm giá: </label>
     	 	<select class="form-control" name="txtgiamgia" id="sel1">
      	  	<option>5</option>
       	 	<option>10</option>
       	 	<option>20</option>
      		</select>
    	</div>
    	<div class="form-group">
      		<label for="pwd">Liên kết ảnh:</label>
      		<input type="text" name="txtlka" class="form-control" id="pwd" placeholder="Enter liên kết ảnh">
    	</div>
    	<div class="form-group">
      		<label for="pwd">Ngày thêm sách:</label>
      		<input type="date" name="txtcreated" min="1970-01-01" min="2020-12-31"  class="form-control" id="pwd" placeholder="Enter ngày thêm">
    	</div>
    	<div class="form-group">
  			<label for="comment">Mô tả:</label>
  			<textarea class="form-control" name="txtmota" rows="5" id="comment"></textarea>
		</div>
    		<button type="submit" class="btn btn-default">Thêm Sách</button>
  		</form>

		</div>
		<div id="box22">
			

		</div>
		<div id="box23"></div>

	</div>


</div>
</body>
</html>
