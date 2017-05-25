<?php
	include('conn.php');
	if(isset($_POST['submit'])){
		$siteUrl = $_POST['siteUrl'];
        $siteName = $_POST['siteName'];
        $siteDescription = $_POST['siteDescription'];
        $siteEmail = $_POST['siteEmail'];
        $sitePhone = $_POST['sitePhone'];
        $siteMapUrl = $_POST['siteMapUrl'];
        $siteAddress = $_POST['siteAddress'];
        echo "$siteUrl, $siteName, $siteDescription, $siteEmail, $sitePhone, $siteMapUrl, $siteAddress";
	}
?>