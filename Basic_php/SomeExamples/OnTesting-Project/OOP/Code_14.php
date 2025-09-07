<?php
if(isset($_POST['submit']))
{
	$num = $_POST['num'];
}

class chk_Prime
{
	function prime($a)
	{
		$c = 0;
		for($j = 1; $j <= $a; $j++)
		{
			if($a % $j == 0)
			{
				$c++;
			}
		}
		if($c == 2)
		{
			echo "Prime Number";
		}
		else
		{
			echo "Composite Number";
		}
	}
}

$obj = new chk_Prime();
$obj ->prime($num);
?>	