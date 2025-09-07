<?php

$con = mysql_connect('localhost','root','');
if(!$con)
{
	die("Could not connect".mysql_error());
}
mysql_select_db("db_formaction",$con);		//database name db_formaction

$name=$_POST['name'];
$fname=$_POST['fname'];
$mob=$_POST['mob'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$sex=$_POST['sex'];
$address=$_POST['address'];
$sal=$_POST['sal'];
$da =(($sal * 70)/100);
$ta = 800;
$hra =(($sal * 10)/100);
$ma =(($sal * 8)/100);
$gross =($da + $ta + $hra + $ma);

$namelen=(strlen($name));
$moblen=(strlen($mob));
$x=(substr($name,-$namelen,3));
$y=(substr($mob,-$moblen,3));


$sql ="INSERT INTO `reg_mstr`(`id`, `name`, `fname`, `mob`, `email`, `address`, `dob`, `sex`, `basic salary`, `da`, `ta`, `hra`, `ma`, `gross_total`, `username`, `password`, `current_date`, `current_time`) VALUES ('','$name','$fname','$mob','$email','$address','$dob','$sex','$sal','$da','$ta','$hra','$ma','$gross','abc','123',NOW(),NOW())";

if(!mysql_query($sql,$con))
{
	echo ("Error :".mysql_error());
}
else
//echo "! record added";
header ("location:view.php");
mysql_close($con);	

?>