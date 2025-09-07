<html>
	<body bgcolor="#F3E2A9">
		<form name="frm1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<table border="1">
				<tr>
					<td>Enter gender: </td>
					<td>
						MALE:<input type="radio" name="gender" value="Male"/>
						FEMALE:<input type="radio" name="gender" value="Female"/>
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
				$name = $_POST['gender'];
				
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
