<?php 
session_start(); 
if($_SESSION['username'])
{
print "<b><a href='logout.php'>LOG Out</a></b><br>". "<strong>Welcome To ".$_SESSION['name']." </strong></br>".
"<strong>User name ".$_SESSION['username']." </strong></br>". "<strong>Address ".$_SESSION['address']." </strong></br>".
"<strong>Mobile ".$_SESSION['mob']." </strong>";

}
?>