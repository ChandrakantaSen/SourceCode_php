<!DOCTYPE html>
<html>
<head>
	<title>Controlling Array using While Loop</title>
</head>
<body>
<?php
	$arr = array('Andra Pradesh' => 'Hydrabad', 'Goa' => 'Panaji', 'West Bengal' => 'Kolkata', 'Bihar' => 'Patna');

	echo "<table border = '1'>";
	echo "<tr>";
	echo "<th>Countries</th>";
	echo "<th>Capitals</th>";
	echo "<tr>";

	reset($arr);

	while (list($key, $value) = each($arr)) {
		
		echo "<tr>";
		echo "<td>$key</td>";
		echo "<td>$value</td>";
		echo "<tr>";
	}
	echo "<table>";
?>
</body>
</html>