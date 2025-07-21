<?php
    include_once("DA02.php");
	
	$fn= $_POST['name'];
	
	$sql =("INSERT INTO 'reg'('name') VALUES('$fn')");
	
	if(mysqli_connect_errno())
	{
	   echo "Error to connect: ".mysqli_connect_error();
	}
	
	 if(mysqli_query($con,$sql))
	 {
	 die('Error:'.mysql_error());
	 }
	 else
	 {
	 echo "data inserted...!";
	 }
	 mysqli_close($con);
?>