<?php
class A
{
	public $a=10,$b=20;
	function show()
	{
		echo "Numbers are: ".$this->a." and ".$this->b."<br>";
	}
	function add()
	{
		$c = $this->a + $this->b;
		echo "Sum is: ".$c."<br>";
	}
	function diff($x, $y)
	{
		$z = $x - $y;
		return $z;
	}
};
	$obj = new A();	//object creation	
	$obj -> show(); //function call show()
	$obj -> add();
	echo "Difference is: ".$obj -> diff(100,50);
?>