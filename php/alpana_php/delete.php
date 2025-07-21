<?php

	include_once("DAO.php");
	
	//$fn = $_POST['fname'];
	//$ln = $_POST['lname'];
	$sal = $_POST['salary'];
	
	$sql = ("DELETE FROM `emp` WHERE salary <= $sal");
	
	if(!mysql_query($sql,$con))
	{
		die('Error: '.mysql_error());
	}
	else
	{
		echo("<br/>");
		echo("<b>1...record deleted!</b>");
	}
	
	mysql_close($con);
?>