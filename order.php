<?php
include "e_lock.php";
?>

<html>
<head><title>Orders</title>

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
<body background="back1.png" style="background-repeat:repeat-x;background-size:100% 100%;">


<center><img src="logo.jpeg" width="150px" height="150px"  style="border-radius:50%;border:2px solid white;" ></center></br></br>
<div class="nav-item">

    <a class="nav-link " href="ehome.php">Home</a>
  
    <a class="nav-link " href="eprofile.php">Profile</a>
 
    <a class="nav-link active" href="order.php">order</a>
	
	
  
    <a class="nav-link disabled" href="elogout.php">Logout</a>
</div>

</br></br></br>
<center>
<form id="sform" action="" method="POST" >
<input type="text" name="searchname" id="searchname" placeholder="Search">
<input type="text" name="ssearch" id="ssearch" placeholder="Search by reference"><br/><br/>
<button type="submit">Search</button><input type="button" value="print" onclick="window.print()" > 
</form>
</center>
</body>
</html>


<?php

require_once "config.php";
     
		
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$search=$_POST['searchname'];
	$rsearch=$_POST['ssearch'];
	$user_check=$_SESSION['login_user'];
	$q=mysql_query("SELECT company FROM details WHERE workmail='$user_check'");
	$name=mysql_fetch_array($q);
    $s=$name['company'];
	//echo $s;
	$sql=mysql_query("SELECT * FROM form WHERE 	(organizer='$s') AND (first_name LIKE '%$search%' OR middle_name LIKE '%$search%' OR last_name LIKE '%$search%' ) AND (city LIKE '%$rsearch%' OR time LIKE '%$rsearch%' )");
	
	
	echo "<center><table broder='1'>
	<tr>
	<th>FirstName</th>
     <th>MiddleName</th>
	 <th>LastName</th>
	 <th>Contact1</th>
	 <th>Contact2</th>
	 <th>Address Line 1</th>
	 <th>Address Line 2</th>
	 <th>City</th>
	 <th>State</th>
	 <th>Pincode</th>
	 <th>WorkMail</th>
	 <th>Event Type</th>
	 <th>Event Date</th>
	 <th>Time</th>
	 <th>Organizer</th>
	 <th>Paid</th>
	 </tr>
	</center>";
	
while($row=mysql_fetch_array($sql))
	{   
        echo "<tr>";
		echo "<form action=order.php method=POST>";
		echo  "<td>". $row['first_name']." </td>";
		echo "<td>".  $row['middle_name']." </td>";
		echo "<td>".  $row['last_name']." </td>";
		echo  "<td>".  $row['contact1']." </td>";
		echo  "<td>".  $row['contact2'] ." </td>";
		echo  "<td>".  $row['address_line1'] ." </td>";
		echo  "<td>". $row['address_line2'] ." </td>";
		echo  "<td>". $row['city'] ." </td>";
		echo  "<td>". $row['state'] ." </td>";
		echo  "<td>".  $row['pincode'] ." </td>";
		echo "<td>". $row['workmail']  ." </td>";
		echo "<td>". $row['event_type']. " </td>";
		echo "<td>".$row['event_date'] . " </td>";
		echo "<td>" .$row['time']. " </td>";
		echo "<td>". $row['organizer'] . " </td>";
		echo "<td>" . "<input type=text name=paid value=" . $row['paid'] . " </td>";
		echo "<td>" . "<input type=hidden name=id value=" . $row['id'] . " </td>";
		echo "<td>" . "<input type=submit name=update value=save>" . " </td> ";
		echo "</tr>";
		
		echo "</form>";
		
	}
	
	echo "</table>";
	
}

if(isset($_POST['update']))
		{
		$id=$_POST['id'];
		$paid=$_POST['paid'];
	  
		
		$edit="UPDATE form SET paid='$paid' WHERE id='$id'";
    
	$e=mysql_query($edit);
		
		if($e)
		{
			
			header("location:order.php");
		}
		else
		{
			echo "NOt Update".mysql_error();
		}
		}

?>