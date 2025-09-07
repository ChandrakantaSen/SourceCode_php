<?php
	$dbhost = "localhost";
	$usernm = "root";
	$pwd    = "";
	$dbname = "DBooP";
	
	$con = new mysqli($dbhost,$usernm,$pwd);
	
	if(!$con)
	{
		die ("Error: database not connected ".$con -> connect_error);	
	}
	else
	{
		echo "Database connected - Host details: ".'<b>'.$con -> host_info.'</b>';
		echo "<br>";
		
		$sql = "Create database if not exists $dbname";
		$result = ($con -> query($sql));
		
		if($result == 1)
		{
			echo "Database created successfully";	
		}		
		else
		{
			echo "Error: Database can not be created".$con -> error;	
		}
	}
	
	echo "<br>";
	echo "Connection closed ".$con->close();
?>