<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
session_start();
if(isset($_SESSION['username']))
{
	
	echo " &nbsp;&nbsp;&nbsp;&nbsp;Welcome"." ".$_SESSION['username']."<br/>";
	
	
	
	echo "&nbsp;&nbsp;&nbsp;&nbsp; <a href='logout.php'>Logout</a>";
	
	
	?>
<div id="wrapper">
<div align="center">
<div id="nav">
<ul>
<a href="view.php"><li>View Customer</li></a>
<a href="search.php"><li>Search Customer</li></a>
<a href="delete.html"><li>Delete Customer</li></a></ul>
</div>
</div>
<?php 
}?>	
</body>
</html>