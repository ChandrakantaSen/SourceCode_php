<?php

$conn = mysql_connect("localhost","root","") ;
if(!$conn)
{
die ( 'database connection error'. mysql_error());
}		
		//$sql="mysql_query(CREATE DATABASE db_create),$conn";
		mysql_select_db("db_create",$conn);
		  $sql="CREATE TABLE persons(FirstName CHAR(30),LastName CHAR(30),Age INT)";
		if(!$sql)
		{
			echo 'Database connected error'.mysql_error($con);
		}
		else {
			 echo 'Database connection successfully';
		}
?>