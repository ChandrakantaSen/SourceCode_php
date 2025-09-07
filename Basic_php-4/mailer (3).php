<?php
$b="<br>";
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$sex=$_POST['sex'];
$department=$_POST['department'];
$address=$_POST['address'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$email=$_POST['email'];
$password=$_POST['password'];

print "<strong>First Name : </strong>".$fname." ".$lname.$b; 
//printf ("<br>");
print "<strong>Sex : </strong>".$sex; 
printf ("<br>");
print "<strong>Departments : </strong>".$department; 
printf ("<br>");
print "<strong>Address : </strong>".$address;
printf ("<br>");
print "<strong>City : </strong>".$city;
printf ("<br>");
print "<strong>City : </strong>".$pincode;
printf ("<br>");
print "<strong>Email Address : </strong>".$email ;
printf ("<br>");
print "<strong>Password : </strong>".$password;
printf ("<br>");
?>