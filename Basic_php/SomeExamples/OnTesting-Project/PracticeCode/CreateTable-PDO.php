<?php
	include_once('DAO-PDO.php');
	
	try 
	{
		$sql = "CREATE TABLE MyGuests (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
				firstname VARCHAR(30) NOT NULL,
				lastname VARCHAR(30) NOT NULL,
				email VARCHAR(50),
				reg_date TIMESTAMP
			)";
			
		$con -> exec($sql);
		echo "Table created successfully in the database $dbname";
	}
	catch(PDOException $e)
	{
		die ("Connection failed: " . $e->getMessage());
	}
?>