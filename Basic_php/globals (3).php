<?php
	
	$var1 = 50;
	$var2 = 85;

	function globals_sum()
	{
		$GLOBALS["var2"] = $GLOBALS["var1"] + $GLOBALS["var2"];
	}

	globals_sum();

	echo "Sum is: ".$var2;
?>