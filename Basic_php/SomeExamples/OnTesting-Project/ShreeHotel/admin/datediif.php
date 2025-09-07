<?php

if(isset($_POST['submit']))
{
	$start = date_create($_POST['check_in']);
	$end = date_create($_POST['check_out']);
	$result = date_diff($end, $start);
	print_r($result->d);
}
else
{
	
}
?>
<html>
<body>
	<form name="datediff" method="post">
		Check in <input type="date" name="check_in">
		<br>Check our <input type="date" name="check_out">
		<input type="submit" name="submit" value="calculate"> 
	</form>
</body>
</html>