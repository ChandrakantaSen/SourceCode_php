<?php

class call_Func_2_Func
{
	function b() 
	{
		echo 'test';
	}

	function c() 
	{

	}

	function a() 
	{
		$this->b();
	}
}

$obj = new call_Func_2_Func();
$obj->a(); 

?>