<?php
require_once("config.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	$a= $_POST['first_name'];
	$b=$_POST['middle_name'];
	$c=$_POST['last_name'];
	$d=$_POST['contact1'];
	$e=$_POST['contact2'];
	$f=$_POST['address_line1'];
	$g=$_POST['address_line2'];
	$h=$_POST['city'];
	$i=$_POST['state'];
	$j=$_POST['pincode'];
	$k=$_POST['workmail'];
	$l=$_POST['event_type'];
	$m=$_POST['event_date'];
	$n=$_POST['event_duration'];
	$p=$_POST['org'];
	$q=$_POST['paid'];
			  
$qry=mysql_query("INSERT INTO form(first_name,middle_name,last_name,contact1,contact2,address_line1,address_line2,city,state,
pincode,workmail,event_type,event_date,time,organizer,paid) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$p','$q')");

   if($qry==true){
	  //echo "Inserted";
	 header("location:thank.php");
   }   
   else{
	   echo "not".mysql_error();
   }
}
   else{
	   echo "REQUEST METHOD IS NOT POST";
   }
?>