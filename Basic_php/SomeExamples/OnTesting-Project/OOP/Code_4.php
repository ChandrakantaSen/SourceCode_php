<?php
if(isset($_POST['submit']))
{
	$num = $_POST['num'];
}

class Code_4
{
	function chk_Prime($a)
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
			return $a;
		}
	}
	function chk_factor()
	{
		function factor($n)
		{
			for($i=1;$i<=$n;$i++)
			{
				if($n%$i==0)
				{
					echo " ".chk_Prime($i);
				}
				else
				{
					echo "if block not working";
				}
			}
		}
	}
	/*function chk_lrg_factr($b)
	{
		for($k = $b; $k >= $b; $k--)
		{

		}
	}*/

}	

$obj = new Code_4();
$obj -> chk_factor($num);
?>