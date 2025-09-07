<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Sl_No=$_POST['Sl_No'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$company=$_POST['company'];
$address=$_POST['address'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$city=$_POST['city'];
$state=$_POST['state'];
$code=$_POST['code'];
$product=$_POST['product'];
$black=$_POST['black'];
$brown=$_POST['brown'];
$white=$_POST['white'];
$beige=$_POST['beige'];
$silver=$_POST['silver'];
$golden=$_POST['golden'];
$bronze=$_POST['bronze'];
$anothercolor=$_POST['anothercolor'];

$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('could not connect to server:'.mysql_error());
}
mysql_select_db("billfold_orderonline",$con);
$query="INSERT INTO `order`(`Sl_No`, `First Name`, `Last Name`, `Company`, `Address`, `Email`, `Contact`, `City`, `State`, `Postal Code`, `Product`, `Black`, `Brown`, `White`, `Beige`, `Silver`, `Golden`, `Bronze`, `Another Colour`) VALUES ('','$fname','$lname','$company','$address','$email','$mobile','$city','$state','$code','$product','$black','$brown','$white','$beige','$silver','$golden','$bronze','$anothercolor')";

if (!mysql_query($query,$con))
{
	die("Registration failure".mysql_error());
}
else
{
	echo("Your form has been submitted successfully");
}

mysql_close($con);
?>
</body>
</html>