<html>
	<body bgcolor="#F3E2A9">
		<form name="frm1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<table border="1">
				<tr>
					<td>Enter Name: </td>
					<td><input type="text" name="t1" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="submit" value="submit"/></td>
				</tr>
			</table>
		</form>
		
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") 
			{
				// collect value of input field
				$name = $_POST['t1'];
				
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
