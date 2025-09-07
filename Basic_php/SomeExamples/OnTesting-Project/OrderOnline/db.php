<?php
session_start();
$con=mysql_connect("billfoldleathers.com","billfold_order","~?u~;T)P9d!I");
if(!$con)
{
	die('could not connect to server:'.mysql_error());
}
mysql_select_db("billfold_orderonline",$con);
?>