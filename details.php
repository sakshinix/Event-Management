

<html>

<head><title>Sign Up</title>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$("#rform").validate({
		rules:{
			upimg:'required',
			c_name:'required',
			first_name:'required',
			middle_name:'required',
			last_name:'required',
			
			contact1:{
			  required:true,
             minlength:10,
             number:true			
			},
			contact2:{
			  required:true,
             minlength:10,
             number:true			
			},
			address_line1:"required",
			address_line2:"required",
			city:"required",
			state:"required",
			pincode:"required",
			workmail:{
				required:true,
				email:true
				},
				pass:"required",
				event_type:"required",
			   employee:"required",
			   price:"required",
			   event_duration:"required",
			   status:"required"
		},
		
		messages:{
			upimg:"Please upload your templet",
			c_name:'please enter company name',
			first_name:"Please enter full Name",
			middle_name:"Please enter full Name",
			last_name:"Please enter full Name",
			
			contact1:{
			required:"Please enter contact",
            minlength:"10 digit only",
            number:"contact should be numbers"		
			},
			
			contact2:{
			required:"Please enter contact",
            minlength:"10 digit only",
            number:"contact should be numbers"		
			},
			
			
		address_line1:"Please enter your address",
			address_line2:"Please enter your address",
			
			
			city:"Please enter  city",
			state:"select State",
			pincode:"Please enter pincode",
			workmail:{
				required:"Please enter email",
				email:"Please enter valid email"
				
			},
			pass:"please enter password",
			event_type:"Please enter event Type",
			  employee:"Enter Employee",
			   price:"Enter Payment",
			    event_duration:"Enter Event Duration",
			   status:"Enter Status"
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
<center><form id ="rform" action="d_save.php" method="POST"  enctype="multipart/form-data">
<center></br><img src="logo.jpeg" width="150px" height="150px" style="border-radius:50%;" ></center></br></br>

<h1> <b> My Event Managers </b> </h1>
<p> <i>  Please Enter the Details </i> </p>
<h4>Upload your templet</h4>
<input type= "file" name ="upimg" id ="upimg" value="" ></br></br>
<h4>Company Name</h4>
<input type= "text" name ="c_name" id ="c_name" value="" placeholder= "Company Name" required autocomplete="off"></br></br>
<h4>Please Enter Name</h4>
<input type= "text" name ="first_name" id ="first_name" value="" placeholder= "Firstname"  required autocomplete="off"></br></br>

<input type= "text" name ="middle_name" id ="middle_name" value="" placeholder= "Middlename"  required autocomplete="off"></br></br>

<input type= "text" name ="last_name" id ="last_name" value="" placeholder= "Lastname"  required autocomplete="off"></br></br>
<h4>Contact Details</h4>
<input type= "text" name= "contact1" id="contact1" value="" placeholder="Enter Contact Number:1" maxlength="10" required autocomplete="off"> </br></br>
<h4>Contact Details</h4>
<input type= "text" name= "contact2" id="contact2" value="" placeholder="Enter Contact Number:2" maxlength="10" required autocomplete="off"> </br></br>
<h4>Address line:1</h4>
<input type= "text" name= "address_line1" id="address_line1" value="" placeholder="Enter address line:1" required autocomplete="off"></br></br>
<h4>Address line:2</h4>
<input type= "text" name= "address_line2" id="address_line2" value="" placeholder="Enter address line:2" required autocomplete="off"></br></br>
<h4>Enter City</h4>
<input type= "text" name= "city" id="city" value="" placeholder="Enter city" required autocomplete="off"></br></br>
<h4>STATE/Union Territory</h4>
<select id="state" name="state">
<option value="">Select</option>
<option value="Maharashtra">Maharashtra</option>
<option value="karnataka">karnataka</option>
<option value="kerala">kerala</option>
<option value="Tamilnadu">Tamilnadu</option>
<option value="Tiruvantampuram">Tiruvantampuram</option>
<option value="Telangana">Telangana</option>
<option value="Andhra_Pradesh">Andhra Pradesh</option>
<option value="Goa">Goa</option>
<option value="Gujrat">Gujrat</option>
<option value="Chattishgarh">Chattisgarh</option>
<option value="Assam">Assam</option>
<option value="Arunachal_pradesh">Arunachal Pradesh</option>
<option value="Madhya_Pradesh">Madhya Pradesh</option>
<option value="Uttar_Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="West_Bengal">West Bengal</option>
<option value="Bihar">Bihar</option>
<option value="Punjab">Punjab</option>
<option value="Hariyana">Hariyana</option>
<option value="Sikkim">Sikkim</option>
<option value="Meghalay">Meghalay</option>
<option value="Odisha">Odisha</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Manipur">Manipur</option>
<option value="Himachal_Pradesh">Himachal Pardesh</option>
<option value="Jarkhand">Jarkhand</option>
<option value="Delhi">Delhi</option>
<option value="Andaman&Nicobar">Andaman and Nicobar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Dadra_&_Nagar_Haveli"> Dadra and Nagar Haveli</option>
<option value="Daman_&_Diu">Daman and Diu</option>
<option value="Jammu_&_Kashmir">Jammu and Kashmir</option>
<option value="Ladakh">Ladakh</option>
<option value="Lakshadweep"> Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
</select></br>
<h4>Enter Pincode</h4>
<input type= "text" name= "pincode" id="pincode" value="" placeholder="Pincode"  required autocomplete="off"></br></br>
<h4>Enter WorkMail</h4>
<input type= "text" name= "workmail" id="workmail" value="" placeholder="Enter Mail id" required autocomplete="off"> </br></br>
<h4>Enter Password</h4>
<input type= "password" name= "pass" id="pass" value="" placeholder="Enter password" required autocomplete="off"> </br></br>
<h4>Event type</h4>
<select id="event_type" name="event_type">
<option value="">Please Select Event type</option>
<option value="ALL">ALL</option>
<option value="Wedding">Wedding</option>
<option value="Birthday">Birthday</option>
<option value="Engagement">Engagement</option>
<option value="Baby_Shower">Baby Shower</option>
<option value="Holi">Holi</option>
<option value="Dandiya">Dandiya</option>
<option value="Freshers_fest">Freshers fest</option>
<option value="Music_festival">Music festival</option>
<option value="Commercial_party">Commercial party</option>
<option value="Dance_Events">Dance Events</option>
<option value="Concert">Concert</option>
<option value="Independance_day">Independance day</option>
<option value="Republic_day">Republic day</option>
<option value="College_Cultural_Events">College Cultural Events</option>
<option value="Get-togther">Get-togther</option>
<option value="Bussiness_Parties">Bussiness Parties</option>
<option value="Reception">Reception</option>
<option value="Theme_parties">Theme parties</option>
<option value="Awards_function">Awards function</option>
<option value="Product_launching">Product launching</option>
<option value="Inauguration">Inauguration</option>
</select></br></br>


<h4>Employee</h4>
<input type= "text" name= "employee" id="employee" value=""  placeholder="Enter no of employee" required autocomplete="off"></br></br>

<h4>price</h4>                                                          
<input type= "number" name="price" id="price" value="" placeholder="price" required autocomplete="off" > </br></br>  

<h4>Time duration</h4>
<input type= "time" name= "event_duration" id="event_duration" value="" placeholder="Event duration" required autocomplete="off"> </br></br>

<h4>status</h4>  

<select id="status" name="status">
<option value="">Please Select Status</option>
<option value="Open">Open</option>
<option value="Close">Close</option>
</select> </br></br>
   
<button type ="submit">SignUp</button>

<button type = "reset">Reset</button></br></br>
<a href="esignin.php"> <h4>Already have an account?</h4></a></br></br>

</form></center>

</body>
</html>

