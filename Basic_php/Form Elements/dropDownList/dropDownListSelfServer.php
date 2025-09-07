<html>
	<body bgcolor="#CDFAB5">
		<form name="frm1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<table border="1">
				<tr>
					<td>Enter the car name:</td>
					<td>
						<select name="car">
							<option value="" selected>Select any Car</option>
							<option value="volvo">VOLVO</option>
							<option value="maruti">MARUTI</option>
							<option value="geep">GEEP</option>
							<option value="van">VAN</option>
							<option value="cycle">CYCLE</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="submit" value="submit"/></td>
				</tr>
			</table>
		</form>
		
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				// collect value of input field
				$name = $_POST['car'];
				
				if (empty($name)) 
				{
					echo "Name is empty";
				} 
				else 
				{
					echo $name;
				}
			}
		?>
		
	</body>
</html>
