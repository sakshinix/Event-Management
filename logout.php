<?php
session_start();

if(isset($_SESSION['login_user'])){
	
	unset($_SESSION['login_user']);
	session_destroy();
	if(!isset($_SESSION['login_user']))
	{
		header("location:signin.php");
	}
	
}

?>