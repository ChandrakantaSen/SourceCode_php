<?php
$a=$_POST['a1'];
$b=$_POST['a2'];

function add($x,$y)
{
$c=($x+$y);
echo"Sum is ".$c;
}
add($a,$b);
?>