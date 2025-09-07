<?php
	class PalindromeCheck
	{
		public $no = 123;
		
		public function chk_palindrome()
		{
			$temp = $this -> no;
			$cpy = $this -> no;
			$sum = 0;
			
			while($temp > 0)
			{
				$d = ($temp % 10);
				$sum = ($sum * 10) + $d;
				$temp = (int)($temp / 10);	
			}
			
			
			if($sum == $cpy)
			{
				echo "Palindrome number ".$sum;	
			}
			else
			{
				echo "non-Plindrome number ".$sum;
			}
		}		
	}
	
	$obj = new PalindromeCheck();
	$obj -> chk_palindrome();

?>