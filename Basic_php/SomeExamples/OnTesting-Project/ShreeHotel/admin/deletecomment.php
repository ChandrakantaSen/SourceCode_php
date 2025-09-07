<?php
	session_start();
	require_once('../connection.php');
	$id=$_REQUEST['id'];
	

	
	$id = $_REQUEST['id'];
	
	$sql =mysqli_query($conn,"delete from contact where id='$id'");
	
	if($sql)
	{
		echo "<script>window.location.href='message.php'</script>";
	}
	else
	{
		echo "<script>window.location.href='message.php'</script>";
	}
?>

