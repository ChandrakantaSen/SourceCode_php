<?php
	$dbhost = "localhost";
	$usernm = "root";
	$pwd    = "";
	$dbname = "chnd";

	$con = mysqli_connect($dbhost,$usernm,$pwd,$dbname);
	
	if(!$con)
	{
		die ("Error: database not connected".mysqli_connect_error());
	}
	else
	{
		echo "Database connected - Host details: ".'<b>'.mysqli_get_host_info($con).'</b>';
	}
	
	echo "<br>";
	/*echo "Connection closed ".mysqli_close($con);*/
?>