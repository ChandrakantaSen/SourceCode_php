<?php
	include_once('connection/DAO.php');
	
	$ctg_nm = $_POST['ctg_nm'];
	
	$sql = "SELECT count(ctg_name) as total FROM phpdb_tbl1 WHERE ctg_name = '$ctg_nm'";
	$result = mysqli_query($con, $sql);
	$data = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	if(!$result)
	{
		die("Error Generated: ".mysqli_error($con));
	}
	else
	{
		$row = $data['total'];
		echo $row." row exists...!";
		echo "<br>";
		$sql_1 = "SELECT * from "
	}
?>