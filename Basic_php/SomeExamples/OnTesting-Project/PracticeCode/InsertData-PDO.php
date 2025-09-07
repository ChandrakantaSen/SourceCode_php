<?php
	include_once('DAO-PDO.php');	
	
	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
			VALUES ('John', 'Doe', 'john@example.com')";
			
	try
	{
		$con->exec($sql);	
		echo "Data Inserted Successfully";
	}
	catch(PDOException $e)
	{
		die ("Connection failed: " . $e->getMessage());
	}
?>