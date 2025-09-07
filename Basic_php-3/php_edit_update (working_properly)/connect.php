<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('could not connect to server:'.mysql_error());
}
mysql_select_db("tar_db",$con);

?>