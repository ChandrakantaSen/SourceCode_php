<?php
	include_once('DAO-OOP.php');
	
	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
			VALUES ('John', 'Doe', 'john@example.com')";
	$result = $con -> query($sql);
	
	if($result == 1)
	{
		echo "Row Inserted";
	}
	else
	{
		echo "Error: ".$con -> error;	
	}
?>