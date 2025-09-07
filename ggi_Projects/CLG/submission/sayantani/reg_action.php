<?php
	include("connection.php");
	
	$name=$_POST['name'];
	$dob=$_POST['birthday'];
	$nation=$_POST['nation'];
	$code=$_POST['code'];
	$email=$_POST['email'];
	$father=$_POST['father'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$quali=$_POST['quali'];
	$board=$_POST['board'];
	$course=$_POST['course'];

	
	$q="insert into admission values(
		 ''
		'
		,'$address'
		,'$quali'
		,'$board,'$name'
		,'$dob'
		,'$nation'
		,'$code'
		,'$email'
		,'$father'
		,'$gender'
		,'$course')";
		
	$qry=mysqli_query($connect,$q);
	
	if(mysqli_connect_errno())
	{
		echo "Error to connect: ".mysqli_connect_error();
	}
	
	if(!mysqli_query($connect,$q))
	{
        die('Error:'.mysql_error());
    }
	else
	{
		header("location:profile.php");
	}
?>