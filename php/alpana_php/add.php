<?php
function add()
{
$a=$_POST['a1'];
$b=$_POST['a2'];
$c=($a+$b);
echo"Sum is ".$c;
}
add();
?>