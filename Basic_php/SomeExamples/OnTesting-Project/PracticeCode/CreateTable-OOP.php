<?php
	include_once('DAO-OOP.php');
	
	$sql = "CREATE TABLE MyGuests (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			firstname VARCHAR(30) NOT NULL,
			lastname VARCHAR(30) NOT NULL,
			email VARCHAR(50),
			reg_date TIMESTAMP
		)";
	$result = $con -> query($sql);
	
	if($result == 1)
	{
		echo "Table created successfully in the database $dbname";	
	}
	else
	{
		echo "Error: Creating Table ".mysqli_error($con);	
	}
?>