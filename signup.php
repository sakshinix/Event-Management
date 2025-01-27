<html>
<head><title>Sign Up</title>
<!--<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$("#uform").validate({
		rules:{
			upimg:'required',
			name:'required',
			email:{
				required:true,
				email:true
				},
			   pass:'required',
			    cont:{
			  required:true,
             minlength:10,
             number:true			
			},
			add:'required'
			},
		messages:{
			upimg:'Please upload image',
			name:'Please enter full Name',
			email:{
				required:'Please enter email',
				email:'Please enter valid email'
				
			},
			pass:'Please enter password',
			cont:{
			required:'Please enter contact',
            minlength:'10 digit only',
            number:'contact should be numbers'		
			},
			
			add:'Please enter your address'
			
			},
		submitHandler:function(form){
			alert("Data is correct!");
			form.submit();
			
		}
		
	
	});
});
function myfun(){
	var x=document.getElementById("pass");
	x.type=x.type==='password'?'text':'password';
	
}

</script>-->

</head>
<body background="back1.png" style="background-repeat:no-repeat;background-size:100% 100%;">

<center><form id="uform" action="insert.php" method="post"  enctype="multipart/form-data">
<center></br><img src="logo.jpeg" width="150px" height="150px" style="border-radius:50%;" ></center></br></br>
<h1><b>MY EVENT MANAGER</b></h1>
			                                               <input type="file" name="upimg" required=""></br></br>
															<input type="text" name="name" id="name" placeholder="Username" required=""  autocomplete="off"></br></br>
																<input type="text" name="cont" id="cont" placeholder="contact" maxlength="10" required=""  autocomplete="off"></br></br>
																<input type="text" name="email" id="email" placeholder="email" required=""  autocomplete="off"></br></br>
																<input type="password" name="pass" id="pass" placeholder=" Password" required=""  autocomplete="off"></br></br>
																<input type="checkbox" id="togglePassword" onclick="myfun()" >Show Password</br></br>
							                                   <input type="text" name="add" placeholder="Address" required=""  autocomplete="off"></br></br>
															
																<button type="submit" value="SIGN Up">SIGN Up</button></br></br>
																<h4><a href="signin.php">Already have an account?</a><h4></br></br>
															
														</form></center>
</body>
</html>