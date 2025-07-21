<?php
	
	$con = mysql_connect('localhost','root','');
	
	if(!$con)
	{
		die('Error Occured'.mysql_error());
	}
	else
	{
		echo "database successfully connected"."<br/>";
	}
	mysql_select_db("alpana",$con);
?>