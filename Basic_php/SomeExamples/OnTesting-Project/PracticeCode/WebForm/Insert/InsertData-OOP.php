<?php
	include_once('../Connection/DAO-OOP.php');
	
	$fnm = $_POST['name'];
	$lnm = $_POST['address'];
	$eml = $_POST['salary'];
	
	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
			VALUES ('$fnm', '$lnm', '$eml')";
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