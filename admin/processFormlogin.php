<?php
	$username = $_GET['txtusername'];
	$password = $_GET['txtpassword'];
	$conn = mysql_connect('localhost','root','');
	mysql_select_db('qlsach',$conn);
	$sql = "select*from admin where username='".$username."'";
	$result = mysql_query($sql);
	$num = mysql_num_rows($result);
	if($num == 0){
		header('Location: formLogin.php');
	}
	else{
		header('Location: templateAdmin.php');
	}
	mysql_close();
?>