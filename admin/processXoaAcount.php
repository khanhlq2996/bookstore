<?php
	$username = $_POST['txtacount'];
	$conn = mysql_connect('localhost','root','');
	mysql_select_db('qlsach',$conn);
	mysql_query("delete from thanhvien where HOTEN ='".$username."'");
	mysql_close();
	header('Location: templateAdmin3.php');
?>