<?php
	$fn =$_POST['fname'];
	$ln =$_POST['lname'];
	$age =$_POST['age'];
	$con = mysql_connect("localhost","root","");
	if(!$con){
		die('Could not connect'.mysql_error());
	}
	mysql_select_db("MCC_db",$con);
	
	$sql = ("INSERT INTO Persons(FirstName,LastName,Age) VALUES ('$fn','$ln','$age')") ;
	
	if(!mysql_query($sql,$con)){
		die('Error:'.mysql_error());
	}
	echo"! record added";
	
	mysql_close($con);
?>