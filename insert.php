<?php
include ("config.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$path= "photo/";
     $valid_formats=array("jpg","png","gif","JPG","bmp");
	$uname=$_POST['name'];
	$uemail=$_POST['email'];
	$upass=md5($_POST['pass']);
	$ucont=$_POST['cont'];
	$uadd=$_POST['add'];
	$time=time();
	  $actual_img_name=$_FILES['upimg']['name'];
	  $reimg=$time.$actual_img_name;
	  $size=$_FILES['upimg']['size'];
	  $tmp=$_FILES['upimg']['tmp_name'];
	  $ext=explode(".",$actual_img_name);
	  //print_r($ext);
	  if(in_array($ext[1],$valid_formats)){
		  if(move_uploaded_file($tmp,$path.$reimg)){
			  
	$qry=mysql_query("INSERT INTO user_data(image,`user_name`, `user_email`, `user_pass`, `user_cont`, `user_address`)VALUES ('$reimg','$uname','$uemail','$upass','$ucont','$uadd')");
		  }
		  else {
			  
		  echo "not";
		  }
	  }
	   else {
			  echo "enter valid formates";
		  }
   if($qry==true){
	  //echo "Inserted";
	  header("location:signin.php");
   }   
   else{
	   echo "not".mysql_error();
   }
  }
   else{
	   echo "REQUEST METHOD IS NOT POST";
   }
?>