<?php
include_once "connect.php";
$name=$_POST['name'];
$class=$_POST['class'];
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

$query="INSERT INTO `mytbl`(`reg_no`, `name`, `class`, `beng`, `eng`, `maths`, `hist`, `geo`, `scinc`, `total`, `avg`, `grade`) VALUES ('','$name','$class','$beng','$eng','$math','$hist','$geo','$snce','$total','$avg','$grade')";

if (mysql_query($query,$con))
	{
		echo "Marks Submission Successfull."." ". " <a href='reg.php'>Mark Submission</a>";
	}
else
	{
		echo "Marks Submission Error".mysql_error();
	}
?>