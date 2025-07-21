<?php
	include_once('../Connection/DAO-PDO.php');
	
	$fnm = $_POST['fnm'];
	$lnm = $_POST['lnm'];
	$eml = $_POST['eml'];
	
	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
			VALUES ('$fnm', '$lnm', '$eml')";
			
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