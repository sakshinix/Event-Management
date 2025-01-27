<?php
session_start();
if(!isset($_SESSION['login_user']))
{
	header("Location:esignin.php");

}
include('config.php');
$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select* from details where workmail='$user_check'");
$row=mysql_fetch_array($ses_sql);
 //echo"WELCOME".$login_session=$row['u_name'];
?>