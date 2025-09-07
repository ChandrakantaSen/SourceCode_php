<?php
	
	$aa = $_POST['num1'];
	$bb = $_POST['num2'];
	
	class Code_6
	{
		public function add($x, $y)
		{
			$c = $x + $y;
			return $c;
		}
	}
	
	$obj = new Code_6();
	$d = $obj->add($aa,$bb);
	
	
	echo "Sum is: ".$d;
?>