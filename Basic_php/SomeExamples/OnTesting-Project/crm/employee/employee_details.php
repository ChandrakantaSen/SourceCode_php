<!--This page contains form to display employee's details-->
<?php
session_start();
require "../include/connection.php";
$id = $_REQUEST['id'];

$search_query = "select * from employees where id = '".$id."'";
$run_search = mysqli_query($connection,$search_query);
$employee_details = mysqli_fetch_array($run_search);
if(!$run_search)
{
	die(mysqli_error($connection));
}
?>
<html>
<head><title><?php echo $employee_details['firstname']." ".$employee_details['lastname']; ?></title></head>
<body>
<form name="employee" method="post">
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
			<td>First Name</td><td><input type="text" name="firstname" value="<?php echo $employee_details['firstname']; ?>" readonly></td>
			<td>Company</td><td><input type="text" name="company" value="<?php echo $employee_details['company']; ?>" readonly></td>
		</tr>
		<tr>
			<td>Last Name</td><td><input type="text" name="lastname" value="<?php echo $employee_details['lastname']; ?>" readonly></td>
			<td>Job Title</td><td><input type="text" name="job_title" value="<?php echo $employee_details['job_title']; ?>" readonly></td>
		</tr>
		<tr>
			<td>Upload Image</td><td><input type="file" name="image"></td>
			<td>Webpage</td><td><input type="text" name="webpage" value="<?php echo $employee_details['webpage']; ?>" readonly></td>
		</tr>
		<tr>
			<td>Email</td><td><input type="email" name="email_address" value="<?php echo $employee_details['email']; ?>" readonly></td>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td colspan="4"><hr></td>
		</tr>
		
		<tr><td colspan="2"><b>Phone Numbers</b></td> <td colspan="2"><b>Notes</b></td></tr>
		<tr><td>Business Phone</td><td><input type="number" name="business_phone" value="<?php echo $employee_details['business_phone']; ?>" readonly></td>
			<td colspan="2" rowspan="10"><textarea name="notes" rows="18" cols="32" readonly><?php echo $employee_details['notes']; ?></textarea></td></tr>
		<tr><td>Home Phone</td><td><input type="number" name="home_phone" value="<?php echo $employee_details['home_phone']; ?>" readonly></td></tr>
		<tr><td>Mobile Number</td><td><input type="number" name="mobile_number" value="<?php echo $employee_details['mobile_phone']; ?>" readonly></td></tr>
		<tr><td>FAX Number</td><td><input type="number" name="fax_number" value="<?php echo $employee_details['fax_number']; ?>" readonly></td></tr>
		<tr>
			<td colspan="2"><hr></td>
		</tr>
		
		<tr><td colspan="2"><b>Address</b></td></tr>
		<tr><td>Street</td><td><textarea name="street" cols="21"><?php echo $employee_details['address']; ?></textarea></td></tr>
		<tr><td>City</td><td><input type="text" name="city" value="<?php echo $employee_details['city']; ?>" readonly></td></tr>
		<tr><td>State/Province</td><td><input type="text" name="state" value="<?php echo $employee_details['state_province']; ?>" readonly></td></tr>
		<tr><td>ZIP/Postal Code</td><td><input type="number" name="zip" value="<?php echo $employee_details['zip_postalcode']; ?>" readonly></td></tr>
		<tr><td>Country/Region</td><td><input type="text" name="country" value="<?php echo $employee_details['country_region']; ?>" readonly></td></tr>
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