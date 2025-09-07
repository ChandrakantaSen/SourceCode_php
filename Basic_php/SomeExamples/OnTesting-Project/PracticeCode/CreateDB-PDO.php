<?php
	$dbhost = "localhost";
	$usernm = "root";
	$pwd    = "";
	$dbname = "DBpdO";
	
	try
	{
		$con = new PDO("mysql:host=$dbhost;", $usernm, $pwd);
		$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		echo "Database connected - Host details: ".'<b>'.$con -> getAttribute(constant("PDO::ATTR_CONNECTION_STATUS")).'</b>';
		echo "<br>";
		
		$sql = "Create database if not exists $dbname";
		$con->exec($sql);
		
		echo "Database created successfully";
	}
	catch(PDOException $e)
    {
		die("ERROR: Could not able to create database. ".$e->getMessage());
	}
	
	echo "<br>";
	echo "Connection closed ".$con = 1;
?>