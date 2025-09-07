<?php

    include_once("DAO.php");

    $fname=$_POST['fname'];
	$lname=$_POST['lname'];
			
	$update=mysqli_query($con,"INSERT INTO chnd_nm (first_name,last_name) VALUES('$fname','$lname')");
    
    header("location: page_2.php");
	exit();
?>