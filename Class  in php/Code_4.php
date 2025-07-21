<?php
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
						echo " ".$a;
				}
		}
		function chk_factor()
		{
			$num = 10;
			
			for($i = $num; $i >= 1; $i--)
			{
				if($num % $i == 0)
				{
					$this -> chk_Prime($i);	
				}
			}
		}
		function chk_lrg_factr($b)
		{
			for($k = $b; $k >= $b; $k--)
			{
				
			}
		}
		
	}	
		$obj = new Code_4();
		
		$obj -> chk_factor();
?>