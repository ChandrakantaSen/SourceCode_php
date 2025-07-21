<?php
	$con = mysql_connect("localhost","root","");
	if(!$con){
		die('Could not connect'.mysql_error());
	}
	mysql_select_db("MCC_db",$con);
	
	mysql_query("INSERT INTO Persons
	(FirstName,LastName,Age)VALUES('Peter','Saha',35)");
	mysql_query("INSERT INTO Persons
	(FirstName,LastName,Age)VALUES('Rohan','Dutta',29)");
	
	mysql_close($con);
?>