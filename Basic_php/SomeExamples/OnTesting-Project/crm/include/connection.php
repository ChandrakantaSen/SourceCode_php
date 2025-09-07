<?php
$connection = mysqli_connect("localhost", "root","");
if(!$connection)
{
	echo mysqli_error($connection);
	die();
}
$db = mysqli_select_db($connection, "test_crm");
?>