<!--This Page is fetching employee details data and display short description-->
<?php
session_start();
if($_SESSION['admin_id']=="")
{
	header("location:../index.php");
}
require "../include/connection.php";
//admin details fetch
$search_query = "select * from tbl_admin where id = '".$_SESSION['admin_id']."'";
$run_query = mysqli_query($connection, $search_query);
if(!$run_query)
{
	die(mysqli_error($connection));
}
$admin_details = mysqli_fetch_array($run_query);
//end of admin details fetch

//fetch employee details//
$search_employee_details = "select * from customers ORDER BY id";
$run_search = mysqli_query($connection, $search_employee_details);
if(!$run_search)
{
	die(mysqli_error($connection));
}
//end of code for fetch employee details
?>
<html>
<head><title>Employee Management</title></head>
<body>
<form name="employee_management" method="post" action="add_customer.php">
<table align="center" border="0">
	<tr><td><a href="../dashboard.php">Home</a></td><td></td><td align="right"><a href="../logout.php">Logout</a></td></tr>
	<tr><td colspan="3"><hr></td></tr>
	<tr align="center">
		<td><a href="../customer/customer_management.php">Customer Management</a></td>
		<td><a href="../employee/employee_management.php">Employee Management</a></td>
		<td><a href="../opportunity/opportunity_management.php">Opportunity Management</a></td>
	</tr>
	<tr><td colspan="3"><hr></td></tr>
	<tr>
	<td colspan="3" align="center">
			<table align="center" width="100%" border="1">
			<tr>
			<th>ID | </th>
			<th>First Name | </th>
			<th>Last Name | </th>
			<th>Email Address | </th>
			<th>Business Phone | </th>
			<th>Company | </th>
			<th>Job Title</th>
			</tr>
			<?php
		while($employee_details = mysqli_fetch_array($run_search))
		{
	?>
	<tr align="center">
		<td><a href="customer_details.php?id=<?php echo $employee_details['id']; ?>"><?php echo $employee_details['id']; ?></a></td>
		<td><?php echo $employee_details['firstname']; ?></td>
		<td><?php echo $employee_details['lastname']; ?></td>
		<td><?php echo $employee_details['email_address']; ?></td>
		<td><?php echo $employee_details['business_phone']; ?></td>
		<td><?php echo $employee_details['company']; ?></td>
		<td><?php echo $employee_details['job_title'];  ?></td>
	</tr>
	<?php
		}
	?>
			</table>
	</td>
	</tr>
	<tr>
		<td align="center" colspan="3"><input type="submit" name="submit" value="Add New Customer"></td>
	</tr>
</table>
</form>
</body>
</html>