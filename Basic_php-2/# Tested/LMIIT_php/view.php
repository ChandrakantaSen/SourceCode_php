<?php

	include_once("DAO.php");
	
	$sql = mysql_query("Select * from `emp`");
	
	echo "<table border='1'>
		<tr>
			<th>First Name</th>	
			<th>Last Name</th>
			<th>Salary</th>
		</tr>";
	
	while($row = mysql_fetch_array($sql))
	{
		echo "<tr>";
		echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['lname']."</td>";
		echo "<td>".$row['salary']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	mysql_close ($con);
?>