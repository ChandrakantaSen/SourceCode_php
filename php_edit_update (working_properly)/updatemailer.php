<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once "connect.php";

$id=$_POST['id'];
$name=$_POST['name'];
$beng=$_POST['beng'];
$eng=$_POST['eng'];
$math=$_POST['math'];
$hist=$_POST['hist'];
$geo=$_POST['geo'];
$snce=$_POST['scin'];
$total = ($beng+$eng+$math+$hist+$geo+$snce);
$avg=($total/6);
$grade=NULL;
if ($avg>=80)
	{
		$grade= "AA";
	}
else if ($avg>=60)
	{
		$grade= "A";
	}
else if ($avg>=45)
	{
		$grade= "B";
	}
else if ($avg>=25)
	{
		$grade= "C";
	}
else
	{
		$grade= "D";
	}

	
$query="UPDATE `mytbl` SET `name`='$name',`beng`='$beng',`eng`='$eng',`maths`='$math',`hist`='$hist',`geo`='$geo',`scinc`='$snce',`total`='$total',`avg`='$avg',`grade`='$grade' WHERE `reg_no`='$id'";

if (!mysql_query($query,$con))
{
	die("Updation failure".mysql_error());
}
else
{
	echo("Updated successfully");
}

mysql_close($con);
?>
</body>
</html>