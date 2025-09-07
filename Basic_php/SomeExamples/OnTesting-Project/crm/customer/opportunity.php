<?php
session_start();
require "../include/connection.php";
$emp_id = $_REQUEST['emp_id'];
$emp_name = $_REQUEST['emp_name'];
//search code for opportunity begin
$search_opportunity = "select * from opportunities where employee = '".$emp_id."'";
$run_search = mysqli_query($connection, $search_opportunity);
if(!$run_search)
{
	die(mysqli_error($connection));
}
$opportunity_details = mysqli_fetch_array($run_search);
//end of search code for opportunity

//search customer according to employee's opportunity
$search_customer = "select * from employees where id = '".$opportunity_details['employee']."'";
$run_customer = mysqli_query($connection, $search_customer);
if(!$run_customer)
{
	die(mysqli_error($connection));
}
$customer_details = mysqli_fetch_array($run_customer);
//end of search customer
?>
<html>
<head><title>Opportunity</title></head>
<body>
	<form name="opportunity" method="post">
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
		<tr align="center">
			<td colspan="4">
			<table align="center" border="1">
				<tr>
				<td>Title</td>
				<td>Customer</td>
				<td>Employee</td>
				<td>Rating</td>
				<td>Est. Closed Date</td>
				<td>Probability</td>
				<td>Est. Revenue</td>
				<td>Forecast Vlaue</td>
				</tr>
				<tr>
					<td><?php echo $opportunity_details['title']; ?></td>
					<td><?php echo $emp_name; ?></td>
					<td><?php echo $customer_details['firstname']." ".$customer_details['lastname']; ?></td>
					<td><?php echo $opportunity_details['rating']; ?></td>
					<td><?php echo $opportunity_details['est_closed_date']; ?></td>
					<td><?php echo $opportunity_details['probability']; ?></td>
					<td><?php echo $opportunity_details['est_revenue']; ?></td>
					<td></td>
				</tr>
			</table>
			</td>
		</tr>
		</table>
	</form>
</body>
</html>