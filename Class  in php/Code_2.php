<?php
	
	class A
	{
		public $a = 10, $b = 20;
		public function add()
		{
			return $this->a + $this->b;
		}
	}
	
	$obj = new A();
	echo $obj->add();
?>