<?php
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];

if($uname=='chandra'&& $pwd=='123')
{
	echo 'login succesfull...';
}
else
{
	echo 'login not succesfull...';
}
?>