<?php
include "lock.php";
?>
<html>
<head><title>Welcome</title>
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

<div class="nav-item">
<img src="logo.jpeg" width="50px" height="45px"  style="border-radius:50%;margin-left:950px;border:2px solid white;" >
    <a class="nav-link active" href="home.php">Home</a>
  
    <a class="nav-link" href="profile.php">Events</a>
 
    <a class="nav-link" href="form.php">Form</a>
	
     <a class="nav-link disabled" href="logout.php">Logout</a>
</div>

</br></br></br>
<center>
<form id="sform" action="" method="POST" >
<input type="text" name="searchname" id="searchname" placeholder="Search">
<input type="text" name="ssearch" id="ssearch" placeholder="Search by reference"><br/><br/>
<button type="submit">Search</button>
</form>
</center>
</body>
</html>
<?php

require_once ("config.php");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$search=$_POST['searchname'];
	$rsearch=$_POST['ssearch'];
	
	$sql=mysql_query("SELECT * FROM details WHERE (first_name LIKE '%$search%' OR middle_name LIKE '%$search%' OR last_name LIKE '%$search%' OR event_type LIKE '%$search%') AND (city LIKE '%$rsearch%' OR state LIKE '%$rsearch%' )");
	
	
	echo "<center><table broder='1'>
	<tr>
	<th>Company</th>
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
	 <th>Employee</th>
	<th>Price</th>
	 <th>Time</th>
	 <th>Status</th>
	 
	 </tr>
	</center>";
	
while($row=mysql_fetch_array($sql))
	{   
        echo "<tr>";
		echo "<form action=view.php method=POST>";
		echo "<td>" . "<input type=text  name=cname   readonly  value=" . $row['company'] ." </td>";
		
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
		echo "<td>".$row['employee'] . " </td>";
		echo "<td>". $row['price'] . " </td>";
		echo "<td>" .$row['time']. " </td>";
		echo "<td>". $row['status'] . " </td>";
		echo "<td>" . "<input type=submit name=view value=view>" . " </td> ";
		
		echo "</tr>";
		
		echo "</form>";
		
	}
	
	echo "</table>";
	
	
   
}
?>
