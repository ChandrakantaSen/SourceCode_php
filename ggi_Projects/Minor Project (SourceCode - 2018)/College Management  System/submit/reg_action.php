<?php
	include("connection.php");
	
	$name=$_POST['name'];
	$dob=$_POST['birthday'];
	$nation=$_POST['nation'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$father=$_POST['father'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$quali=$_POST['quali'];
	$board=$_POST['board'];
	$course=$_POST['course'];

	
	$q="insert into admission values(
		 '',
		
		 '$name',
		 '$dob',
		 '$nation',
		 '$mobile',
		 '$email',
		 '$father',
		 '$gender',
		 '$address',
		 '$quali',
		
		  '$board',
		   '$course',
		   ''
		  )";
		
	$qry=mysqli_query($connect,$q);
	?>
	<script>
	alert("Successfully Submited!");
	window.location="index.html";
	</script>
	
	