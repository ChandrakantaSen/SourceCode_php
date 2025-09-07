<?php
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$mob=$_POST['mob'];
	$dob=$_POST['dob'];
	$email=$_POST['email'];
	$sex=$_POST['sex'];
	$address=$_POST['address'];
	$sal=$_POST['sal'];	
	
	$con = mysql_connect("localhost","root","");
	if(!$con){
		die('Could not connect'.mysql_error());
	}
	mysql_select_db("db_formaction",$con);
	
	$sql = "INSERT INTO `reg_mstr`(`id`, `name`, `fname`, `mob`, `email`, `address`, `dob`, `sex`, `basic salary`,`current_date`, `current_time`) VALUES ('1101','$name','$fname','$mob','$email','$address','$dob','$sex','$sal',NOW(),NOW())";
	
	if(!mysql_query($sql,$con)){
		echo ("Error :".mysql_error());
	}
	else
		echo "! record added";
	mysql_close($con);	
?>