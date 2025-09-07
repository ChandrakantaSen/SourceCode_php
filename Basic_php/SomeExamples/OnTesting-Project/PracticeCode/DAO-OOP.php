<?php
	$dbhost = "localhost";
	$usernm = "root";
	$pwd    = "";
	$dbname = "ck";
	
	$con = new mysqli($dbhost,$usernm,$pwd,$dbname);
	
	if(!$con)
	{
		die ("Error: database not connected ".$con -> connect_error);	
	}
	else
	{
		echo "Database connected - Host details: ".'<b>'.$con -> host_info.'</b>';
	}
	
	echo "<br>";
	#echo "Connection closed ".$con -> close();
?>
