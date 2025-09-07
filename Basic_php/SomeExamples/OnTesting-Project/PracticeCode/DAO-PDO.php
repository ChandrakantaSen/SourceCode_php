<?php
	$dbhost = "localhost";
	$usernm = "root";
	$pwd    = "";
	$dbname = "ckdb";
	
	try 
	{
		$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $usernm, $pwd);
		$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		echo "Database connected - Host details: ".'<b>'.$con -> getAttribute(constant("PDO::ATTR_CONNECTION_STATUS")).'</b>';
	}
	catch(PDOException $e)
    {
		die ("Connection failed: " . $e->getMessage());
	}
	
	echo "<br>";
	#echo "Connection closed ".$con = 1;
?>