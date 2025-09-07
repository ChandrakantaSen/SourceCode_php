<?php
include('sani/connection.php');
//$connect=mysqli_connect("localhost","root","","cms");
$name=$_POST['name'];
$email=$_POST['email'];
$sms=$_POST['sms'];
$q="insert into feedback values('','$name','$email','$sms')";
$qry=mysqli_query($connect,$q);
	?>
	<script>alert("Successfully Message Send !");
	window.location="index.html";
	</script>
	