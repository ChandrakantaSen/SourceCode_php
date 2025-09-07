<?php 
	$db_host = "localhost";
	$db_usernm = "root";
	$db_pwd = "";
	$db_name = "CKdb";
	
	$con = mysqli_connect($db_host,$db_usernm,$db_pwd,$db_name);
	
	if(!$con)
	{
		die("database connection error".mysqli_connect_error());	
	}
	else
	{
		$sql = "create database CKdb";
		if(mysqli_query($con,$sql))
		{
			echo "database creation successfull";
		}
		else
		{
			echo "error: ".mysqli_error($con);
		}
		echo "connection successfully";
	}
?>