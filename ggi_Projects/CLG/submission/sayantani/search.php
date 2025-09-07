<html>
<head>
	
	<?php
		include_once("connection.php");
	
		if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
	?>
</head>
<body>
	<?php
		echo "<table border='1' width='500px' height='200px' align='center' cellpadding='1' cellspacing='1'>";		
		echo "<tr align='center' bgcolor='#002C40' style='color:#FFF'>
				<td>Name</td>
				<td>Birthday</td>
				<td>Nationality</td>
				<td>ph no</td>
				<td>E-mail</td>
				<td>Guardian</td>
				<td>Gender</td>
				<td>Address</td>
				<td>Qualification</td>
				<td>board</td>
				<td>course</td>
			  </tr>";
			  
			  
		$sql = "SELECT * FROM admission WHERE (`name` LIKE '%".$name."%')";
		$result = mysqli_query($connect,$sql);
				
		if(mysqli_num_rows($result) != 0)
		{
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr align='center' bgcolor='#0f7ea3'>
						<td>".$row['name']."</td> 
		 				<td>".$row['birthday']."</td>
						<td>".$row['nation']."</td> 
						<td>".$row['mobile']."</td> 
						<td>".$row['email']."</td> 
						<td>".$row['father']."</td> 
						<td>".$row['gender']."</td> 
						<td>".$row['address']."</td> 
						<td>".$row['qualification']."</td> 
						<td>".$row['board']."</td> 
						<td>".$row['course']."</td> 
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