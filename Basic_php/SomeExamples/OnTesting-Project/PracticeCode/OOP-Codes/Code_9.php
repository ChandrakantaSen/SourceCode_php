<?php
	
	class test
	{
		public $f0 = 0;
		public $f1 = 1;
		
		function fibo()
		{
			echo $this->f0." ".$this->f1;	
			for($i=2;$i<=9;$i++)
			{
				$f2 = $this->f0 + $this->f1;
				$this->f0 = $this->f1;
				$this->f1 = $f2;
				
				echo " ".$f2;
			}
		}
	}	
?>
<?php
	
	class Code_9
	{
		function call_func()
		{
			$obj = new test();	
			$obj->fibo();
		}
	}
	
	$obj_1 = new Code_9();
	$obj_1->call_func();
?>