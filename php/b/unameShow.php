<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mob=$_POST['mob'];

$flen=(strlen($fname));
$llen=(strlen($lname));

$x=(substr($fname,-$flen,3));
$y=(substr($lname,-$llen,3));
print 'Username is: '."LMiit/".$x.$y.substr($mob,3,2);
?>