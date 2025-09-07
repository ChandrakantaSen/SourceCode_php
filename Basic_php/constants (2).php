<?php
	define("STRCONSTANT", "This is a string constant...");
	define("INTCONSTANT", 25000);
	define("FLOATCONSTANT",3.145);

	echo STRCONSTANT;
	echo "<br>";
	echo INTCONSTANT;
	echo "<br>";
	echo FLOATCONSTANT;
	echo "<br>";
	echo __LINE__;	// it shows current line number
	echo "<br>";
	echo __FIlE__;
	echo "<br>";
	echo PHP_VERSION;
	echo "<br>";
	echo PHP_OS;
	echo "<br>";
?>