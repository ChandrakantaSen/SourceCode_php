<?php
//include("connection.php");
$connect=mysqli_connect("localhost","root","","cms");
$name=$_POST['name'];
$email=$_POST['email'];
$sms=$_POST['message'];
$q="insert into record1 values('','$name','$email','$sms')";
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
		header("location:index.html");
	}
	?>