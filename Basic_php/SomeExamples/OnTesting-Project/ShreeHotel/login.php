<?php
	session_start();
	require "connection.php";
	$user = $_POST['user'];
    $password = $_POST['password'];
	$qry = mysqli_query($conn,"SELECT * FROM tbl_admin WHERE username='$user' AND password='$password';");
	$result = mysqli_fetch_array($qry);
	$count = mysqli_num_rows($qry);
	if($count == 1) 
	{
		$pos = $result['id'];
		$_SESSION['user'] = $pos;
		echo "<script>window.location.href='admin/dashboard.php';</script>";
	}
	else 
	{
		echo "<script>window.location.href='admin.php?msg=Login Failed!!!!! Please try again.....';</script>";
		session_destroy();
	}
?>