<?php
include "e_lock.php";
?>
<html>
<head><title>Welcome</title>
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
</head>
<body background="back1.png" style="background-repeat:no-repeat;background-size:100% 100%;">

<center><img src="logo.jpeg" width="150px" height="150px"  style="border-radius:50%;border:2px solid white;" ></center></br></br>
<div class="nav-item">

    <a class="nav-link active" href="ehome.php">Home</a>
  
    <a class="nav-link" href="eprofile.php">Profile</a>
 
    <a class="nav-link" href="order.php">order</a>
	
	
  
    <a class="nav-link disabled" href="elogout.php">Logout</a>
</div>

</br></br></br>

</body>
</html>

<?php
require_once ("config.php");

$user_check=$_SESSION['login_user'];
$qry=mysql_query("SELECT * FROM details WHERE workmail='$user_check' ");
while($row=mysql_fetch_array($qry)){


$img=$row['image'];

echo  "</br></br>"."<center><img style=' margin-left:auto; 'src='uploads/$img' ></center>"."</br></br>";
echo "<h1 style='font-family:sans-serif;color:white;text-align:center;'>" .$row['event_type']. "</h1>";
}	
?>