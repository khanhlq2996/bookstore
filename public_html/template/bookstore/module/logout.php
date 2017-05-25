<?php 
session_start();
unset($_SESSION["id"]);
//unset($_SESSION["cart"]);
header("Location: /");
 ?>