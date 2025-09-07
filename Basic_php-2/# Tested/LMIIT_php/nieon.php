<?php
$n=$_POST['input'];
$sum = 0;
$p=$n*$n;

do
{
$d=$p%10;
$sum=$sum+$d;
$p=$p/10;
}while($p!=0);

if($sum==$n)
{
print"neon num";
}
else
{
print"not neon num";
}
?>
