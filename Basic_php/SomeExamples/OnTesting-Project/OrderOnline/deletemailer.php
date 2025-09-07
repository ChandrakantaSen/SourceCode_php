<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Sl_No=$_POST['Sl_No'];
$con=mysql_connect("billfoldleathers.com","billfold_order","~?u~;T)P9d!I");
if(!$con)
{
	die('could not connect to server:'.mysql_error());
}
mysql_select_db("billfold_orderonline",$con);
$query="DELETE FROM `order` WHERE `Sl_No`='$Sl_No'";
if (!mysql_query($query,$con))
{
	die("Deletion failure".mysql_error());
}
else
{
	echo("Deleted successfully");
	header("location: memberarea.php");
}

mysql_close($con);
?>
</body>
</html>