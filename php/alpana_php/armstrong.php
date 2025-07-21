<?php
$n=$_POST['input'];
$sum=0;
$p=$n;
while((int)$n!=0)
{
$d = $n % 10;
$sum = $sum + pow($d,3);
$n = $n / 10;
}
if($sum==$p)
{
	print"armstrong num";
}
else
{
	print"not armstrong num";
}
?>