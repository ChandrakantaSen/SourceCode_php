<html>
<head>
</head>
<body>
	<fieldset>
	<legend>Registration Form:</legend>
	
	<form name= "form1" action="db_action.php" method="post">
		<table border="0">
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="" maxlength="30"/></td>
			</tr>
			<tr>
				<td>Father's Name:</td>
				<td><input type="text" name="fname" value="" maxlength="30"/></td>
			</tr>
			<tr>
				<td>Mobile:</td>
				<td><input type="text" name="mob" value="" maxlength="10"/></td>
			</tr>
			<tr>
				<td>DOB:</td>
				<td><input type="text" name="dob" value="" maxlength="10"/></td>
			</tr>
			<tr>
				<td>E_mail:</td>
				<td><input type="text" name="email" value="" maxlength="30"/></td>
			</tr>
			<tr>
				<td>Sex:</td>
				<td>
						Male:<input type="radio" name="sex" value="Male" checked />&nbsp;
						Female:<input type="radio" name="sex" value="Female"/>
				</td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type="textarea" name="address" rows="10" cols="30" maxlength="50"/></td>
			</tr>
			<tr>
				<td>Basic Salary:</td>
				<td><input type="text" name="sal" maxlength="30"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Register">
						<input type="reset" name="reset" value="Reset"></td>
			</tr>
		</table>
	</form>
	</fieldset>
</body>
</html>