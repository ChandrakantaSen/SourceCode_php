<?php
$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			die('connection error'.mysql_error());
		}
		mysql_select_db("chandra_db",$con);
?>