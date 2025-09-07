<?php
	$con = mysqli_connect('localhost','root','');
	
	if(!$con)
	{
			echo 'connection error'.mysqli_error();
	}
	else
	{
			echo 'connection connected';
	}
	mysqli_select_db($con,"chnd");
?>