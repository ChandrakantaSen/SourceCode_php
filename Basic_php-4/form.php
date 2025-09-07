<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>
	<fieldset>
	<legend>Registration Form:</legend>
	<form name= "form1" action="mailer.php" method="post" align="center" background="./wood_bg.jpg">
		<table border="0">
			<tr>
				<td><b>First Name:</b></td>
				<td><input type="text" name="firstname" value="" placeholder="--Enter the name--" required="true" maxlength="30"/></td>
			</tr>
			<tr>
				<td><b>Last Name:</b></td>
				<td><input type="text" name="lastname" value="" placeholder="--Enter the name--" required="true" maxlength="15"/></td>
			</tr>
			<tr>
				<td><b>Sex:</b></td>
				<td>
						Male:<input type="radio" name="sex" value="Male" checked />&nbsp;
						Female:<input type="radio" name="sex" value="Female"/>
				</td>
			</tr>
			<tr>
				<td> <b>Department:</b></td>
				<td>
						<select name="department" >
							<option value="-Select the Department--">-Select the Department--</option>
							  <option value="MCA">MCA</option>
							  <option value="CS">CS</option>
							  <option value="ECE">ECE</option>
							  <option value="IT">IT</option>
						</select>
				</td>
			</tr>
			<tr>
				<td><b>Address:</b></td>
				<td><input type="textarea" name="address" rows="10" cols="30" placeholder="--Enter the address--" required="true" 									  maxlength="50"/></td>
			</tr>
			<tr>
				<td><b>City:</b></td>
				<td><input type="text" name="city" value="" placeholder="--Enter the city--" maxlength="10"/></td>
			</tr>
			<tr>
			<td><b>Pincode:</b></td>
			<td><input type="text" name="pincode" value="" placeholder="--Enter the pincode--" maxlength="10"/></td>
			</tr>
			<tr>
				<td><b>Email Address:</b></td>
				<td><input type="text" name="email" placeholder="--Enter the email--" maxlength="30" /></td>
			</tr>
			<tr>
				<td><b>Password:</b></td>
				<td><input type="password" name="password" maxlength="10" placeholder="--Enter the password--"/></td>
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