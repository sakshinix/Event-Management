<?php
include "lock.php";
?>

<html>
<head><title>Form</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$("#cform").validate({
		rules:{
			
			first_name:"required",
			middle_name:"required",
			last_name:"required",
			
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
				event_type:"required",
			  event_date:"required",
			  event_duration:"required",
			  org:"required"
			
		},
		
		messages:{
			
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
			
			event_type:"Please enter event Type",
			event_date:"Please enter event Date",
			 event_duration:"Enter Event Duration",
			 org:"please enter organizer name"  
	},
		submitHandler:function(form){
			alert("Data is correct!");
			form.submit();
			
		}
		
	
	});
});


</script>

<style>

.nav-item{
  background-color: #333;
  overflow: hidden;
}
.nav-link{
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.nav-link:hover{
	background-color: #ddd;
  color: black;
}
a.active{
	background-color: #04AA6D;
  color: white;
}
</style>




<link rel="stylesheet" href="style1.css">


</head>

<body background="back1.png" style="background-repeat:no-repeat;background-size:100% 100%;">
<div class="nav-item">
<img src="logo.jpeg" width="50px" height="45px"  style="border-radius:50%;margin-left:950px;border:2px solid white;" >
    <a class="nav-link " href="home.php">Home</a>
  
    <a class="nav-link" href="profile.php">Events</a>
 
    <a class="nav-link active" href="form.php">Form</a>
	
	
  
    <a class="nav-link disabled" href="logout.php">Logout</a>
</div>

</br>
<center><form id ="cform" action="insert1.php" method="POST" enctype="multipart/form-data">
</br>
<h1> <b> My Event Managers </b> </h1>
<p> <i>   Enter the Details </i> </p>

<h4> Enter First Name</h4>
<input type= "text" name ="first_name" id ="first_name" value="" placeholder= "firstname" required autocomplete="off"></br></br>
<h4> Enter Middle Name</h4>
<input type= "text" name ="middle_name" id ="middle_name" value="" placeholder= "middlename" required autocomplete="off"></br></br>
<h4> Enter Last Name</h4>
<input type= "text" name ="last_name" id ="last_name" value="" placeholder= "lastname" required autocomplete="off"></br></br>
<h4>Contact Details</h4>
<input type= "text" name= "contact1" id="contact1" value="" placeholder="Enter Contact Number:1" maxlength="10" required autocomplete="off"> </br></br>
<h4>Contact Details</h4>
<input type= "text" name= "contact2" id="contact2" value="" placeholder="Enter Contact Number:2" maxlength="10"required autocomplete="off"> </br></br>
<h4>Address line:1</h4>
<input type= "text" name= "address_line1" id="address_line1" value="" placeholder="Enter address line:1" required autocomplete="off"></br></br>
<h4>Address line:2</h4>
<input type= "text" name= "address_line2" id="address_line2" value="" placeholder="Enter address line:2" required autocomplete="off"></br></br>
<h4>Enter City</h4>
<input type= "text" name= "city" id="city" value="" placeholder="Enter city" required autocomplete="off"></br></br>
<h4>STATE</h4>
<select id="state" name="state">
<option value="">Please Select State</option>
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
</select></br></br>
<h4>Enter Pincode</h4>
<input type= "text" name= "pincode" id="pincode" value="" placeholder="Pincode" required autocomplete="off"></br></br>
<h4>Enter mail id</h4>
<input type= "text" name= "workmail" id="workmail" value="" placeholder="Enter Mail id" required autocomplete="off"> </br></br>

<h4>Event type</h4>
<select id="event_type" name="event_type">
<option value="">Please Select Event type</option>
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

<h4>Event Date</h4>
<input type= "date" name= "event_date" id="event_date" value="" placeholder="Event date" required autocomplete="off"> </br></br>

<h4>Time duration</h4>
<input type= "time" name= "event_duration" id="event_duration" value="" placeholder="Event duration" required autocomplete="off"> </br></br>

<h4>Organizer you want to book</h4>
<input type= "text" name= "org" id="org" value="" placeholder="Organizer" required autocomplete="off" ></br></br>

<input type= "hidden" name= "paid" id="paid" value="0"   >

<center><button type ="submit">Submit</button>
<button type = "reset">Reset</button></center></br></br>

</form></center>

</body>
</html>

