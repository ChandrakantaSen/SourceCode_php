<?php
	
	$number = $_POST['num'];
	
	class factorial
	{
		function facto($num)
		{
			$f=1;
			
			for($i=1;$i<=$num;$i++)
			{
				$f = $f * $i;
			}
			echo "Factorial is: ".$f;
		}
	}
	
	$obj = new factorial();
	$obj -> facto($number);
?>