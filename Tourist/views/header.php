<?php 
	session_start();
	if(!isset($_COOKIE['status'])){
		header('location: login.php');
	}
?>
<style>	body  {
 
 background-image: url("22.jpg");
 width: 100%;
}</style>