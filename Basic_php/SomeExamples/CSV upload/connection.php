<?php
$db = mysql_connect("localhost", "root", "") or die("Could not connect.");

if(!$db) 

	die("no db");

if(!mysql_select_db("upload",$db))

 	die("No database selected.");
else
    echo "database selected...!";
?>
