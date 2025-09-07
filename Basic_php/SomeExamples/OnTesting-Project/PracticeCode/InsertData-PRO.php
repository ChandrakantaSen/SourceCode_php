<?php
	include_once('DAO-PRO.php');
	
	$sql = "INSERT INTO MyGuests (firstname, lastname, email) 
			VALUES ('John', 'Doe', 'john@example.com')";
	$result = mysqli_query($con,$sql);
	
	if($result == 1)
	{
		echo "Data inserted successfully";
	}
	else
	{
		echo "Error: ".mysqli_error($con);	
	}
?>