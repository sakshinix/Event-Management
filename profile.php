<?php
include "lock.php";
?>

<html>
<head><title>Profile</title>
<style>
table{
	border-style:none;
	border-spacing:10px 10px;
	position:center;
}
th:hover{
   padding:10px;	
   text-align:center;
   border-bottom:1px solid gray;
   background-color:deeppink;
 
}
td{
	 padding:10px;	
   text-align:center;
   border-bottom:1px solid gray;
}
tr:hover{
	background-color:lightgray;
}
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
</head>
<body background="back1.png" style="background-repeat:no-repeat;background-size:100% 100%;">

<div class="nav-item">
<img src="logo.jpeg" width="50px" height="45px"  style="border-radius:50%;margin-left:950px;border:2px solid white;" >
    <a class="nav-link " href="home.php">Home</a>
  
    <a class="nav-link active" href="profile.php">Events</a>
 
    <a class="nav-link" href="form.php">Form</a>
	
	<a class="nav-link disabled" href="logout.php">Logout</a>
</div>

</br></br></br>

</body>
</html>


<?php

	
     if(isset($_POST['update']))
		{
		$id=$_POST['id'];
		
	  $fname=$_POST['fname'];
	  $mname=$_POST['mname'];
	  $lname=$_POST['lname'];
	  $contact1=$_POST['cont1'];
	  $contact2=$_POST['cont2'];
	  $line1=$_POST['line1'];
	  $line2=$_POST['line2'];
	  $city=$_POST['city'];
	  $state=$_POST['state'];
	  $pin=$_POST['pin'];
	  $mail=$_POST['mail'];
	  $evty=$_POST['evty'];
	  $evt=$_POST['evt'];
	  $time=$_POST['time'];
	  $org=$_POST['org'];
	  
		
		$edit="UPDATE form SET first_name='$fname',middle_name='$mname',last_name='$lname',contact1='$contact1',contact2='$contact2',address_line1='$line1',address_line2='$line2',city='$city',state='$state',pincode='$pin',event_type='$evty',event_date='$evt',time='$time',organizer='$org' WHERE id='$id'";
		
		//echo var_dump ($edit);
		$e=mysql_query($edit);
		
		if($e)
		{
			
			header("location:profile.php");
		}
		else
		{
			echo "NOt Update".mysql_error();
		}
		}
		
		

	

	//$search=$_POST['searchname'];
	$user_check=$_SESSION['login_user'];
	$qry=mysql_query("SELECT * FROM form WHERE workmail='$user_check' ");
	
	//$qry=mysql_query("SELECT * FROM details");
	
	echo "<center><table broder='1'>
	
     
	</center>";
	
	
	while($row=mysql_fetch_array($qry))
	{   
        echo "<form action=profile.php method=POST>";
		
		 
		
        echo "<tr>";
		echo "<th>FirstName</th>";
		echo "<td>" . "<input type=text  name=fname     value=" . $row['first_name'] ." </td>";
		echo "</tr>";
		
		 echo "<tr>";
		 echo "<th>MiddleName</th>";
		echo "<td>" . "<input type=text name=mname  value=" . $row['middle_name'] . " </td>";
		echo "</tr>";
		
		 echo "<tr>";
		 echo "<th>LastName</th>";
		echo "<td>" . "<input type=text name=lname   value=" . $row['last_name'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th>Contact1</th>";
		echo "<td>" . "<input type=text  name=cont1   value=" . $row['contact1'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th>Contact2</th>";
		echo "<td>" . "<input type=text  name=cont2   value=" . $row['contact2'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		 echo "<th>Address Line 1</th>";
		echo "<td>" . "<input type=text   name=line1  value=" . $row['address_line1'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		 echo "<th>Address Line 2</th>";
		echo "<td>". "<input type=text   name=line2    value=" . $row['address_line2'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		 echo "<th>City</th>";
		echo "<td>". "<input type=text  name=city    value=" . $row['city'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		 echo "<th>State</th>";
		echo "<td>". "<input type=text name=state   value=" . $row['state'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		 echo "<th>Pincode</th>";
		echo "<td>". "<input type=text name=pin    value=" . $row['pincode'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		 echo "<th>WorkMail</th>";
		echo "<td>". "<input type=text name=mail   value=" . $row['workmail'] . " </td>";
		echo "</tr>";
		
		
		echo "<tr>";
		 echo "<th>Event Type</th>";
		echo "<td>". "<input type=text  name=evty    value=" . $row['event_type'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		 echo "<th>Event Date</th>";
		echo "<td>". "<input type=text name=evt    value=" . $row['event_date'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		 echo "<th>Time</th>";
		echo "<td>". "<input type=text  name=time     value=" . $row['time'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		 echo "<th>Organizer</th>";
		echo "<td>". "<input type=text   name=org     value=" . $row['organizer'] . " </td>";
		echo "</tr>";
		
		
		echo "<tr>";
		echo "<td>" . "<input type=hidden name=id value=" . $row['id'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td>" . "<input type=submit name=update value=save>" . " </td> ";
		echo "</tr>";
		
		echo "</form>";
		
	}
	
	echo "</center></table>";
	

	


	 
?>