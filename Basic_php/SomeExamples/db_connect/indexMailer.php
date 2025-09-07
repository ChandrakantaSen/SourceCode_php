<?php

	include_once('connection/DAO.php');
	
	$ctg_nm  = $_POST['ctg_nm'];
	$ctg_num = $_POST['ctg_num'];

	#echo "Category Name: ".$ctg_nm;
	#echo "<br/>";
	#echo "Category Number: ".$ctg_num;
	#echo "<br/>";

	$sql = "INSERT INTO phpdb_tbl1 (ctg_name,ctg_number) VALUES ('$ctg_nm','$ctg_num')";

	if(!mysqli_query($con, $sql))
	{
		die("Error Generated: ".mysqli_error($con));
	}
	else
	{
		echo "Record Inserted...!";
	}

	header('Location: http://localhost:801/myCodes/Basic_Codes/db_connect/viewMailer.php');
	mysqli_close($con);
?>
