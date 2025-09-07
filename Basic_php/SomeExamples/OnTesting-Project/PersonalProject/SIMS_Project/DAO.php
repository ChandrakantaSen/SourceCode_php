<?php
	#$db_username = 'hexcode';
	#$db_password = 'Tango001';
	#$db_name = 'web_analytics';
	#$db_host = 'easymigcom.netfirmsmysql.com';
	
	$db_username = 'root';
	$db_password = '';
	$db_name = 'sims_db';
	$db_host = 'localhost';
	
	$connection = mysqli_connect($db_host, $db_username, $db_password);
	
	if(!$connection)
	{
		die('error: '.mysqli_error($connection));
		#echo "<script>window.location.href='404.php'</script>";	
	}
	mysqli_select_db($connection,$db_name);
?>