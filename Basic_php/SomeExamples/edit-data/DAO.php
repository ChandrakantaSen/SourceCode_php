<?php
	$db_host = "localhost";
	$db_usrnm = "root";
	$db_pwd = "";
	$db_name = "dbtuts";
	
	$con = mysql_connect($db_host, $db_usrnm, $db_pwd);
	
	if(!$con)
	{
		die("database connection error: ".mysql_error());
	}
	else
	{
		//echo "Database connection successful...!";
	}
?>