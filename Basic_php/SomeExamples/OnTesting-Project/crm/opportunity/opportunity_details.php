<!--This page dispaly opportunity details-->
<?php
session_start();
require "../include/connection.php";
$opportunities_id = $_REQUEST['id'];
$search_opportunities = "select * from opportunities where id = '".$opportunities_id."'";
$run_opportunities = mysqli_query($connection,$search_opportunities);
if(!$run_opportunities)
{
	die(mysqli_error($connection));
}
$opportunity_details = mysqli_fetch_array($run_opportunities);
$open_date = new DateTime($opportunity_details['open_date']);
$close_date = new DateTime($opportunity_details['est_closed_date']);
?>
<html>
<head><title>Opportunity Details</title></head>
<body>
<form name="opportunity_details" method="post">
	<table align="center" border="0">
		<tr>
			<td><a href="../dashboard.php">Home</a></td>
			<td align="center"> Welcome <?php echo $_SESSION['admin']; ?></td>
			<td align="right"><a href="../logout.php">Logout</a></td>
		</tr>
		<tr>
			<td colspan="3"><hr></td>
		</tr>
		<tr align="center">
			<td><a href="../customer/customer_management.php">Customer Management</a></td>
			<td align="center"><a href="../employee/employee_management.php">Employee Management</a></td>
			<td><a href="../opportunity/opportunity_management.php">Opportunity Management</a></td>
		</tr>
		<tr>
			<td colspan="3"><hr></td>
		</tr>
		<tr>
			<td colspan="3">
				<table border="0" width="100%">
					<tr>
						<td>Title</td>
						<td colspan="2">
							<input type="text" name="title" style="width: 300px;" value = "<?php echo $opportunity_details['title']; ?>">
						</td>
					</tr>
					<tr>
						<td>Customer</td>
						<td>
							<?php
								$search_customer = "select * from customers where id ='".$opportunity_details['customer']."'";
								$run_customer = mysqli_query($connection, $search_customer);
								if(!$run_customer)
								{
									die(mysqli_error($run_customer));
								}
								$customer_details = mysqli_fetch_array($run_customer);
							?>
							<input type="text" name="customer" value= "<?php echo $customer_details['firstname']." ".$customer_details['lastname']; ?>">
						</td>
						<td>Notes</td>
					</tr>
					<tr>
						<td>Employee</td>
						<td>
							<?php
								$search_employee = "select * from employees where id ='".$opportunity_details['employee']."'";
								$run_employee = mysqli_query($connection, $search_employee);
								if(!$run_employee)
								{
									die(mysqli_error($run_employee));
								}
								$employee_details = mysqli_fetch_array($run_employee);
							?>
							<input type="text" name="customer" value= "<?php echo $employee_details['firstname']." ".$employee_details['lastname']; ?>">
						</td>
						<td rowspan="10"><textarea name= "description" rows="18" cols="35"><?php echo $opportunity_details['description']; ?></textarea></td>
					</tr>
					<tr>
						<td>Category</td>
						<td>
							<select name="category_name">
								<option></option>
								<!--Fetch customer name-->
								
								<option value=""></option>
								
							</select>
						</td>
					</tr>
					<tr>
						<td>Rating</td>
						<td>
							<input type="text" name="rating" value="<?php echo $opportunity_details['rating']; ?>">
						</td>
					</tr>
					<tr>
						<td>How Found</td>
						<td>
							<input type="text" name="how_found" value="<?php echo $opportunity_details['how_found']; ?>">
						</td>
					</tr>
					<tr>
						<td>Open Date</td>
						<td><input type="text" name="how_found" value="<?php echo $open_date->format('d-F-Y'); ?>"></td>
					</tr>
					<tr>
						<td>Est. Closed Date</td>
						<td><input type="text" name="how_found" value="<?php echo $close_date->format('d-F-Y'); ?>"></td>
					</tr>
					<tr>
						<td>Probability</td>
						<td><input type="text" name="probability" value="<?php echo $opportunity_details['rating']; ?>"></td>
					</tr>
					<tr>
						<td>Est.Revenue</td>
						<td><input type="text" name="est_revenue" style="direction:RTL;" value="<?php echo $opportunity_details['est_revenue']; ?>"></td>
					</tr>
					<tr>
						<td>Closed</td>
						<td>
							<?php
								if($opportunity_details['closed']=='yes')
								{
							?>
								<input type="checkbox" name="closed" checked="checked">
							<?php
								}
								else
								{
							?>
								<input type="checkbox" name="closed">
							<?php
								}
							?>
						</td>
					</tr>
					<tr>
						<td>Forecast Value</td>
						<td><input type="text" name="forecast_value"></td>
					</tr>
				</table>
			</td>
		</tr>
		
	</table>
</form>
</body>
</html>