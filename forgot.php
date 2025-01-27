<?php

include "config.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
	
	$user_name=$_POST['uname'];
	$user_email=$_POST['email'];
	$user_pass=md5($_POST['pass']);
	
	    $sql="SELECT id FROM  details WHERE  workmail='$user_email' AND first_name='$user_name'";
		$result=mysql_query($sql);
		//$row=mysql_fetch_array($result);
		
		$count=mysql_num_rows($result);
		
		if($count==1)
		{
			$edit=mysql_query("UPDATE  details SET user_pass='$user_pass' WHERE  first_name='$user_name' AND workmail='$user_email'") OR die(mysql_error());
	     //echo $edit;
	     if($edit == true)
	    {
	 	      echo "<h3>update</h3>";
	    }
		
		else{
			echo "<h3>User name or email is invalid </h3>";
		}
		
	

}
else
{
	echo "<h3>User name or email is invalid</h3> ";
}
}


?>
<html>
<head><title>Forgot Password</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$("#uform").validate({
		rules:{
			uname:'required',
			email:{
				required:true,
				email:true
				},
			   password:'required'
			    
			},
		messages:{
			uname:'Please enter full Name',
			email:{
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
function myfun(){
	var x=document.getElementById("password");
	x.type=x.type==='password'?'text':'password';
	
}

</script>
<link rel="stylesheet" href="style1.css">
</head>
<body background="back1.png" style="background-repeat:no-repeat;background-size:100% 100%;">

<center>
<form id="uform" action="" method="POST">
<center><img src="logo.jpeg" width="150px" height="150px" style="border-radius:50%;" ></center>
       <h2>Forgot password</h2>
	 <input type="text" name="uname" id="uname" value="" placeholder="First Name"  required autocomplete="off"></br></br>
	 
	 <input type="text" name="email" id="email" value="" placeholder="Workmail"  required autocomplete="off"></br></br>
	 
     <input type="password" name="pass" id="password" value="" placeholder="New password" required  autocomplete="off"></br></br>
	 <input type="checkbox" id="togglePassword" onclick="myfun()" > Show Password</br></br>
	 <button  type="submit">Submit</button>  <button type="reset">Reset</button>
	<button><a href="esignin.php">Back</a></button></br></br>
	</form></center>
</body>
</html>