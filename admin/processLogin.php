<?php
	$username = $_POST['txtusername'];
	$password = $_POST['txtpassword'];
	$againpass = $_POST['txtagainpass'];
	$quyenhan = $_POST['txtquyenhan'];
	$flag = false;
	$flagsignin = true;
	$conn = mysql_connect('localhost', 'root', '')or die("Connection false");
	mysql_select_db('qlsach',$conn);

	$sql;

	if($password === $againpass){
	$sql = "insert into admin values('null','";
	$sql .= $username."','".$password."','".$quyenhan."')";
	if($username ==="" || $password === "" || $quyenhan ===""){
		$flagsignin = false;
		}
	if($flagsignin == true) $result = mysql_query($sql);	
	}
	else{
		$flag = true;
		$str = "<p style=\"background-color:#e4b7b7\"> Password không khớp yêu cầu nhập lại !</p>";
	}
	if($flagsignin == true){
		header('Location: templateAdmin.php');
	}

?>