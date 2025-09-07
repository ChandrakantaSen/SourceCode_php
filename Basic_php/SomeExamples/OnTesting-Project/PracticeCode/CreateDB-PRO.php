<?php
	$dbhost = "localhost";
	$usernm = "root";
	$pwd    = "";
	$dbname = "spd";

	$con = mysqli_connect($dbhost,$usernm,$pwd);
	
	if(!$con)
	{
		die ("Error: database not connected".mysqli_connect_error());
	}
	else
	{
		echo "Database connected - Host details: ".'<b>'.mysqli_get_host_info($con).'</b>';
		echo "<br>";
		
		$sql = "Create database if not exists $dbname";
		$result = mysqli_query($con, $sql);
		
		if($result == 1)
		{
			echo "Database created successfully";
		}
		else
		{
			echo "Error: Database can not be created ".mysqli_error($con);
		}
	}
	echo "<br>";
	echo "Connection closed ".mysqli_close($con);
?>