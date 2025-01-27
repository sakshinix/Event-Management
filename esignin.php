<?php
//error_reporting(E_ALL);
session_start();
include("config.php");
if(isset($_SESSION['login_user']))
{
header("location:ehome.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{

$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 
$password=md5($mypassword); // Encrypted Password
$sql="SELECT id FROM details WHERE workmail='$myusername' and user_pass='$password'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
//$active=$row['active'];
$count=mysql_num_rows($result);

if($count==1)
{
$_SESSION['login_user']=$myusername;

header("location:ehome.php");
}
else 
{
echo"<h3>Your Login Name or Password is invalid</h3>";

}
}
?>

<html>

<head><title>Sign IN</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$("#lform").validate({
		rules:{
			username:{
				required:true,
				email:true
				},
			   password:'required'
		},
		messages:{
			
			username:{
				required:'Please enter email',
				email:'Please enter valid email'
				
			},
			password:'Please enter password'
			
			
			},
		submitHandler:function(form){
			alert("Data is correct!");
			form.submit();
			
		}
		
	
	});
});
</script>
<link rel="stylesheet" href="style1.css">
</head>
<body background="back1.png" style="background-repeat:no-repeat;background-size:100% 100%;">

<center><form id="lform" action="" method="post">
<center></br></br><img src="logo.jpeg" width="150px" height="150px" style="border-radius:50%;" ></center></br></br>
															<input type="text" name="username" id="username" placeholder="WorkMail" required="" required autocomplete="off"></br></br>
															
															<input type="password" name="password" id="password" placeholder="Password" required="" required autocomplete="off"></br></br>
															<div class="tp">
																<button type="submit" value="SIGN IN">SIGN IN</button>
															</div></br></br>
															<p><a href="details.php"> <h4>Don't have an account?</h4></a></p>
													        <p><a href="forgot.php"><h4> Forgot Password</h4></a></p></br></br>
														</form></center>

</body>
</html>