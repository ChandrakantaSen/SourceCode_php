<?php

$fname = $_POST['a1'];
$lname = $_POST['a2'];
$mobile_num = $_POST['a3'];

$username = substr($fname,0,3)."/".substr($lname,-2,2)."@".substr($mobile_num,3,2);

print"username is: "."<b>".$username."</b>"."<br>";
?>
