<?php
	$dbhost = "localhost";
	$usernm = "root";
	$pwd    = "";
	$dbname = "db";
	
	$con = new mysqli($dbhost,$usernm,$pwd,$dbname);
	
	if(!$con)
	{
		die ("Error: database not connected ".$con -> connect_error);	
	}
	else
	{
		echo "Database connected - Host details: ".'<b>'.$con -> host_info.'</b>';
		echo "<br>"."Database Name: ".$dbname;
	}
	
	echo "<br>";
	#echo "Connection closed ".$con -> close();
?>
