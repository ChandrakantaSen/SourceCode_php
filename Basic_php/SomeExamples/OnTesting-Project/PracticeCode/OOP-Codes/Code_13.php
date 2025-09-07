<?php
if(isset($_POST['submit']))
{
	$num = $_POST['num'];
}

class fnd_factor
{
	function factor($n)
	{
		for($i=1;$i<=$n;$i++)
		{
			if($n%$i==0)
			{
			 	$this->prime($i);
			}
		}
	}

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
			echo " ".$a;
		}
	}
}

$obj = new fnd_factor();
$obj ->factor($num);

?>