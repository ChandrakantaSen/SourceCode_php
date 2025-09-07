<!DOCTYPE html>
<html>
<head>
	<title>Factorial using function</title>
</head>
<body>
	<div>
		<form name="frm1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<table border="1">
				<tr>
					<td>Enter the range:&nbsp;</td>
					<td><input type="text" name="rngValue" maxlength="10" placeholder="Enter the range"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="submit" value="submit"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
<?php
if(isset($_POST['submit'])) 
{
	$rng = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$rng = $_POST['rngValue'];
	}
	$f = 1;

	function fact($x) {

	global $f; 		# access outside declared variable into a function
	for($i = 1; $i <= $x; $i++) {
		$f = $f * $i;
	}
	return "Factorial Value is: ".$f;
}
$facto = fact($rng);

echo $facto;
}
?>