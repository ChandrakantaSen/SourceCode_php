<?php
	
	$weather = $_POST['weather'];

	foreach($weather as $w)
	{
		echo "<li>$w</li>\n"; 
	}
	
?>