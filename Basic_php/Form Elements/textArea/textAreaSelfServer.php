<html>
	<body bgcolor="#ABD789C">
		<form name="frm1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<table border="1">
				<tr>
					<td>Enter Text: </td>
					<td><textarea rows="8" cols="30" name="txt1"></textarea></td>
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
				$name = $_POST['txt1'];
				
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
