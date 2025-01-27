<?php
require_once("config.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	 $path= "uploads/";
     $valid_formats=array("jpg","png","gif","JPG","bmp","jpeg");
	 $m=$_POST['c_name'];
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
	$u=md5($_POST['pass']);
	$l=$_POST['event_type'];
	$n=$_POST['employee'];
	$o=$_POST['price'];
	$p=$_POST['event_duration'];
	$q=$_POST['status'];
	$time=time();
	  $actual_img_name=$_FILES['upimg']['name'];
	  $reimg=$time.$actual_img_name;
	  $size=$_FILES['upimg']['size'];
	  $tmp=$_FILES['upimg']['tmp_name'];
	  $ext=explode(".",$actual_img_name);
	  //print_r($ext);
	  if(in_array($ext[1],$valid_formats)){
		  if(move_uploaded_file($tmp,$path.$reimg)){
			  
 $qry=mysql_query("INSERT INTO details(image,company,first_name,middle_name,last_name,contact1,contact2,address_line1,address_line2,city,state, pincode,workmail,user_pass,event_type,employee,price,time,status) VALUES('$reimg','$m','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$u','$l','$n','$o','$p','$q')");

}
		  else {
			  
		  echo "not";
		  }
	  }
	   else {
			  echo "enter valid formates";
		  }
   if($qry==true){
	 // echo "Inserted";
	  header("location:esignin.php");
   }   
   else{
	   echo "not".mysql_error();
   }
  }
   else{
	   echo "REQUEST METHOD IS NOT POST";
   }
?>