<?php
	$db_username = 'hexcode';
	$db_password = 'Tango001';
	$db_name = 'web_analytics';
	$db_host = 'easymigcom.netfirmsmysql.com';
	
	#$db_username = 'root';
	#$db_password = '';
	#$db_name = 'web_analytics';
	#$db_host = 'localhost';
	
	$con = mysqli_connect($db_host, $db_username, $db_password);
	
	if(!$con)
		die('error: '.mysqli_error($con));	
	
	mysqli_select_db($con,$db_name);
?>