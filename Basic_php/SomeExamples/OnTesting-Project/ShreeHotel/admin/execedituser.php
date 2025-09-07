<?php
	require_once('../connection.php');
?>
<?php
	
	$userid = $_POST['userid'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	mysqli_query($conn,"UPDATE kahini_tbl_admin SET username='$username', password='$password' WHERE id='$userid'");
	//header("location: user.php");
	echo "<script>window.location.href='user.php';</script>";
?>