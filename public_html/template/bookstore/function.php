<?php 

function _top(){
	include "./top.php";
}

function _header(){
	include "./header.php";
}

function _footer(){
	include "./footer.php";
}

function _slide_home(){
	include "./module/slide-home.php";
}

function _girf_1($title){
	include "./module/gird-type-1.php";
}

function _girf_2($title){
	include "./module/gird-type-2.php";
}

function _side_bar(){
	include "./module/side-bar.php";
}

function _nav(){
	include "./nav.php";
}

function _connect(){
	include_once("config.php");
}
?>
