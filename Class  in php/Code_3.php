<?php
	class Code_3
	{
		function chk_Prime()
		{
			for($i = 1; $i <= 20; $i++)
			{
				$c = 0;
				for($j = 1; $j <= $i; $j++)
				{
					if($i % $j == 0)
					{
							$c++;
					}
				}
				if($c == 2)
				{
						echo " ".$i;
				}
			}
		}
	}	
	$obj = new Code_3();
		
	$obj->chk_Prime();	
?>