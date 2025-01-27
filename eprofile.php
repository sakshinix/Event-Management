
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

<center><img src="logo.jpeg" width="150px" height="150px"  style="border-radius:50%;border:2px solid white;" ></center></br></br>

<div class="nav-item">

    <a class="nav-link " href="ehome.php">Home</a>
  
    <a class="nav-link active" href="eprofile.php">Profile</a>
 
    <a class="nav-link" href="order.php">order</a>
	
	<a class="nav-link disabled" href="elogout.php">Logout</a>
</div>

</br></br></br>

</body>
</html>


<?php

	
     if(isset($_POST['update']))
		{
		$id=$_POST['id'];
		
	 
	 
	 
	 
	  
	 
	  
	  
	  
	 
	  
		
		$edit="UPDATE cust_regi SET name='$cname',image='$img',mob_no='$mobile_no',address='$addr',email='$mail',user_name='$u_name',pass='$pass',map='$mapp' WHERE id='$id'";
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
		
		

	
/* profile display code*/
	//$search=$_POST['searchname'];
	$user_check=$_SESSION['login_user'];
	$qry=mysql_query("SELECT * FROM cust_regi WHERE email='$user_check' ");
	
	//$qry=mysql_query("SELECT * FROM cust_regi");
	
	echo "<center><table broder='1'>
	
     
	</center>";
	
	
	while($row=mysql_fetch_array($qry))
	{   
        echo "<form action=profile.php method=POST>";
		
		 echo "<tr>";
		echo "<th>image</th>";
		echo "<td>" . "<input type=text  name=cname     value=" . $row['image'] ." </td>";
		echo "</tr>";
		
        echo "<tr>";
		echo "<th>cname</th>";
		echo "<td>" . "<input type=text  name=fname     value=" . $row['name'] ." </td>";
		echo "</tr>";
		
		 echo "<tr>";
		 echo "<th>mob_no</th>";
		echo "<td>" . "<input type=text name=mob_no  value=" . $row['mob_no'] . " </td>";
		echo "</tr>";
		
		 echo "<tr>";
		 echo "<th>address</th>";
		echo "<td>" . "<input type=text name=addr   value=" . $row['address'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th>user_name</th>";
		echo "<td>" . "<input type=text  name=uname   value=" . $row['user_name'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th>email</th>";
		echo "<td>" . "<input type=text  name=email   value=" . $row['email'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		 echo "<th> password</th>";
		echo "<td>" . "<input type=password   name=pass  value=" . $row['password'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		 echo "<th>map</th>";
		echo "<td>". "<input type=text   name=map    value=" . $row['map'] . " </td>";
		echo "</tr>";
		
		/
		
		
		echo "<tr>";
		echo "<td>" . "<input type=hidden name=id value=" . $row['id'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td>" . "<input type=submit name=update value=save>" . " </td> ";
		echo "</tr>";
		
		echo "</form>";
		
	}
	
	echo "</table>";
	

	


	 
?>