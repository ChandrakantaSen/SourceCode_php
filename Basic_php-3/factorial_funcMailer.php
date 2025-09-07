<?php
$rng = $_POST['rngValue'];
$f = 1;

function fact($x) {

	global $f; 		# access outside declared variable into a function
	for($i = 1; $i <= $x; $i++) {
		$f = $f * $i;
	}
	return $f;
}
$facto = fact($rng);

echo "Factorial Value is: ".$facto;
?>