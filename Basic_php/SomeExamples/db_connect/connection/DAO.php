<?php
	$db_host = "localhost";
	$db_usrnm = "root";
	$db_pwd = "";
	$db_name = "phpdb";
	
	$con = mysqli_connect($db_host, $db_usrnm, $db_pwd, $db_name);
	
	if(!$con)
	{
		die("database connection error: ".mysqli_connect_error());
	}
	else
	{
		echo "Database connection successful...!";
	}
?>