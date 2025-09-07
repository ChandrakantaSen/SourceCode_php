<html>
	<body bgcolor="#F3E2A9">
		<form name="frm1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<table border="1">
				<tr>
					<td>Enter Vehicle Type: </td>
					<td>
						ROCKET:<input type="checkbox" name="cb" value="ROCKET"/>
						BUS:<input type="checkbox" name="cb" value="BUS"/>
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
				$name = $_POST['cb'];
				
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
