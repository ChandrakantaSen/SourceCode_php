<!--This Page is fetching opportunity details data and display short description-->
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

//fetch opportunity details//
$search_opportunity = "select * from opportunities ORDER BY id";
$run_search = mysqli_query($connection, $search_opportunity);
if(!$run_search)
{
	die(mysqli_error($connection));
}
//end of code for fetch opportunity details
?>
<html>
<head><title>Opportunity Management</title></head>
<body>
<form name="opportunity_management" method="post" action="add_opportunity.php">
<table align="center" border="0">
	<tr><td><a href="../dashboard.php">Home</a></td><td></td><td align="right"><a href="../logout.php">Logout</a></td></tr>
	<tr><td colspan="3"><hr></td></tr>
	<tr align="center">
		<td><a href="../customer/customer_management.php">Customer Management</a></td>
		<td><a href="../employee/employee_management.php">Employee Management</a></td>
		<td><a href="../opportunity/opportunity_management.php">Opportunity Management</a>
			<br> <a href="opportunity_filter.php?token=no">Open</a> &nbsp &nbsp <a href="opportunity_filter.php?token=yes">Close</a></td></td>
	</tr>
	<tr><td colspan="3"><hr></td></tr>
	<tr>
	<td colspan="3" align="center">
			<table align="center" width="100%" border="0">
			<tr>
			<th>ID | </th>
			<th>Customer | </th>
			<th>Employee | </th>
			<th>Title | </th>
			<th>Category | </th>
			<th>Rating | </th>
			<th>Est. Closed Date|</th>
			<th>Probability|</th>
			<th>Est. Revenue|</th>
			<th>Forecast Value</th>
			</tr>
			<?php
		while($opportunity_details = mysqli_fetch_array($run_search))
		{
	?>
	<tr align="center">
		<td><a href="opportunity_details.php?id=<?php echo $opportunity_details['id']; ?>"><?php echo $opportunity_details['id']; ?></a></td>
		<td>
			<?php 
			$search_customer = "select * from customers where id = '".$opportunity_details['customer']."'";
			$run_customer = mysqli_query($connection, $search_customer);
			if(!$run_customer)
			{
				die(mysqli_error($connection));
			}
			$employee_details = mysqli_fetch_array($run_customer);
			echo $employee_details['firstname']." ".$employee_details['lastname'];
			?>
		</td>
		<td>
			<?php 
			$search_employee = "select * from employees where id = '".$opportunity_details['employee']."'";
			$run_employee = mysqli_query($connection, $search_employee);
			if(!$run_employee)
			{
				die(mysqli_error($connection));
			}
			$employee_details = mysqli_fetch_array($run_employee);
			echo $employee_details['firstname']." ".$employee_details['lastname'];
			?>
		</td>
		<td><?php echo $opportunity_details['title']; ?></td>
		<td><?php echo $opportunity_details['category']; ?></td>
		<td><?php echo $opportunity_details['rating']; ?></td>
		<td><?php echo $opportunity_details['est_closed_date'];  ?></td>
		<td><?php echo $opportunity_details['probability'];  ?></td>
		<td><?php echo $opportunity_details['est_revenue'];  ?></td>
		<tr><td colspan="10"><hr></td></tr>
	</tr>
	<?php
		}
	?>
			</table>
	</td>
	</tr>
	<tr>
		<td align="center" colspan="3"><input type="submit" name="submit" value="Add New Opportunity"></td>
	</tr>
</table>
</form>
</body>
</html>