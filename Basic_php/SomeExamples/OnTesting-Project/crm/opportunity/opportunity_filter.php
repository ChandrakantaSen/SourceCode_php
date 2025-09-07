<?php
session_start();
require "../include/connection.php";
$token = $_REQUEST['token'];
$current_date = Date('l, Fd, Y');
$search_open_opportunity = "select * from opportunities where closed ='".$token."' ";
$run_open_opportunity = mysqli_query($connection, $search_open_opportunity);
if(!$run_open_opportunity)
{
	die(mysqli_error($connection));
}
?>
<html>
<head><title>Opportunities</title></head>
<body>
	<table align="center" border="0" width="50%">
		<tr><td>All Open Opportunities</td><td align="right"><?php echo $current_date; ?></td></tr>
		<tr align="center">
		<td colspan="2">
			<table align="center" border="1" width="100%">
			<tr>
				<td>Employee</td>
				<td>Customer</td>
				<td>Title</td>
				<td>Rating</td>
				<td>Est. Closed Date</td>
				<td>Forecast Value</td>
			</tr>
			<?php
				while($open_opportunities = mysqli_fetch_array($run_open_opportunity))
				{
			?>
			<tr align="center">
				<td>
					<?php
						$search_employee = "select * from employees where id = '".$open_opportunities['employee']."'"; 
						$run_employee = mysqli_query($connection, $search_employee);
						if(!$run_employee)
						{
							die(mysqli_error($connection));
						}
						$employee_details = mysqli_fetch_array($run_employee);
						echo $employee_details['firstname']." ".$employee_details['lastname'];
					?>
				</td>
				<td>
					<?php
						$search_customer = "select * from customers where id = '".$open_opportunities['customer']."'"; 
						$run_customer = mysqli_query($connection, $search_customer);
						if(!$run_customer)
						{
							die(mysqli_error($connection));
						}
						$customer_details = mysqli_fetch_array($run_customer);
						echo $customer_details['firstname']." ".$customer_details['lastname'];
					?>
				</td>
				<td><?php echo $open_opportunities['title']; ?></td>
				<td><?php echo $open_opportunities['rating']; ?></td>
				<td><?php echo $open_opportunities['est_closed_date']; ?></td>
				<td></td>
			</tr>
			<?php
				}
			?>
			</table>
		</td>
		</tr>
	</table>
</body>
</html>