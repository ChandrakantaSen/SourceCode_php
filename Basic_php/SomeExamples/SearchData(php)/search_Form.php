<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css"/>	
	<?php
		include_once("DAO.php");
	
	if(isset($_POST['submit']))
	{
		$fname = $_POST['fname'];
	?>
</head>

<body>
	<?php
		echo "<table border='0' width='500px' height='200px' align='center' cellpadding='1' cellspacing='1'>";		
		echo "<tr align='center' bgcolor='#002C40' style='color:#FFF'>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Salary</td>
			  </tr>";
		$sql = mysql_query("SELECT * FROM emp WHERE (`fname` LIKE '%".$fname."%') OR (`lname` LIKE '%".$fname."%')");
				
		if(mysql_num_rows($sql) > 0)
		{
			while($results = mysql_fetch_array($sql))
			{
				echo "<tr align='center' bgcolor='#0f7ea3'>
						<td>".$results['fname']."</td> 
		 				<td>".$results['lname']."</td> 
						<td>".$results['salary']."</td>
					  </tr>" ;
			}
		}
		else
		{
			echo "<tr align='center' bgcolor='#6C0000'>
					<td colspan='3'>No results</td>
				  <tr>";
			echo "</table>";
		}
	}
	?>
</body>
</html> 