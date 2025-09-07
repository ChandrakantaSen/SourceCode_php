<?php
	$arr[0] = "hello world";

	echo "Value is: "."<b>".$arr[0]."</b>"."<br/>";
	echo "<br/>";

	# example of numeric array
	$arr_1 = array("Java","C#","C++","HTML");

	echo "example of numeric array"."<br>";
	echo "Value is: "."<b>".$arr_1[0]."</b>"."<br/>";
	echo "Value is: "."<b>".$arr_1[1]."</b>"."<br/>";
	echo "Value is: "."<b>".$arr_1[2]."</b>"."<br/>";
	echo "Value is: "."<b>".$arr_1[3]."</b>"."<br/>";
	echo "<br/>";

	# example of associative array
	$arr_2 = array('One' => 100, 'Two' => 101, 'Three' => 102, 'Four' => 103);

	echo "example of associative array"."<br>";
	echo "Value is: "."<b>".$arr_2['One']."</b>"."<br/>";
	echo "Value is: "."<b>".$arr_2['Two']."</b>"."<br/>";
	echo "Value is: "."<b>".$arr_2['Three']."</b>"."<br/>";
	echo "Value is: "."<b>".$arr_2['Four']."</b>"."<br/>";
	echo "<br/>";

	# example of multi-dimentional array
	$arr_3 = array("Cars" => array("BMW", "Maruti", "TVS"),
				   "Animals" => array("Tiger", "Lion", "Wolf"),
				   "Birds"	=> array("Crow", "Peacock", "Hen")
				  );

	echo "example of multi-dimentional array"."<br>";
	echo "Value is: "."<b>".$arr_3['Cars']['2']."</b>"."<br/>";
	echo "Value is: "."<b>".$arr_3['Animals']['0']."</b>"."<br/>";
	echo "Value is: "."<b>".$arr_3['Birds'][1]."</b>"."<br/>";
	echo "<br/>";
?>