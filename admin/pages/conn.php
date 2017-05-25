<?php
$conn = mysql_connect('localhost', 'root','') or die("khong ket noi duoc");
	mysql_select_db('bookstore',$conn);
	mysql_query("SET NAMES 'utf8'");
?>