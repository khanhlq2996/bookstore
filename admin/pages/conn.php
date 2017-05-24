<?php
$conn = mysql_connect('localhost', 'root','');
	mysql_select_db('bookstore',$conn);
	mysql_query("SET NAMES 'utf8'");
?>