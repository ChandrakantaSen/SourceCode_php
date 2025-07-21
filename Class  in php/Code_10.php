<?php
	
	$a = 10;
	
	class test
	{
		function fun()
		{
			echo $GLOBALS['a'];		
		}
		
	}
	
	$obj = new test();
	$obj->fun();
?>