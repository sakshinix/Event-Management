<?php
include "lock.php";
require_once ("config.php");


	if(isset($_POST['view']))
		{ 
	$company=$_POST['cname'];
	$q=mysql_query("SELECT * FROM details WHERE company='$company'");
	$row=mysql_fetch_array($q);
 $img=$row['image'];
 //echo "$img";
 
 echo "</br></br>"."<hr style='height:10px;background:white;'><center><img style='width:auto;display=block;margin-left:auto;margin-right:auto;' src='uploads/$img' ></center>"."</br></br>";
   
		}
		else 
		{
			echo "Image not available";
		}
?>

<html>
<head><title>Template</title>

</head>
<body background="back1.png" style="background-repeat:repeat-x;background-size:100% 100%;">
<hr style="height:10px;background:white;">
<center>
<button><a href="home.php">Back</a></button>
</center>
</body>
</html>