<?php
$n=$_POST['input'];
$sum=0;
$p=$n;
$f=1;

	while((int)$p!=0)
	{
		$d = $p % 10;
		for($i=1;$i<=$d;$i++)
		{
			$f = $f*$i;
		}
		$sum = $sum+$f;
		$p=$p/10;
		$f=1;
	}
	if($sum==$n)
	{
		echo "Krishnamurthy Number";
	}
	else
	{
		echo "Not Krishnamurthy Number";
	}
?>