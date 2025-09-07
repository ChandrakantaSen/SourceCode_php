<!--This page contains form to add employee-->
<?php
session_start();
require "../include/connection.php";
?>
<html>
<head><title>Add Customer Wizard</title></head>
<body>
<form name="add_customer" method="post" action="add_customer_reply.php" enctype="multipart/form-data">
	<table align="center" border="0">
		<tr>
			<td><a href="../dashboard.php">Home</a></td>
			<td colspan="2" align="center"> Welcome <?php echo $_SESSION['admin']; ?></td>
			<td align="right"><a href="../logout.php">Logout</a></td>
		</tr>
		<tr>
			<td colspan="4"><hr></td>
		</tr>
		<tr align="center">
			<td><a href="../customer/customer_management.php">Customer Management</a></td>
			<td align="center" colspan="2"><a href="../employee/employee_management.php">Employee Management</a></td>
			<td><a href="../opportunity/opportunity_management.php">Opportunity Management</a></td>
		</tr>
		<tr>
			<td colspan="4"><hr></td>
		</tr>
		<tr>
			<th colspan="4">Customer Add Wizard</th>
		</tr>

		<tr>
			<td colspan="4"><hr></td>
		</tr>
		
		<tr>
			<td>First Name</td><td><input type="text" name="firstname" required></td>
			<td>Company</td><td><input type="text" name="company" required></td>
		</tr>
		<tr>
			<td>Last Name</td><td><input type="text" name="lastname" required></td>
			<td>Job Title</td><td><input type="text" name="job_title" required></td>
		</tr>
		<tr>
			<td>Upload Image</td><td><input type="file" name="image"></td>
			<td>Webpage</td><td><input type="text" name="webpage"></td>
		</tr>
		<tr>
			<td>Email</td><td><input type="email" name="email_address" required></td>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td colspan="4"><hr></td>
		</tr>
		
		<tr><td colspan="2"><b>Phone Numbers</b></td> <td colspan="2"><b>Notes</b></td></tr>
		<tr><td>Business Phone</td><td><input type="number" name="business_phone"></td><td colspan="2" rowspan="10"><textarea name="notes" rows="18" cols="32"></textarea></td></tr>
		<tr><td>Home Phone</td><td><input type="number" name="home_phone" required></td></tr>
		<tr><td>Mobile Number</td><td><input type="number" name="mobile_number" required></td></tr>
		<tr><td>FAX Number</td><td><input type="number" name="fax_number"></td></tr>
		<tr>
			<td colspan="2"><hr></td>
		</tr>
		
		<tr><td colspan="2"><b>Address</b></td></tr>
		<tr><td>Street</td><td><textarea name="street" cols="21" required></textarea></td></tr>
		<tr><td>City</td><td><input type="text" name="city" required></td></tr>
		<tr><td>State/Province</td><td><input type="text" name="state" required></td></tr>
		<tr><td>ZIP/Postal Code</td><td><input type="number" name="zip" required></td></tr>
		<tr><td>Country/Region</td><td><input type="text" name="country" required></td></tr>
		<tr>
			<td colspan="4" align="center">
				<input type="submit" name="save" value="Save"> &nbsp &nbsp &nbsp &nbsp
				<input type="reset" value="Cancel">
			</td>
		</tr>
	</table>
</form>
</body>
</html>