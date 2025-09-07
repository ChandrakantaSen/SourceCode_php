<html>
<body>
	<form name="frm1" method="post" action="User_Input_Array_Mailer.php">
	<table>
		<tr>
			<td>Enter the value:</td>
			<td>
				<input type="checkbox" name="weather[]" value="sunshine"/>Sunshine<br/>
				<input type="checkbox" name="weather[]" value="clouds"/>Clouds<br/>
				<input type="checkbox" name="weather[]" value="rain"/>Rain<br/>
				<input type="checkbox" name="weather[]" value="hail"/>Hail<br/>
				<input type="checkbox" name="weather[]" value="sleet"/>Sleet<br/>
				<input type="checkbox" name="weather[]" value="snow"/>Snow<br/>
				<input type="checkbox" name="weather[]" value="wind"/>Wind<br/>
				<input type="checkbox" name="weather[]" value="cold"/>Cold<br/>
				<input type="checkbox" name="weather[]" value="heat"/>Heat<br/>	
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit"  name="submit"  value="submit"></td>
		</tr>
	</table>
	</form>
</body>
</html>