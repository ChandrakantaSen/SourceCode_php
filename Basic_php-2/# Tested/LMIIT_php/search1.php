<?php

	include_once("DAO.php");
	
	$fn = $_POST['fname'];
	$sql = ("select distinct * from `emp` where 'fname' = '$fn'");
	
	if(!mysql_query($sql,$con))
	{
	die('error: '.mysql_error());
	}
	else
	{
		echo "<br/>";
		echo "<b>element is found</b>";
	}
	mysql_close($con);
	?>
	
