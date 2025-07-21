<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>
	<fieldset>
	<legend>Search Form:</legend>
	<form name= "form2" action="search.php" method="post" align="center">
		<table border="0">
			<tr>
				<td><b>ID:</b></td>
				<td><input type="text" name="id" maxlength="30"/></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Search">
						<input type="reset" name="reset" value="Reset"></td>
			</tr>
		</table>
	</form>
	</fieldset>
	
	<?php
	$con = mysql_connect('localhost','root','');
	if(!$con)
	{
		die("Could not connect".mysql_error());
	}
	mysql_select_db("db_formaction",$con);		//database name db_formaction

	if (isset($_POST['submit']))
	{
		$id = $_POST['id'];

		if ($id !="")
		{

						$result = mysql_query("SELECT * FROM `reg_mstr` WHERE `id` = '$id'");
						echo"<table border='1'>
						<tr>

										<th>Id:</th>
										<th>Name:</th>
										<th>Father's Name:</th>
										<th>Mobile:</th>
										<th>DOB:</th>
										<th>E_mail:</th>
										<th>Sex:</th>
										<th>Address:</th>
										<th>DOB:</th>
										<th>Sex:</th>
										<th>Basic Salary:</th>
										<th>DA:</th>
										<th>TA:</th>
										<th>HRA:</th>
										<th>MA:</th>
										<th>GROSS_TOTAL:</th>
										<th>USER_NAME:</th>
										<th>PASSWORD:</th>
										<th>CURRENT_DATE:</th>
										<th>CURRENT_TIME:</th>
						</tr>";
						while($row = mysql_fetch_array($result))
						{
							echo"<tr>";
							echo"<td>".$row['id']."</td>";
							echo"<td>".$row['name']."</td>";
							echo"<td>".$row['fname']."</td>";
							echo"<td>".$row['mob']."</td>";
							echo"<td>".$row['dob']."</td>";
							echo"<td>".$row['email']."</td>";
							echo"<td>".$row['sex']."</td>";
							echo"<td>".$row['address']."</td>";
							echo"<td>".$row['dob']."</td>";
							echo"<td>".$row['sex']."</td>";
							echo"<td>".$row['basic_salary']."</td>";
							echo"<td>".$row['da']."</td>";
							echo"<td>".$row['ta']."</td>";
							echo"<td>".$row['hra']."</td>";
							echo"<td>".$row['ma']."</td>";
							echo"<td>".$row['gross_total']."</td>";
							echo"<td>".$row['username']."</td>";
							echo"<td>".$row['password']."</td>";
							echo"<td>".$row['current_date']."</td>";
							echo"<td>".$row['current_time']."</td>";
							//echo"<td>".$row['']."</td>";
							echo"</tr>";
							echo"</table>";
						}

			}
		else
		echo "Please Enter Emplouee Id.";
	}
?>
</body>
</html>