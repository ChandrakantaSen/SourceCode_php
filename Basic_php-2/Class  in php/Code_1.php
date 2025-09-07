<?php
	class Test
	{
		 public $a = 10;
		 public $b = 20;
		 public $sum = 0;
		
		public function add()
		{
			$sum = ($this->a + $this->b);
			return $sum;
		}
	}
	
	$obj = new Test();
	$c = $obj->add();
	
	echo "Sum is: ".$c;	
?>