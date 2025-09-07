<!--This page contains form contains add opportunity input boxes-->
<?php
session_start();
require "../include/connection.php";
?>
<html>
<head><title>Add Opportunity Wizard</title></head>
<body>
<form name="add_opportunity" method="post" action="add_opportunity_reply.php">
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
						<td>Title</td><td colspan="2"><input type="text" name="title" style="width: 300px;" autofocus></td>
					</tr>
					<tr>
						<td>Customer</td>
						<td>
							<select name="customer_name">
								<option></option>
								<!--Fetch customer name-->
								<?php
									$search_customer = "select * from customers";
									$run_customer = mysqli_query($connection, $search_customer);
									if(!$run_customer)
									{
										die(mysqli_error($connection));
									}
									while($customer_details = mysqli_fetch_array($run_customer))
									{
								?>
								<option value="<?php echo $customer_details['id']; ?>"><?php echo $customer_details['firstname']." ".$customer_details['lastname']; ?></option>
								<?php
									}
								?>
							</select>
						</td>
						<td>Notes</td>
					</tr>
					<tr>
						<td>Employee</td>
						<td>
							<select name="employee_name">
								<option></option>
								<!--Fetch customer name-->
								<?php
									$search_employees = "select * from employees";
									$run_employees = mysqli_query($connection, $search_employees);
									if(!$run_employees)
									{
										die(mysqli_error($connection));
									}
									while($employee_details = mysqli_fetch_array($run_employees))
									{
								?>
								<option value="<?php echo $employee_details['id']; ?>"><?php echo $employee_details['firstname']." ".$employee_details['lastname']; ?></option>
								<?php
									}
								?>
							</select>
						</td>
						<td rowspan="10"><textarea name= "description" rows="18" cols="35"></textarea></td>
					</tr>
					<tr>
						<td>Category</td>
						<td>
							<select name="category_name">
								<option></option>
								<!--Fetch customer name-->
								<?php
									$search_opportunities = "select * from opportunities";
									$run_opportunities = mysqli_query($connection, $search_opportunities);
									if(!$run_opportunities)
									{
										die(mysqli_error($connection));
									}
									while($opportunities_details = mysqli_fetch_array($run_opportunities))
									{
								?>
								<option value="<?php echo $opportunities_details['id']; ?>"><?php echo $opportunities_details['category']; ?></option>
								<?php
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Rating</td>
						<td>
							<select name="rating">
								<option></option>
								<option value="Hot">Hot</option>
								<option value="Warm">Warm</option>
								<option value="Cold">Cold</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>How Found</td>
						<td>
							<select name="how_found">
								<option></option>
								<option value="Customer Referral">Customer Referral</option>
								<option value="Advertisement">Advertisement</option>
								<option value="Phone Book">Phone Book</option>
								<option value="Convention">Convention</option>
								<option value="Cold Call">Cold Call</option>
								<option value="Internet">Internet</option>
								<option value="Pre-Existing Customer">Pre-Existing Customer</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Open Date</td>
						<td><input type="date" name="open_date"></td>
					</tr>
					<tr>
						<td>Est. Closed Date</td>
						<td><input type="date" name="close_date"></td>
					</tr>
					<tr>
						<td>Probability</td>
						<td><input type="text" name="probability" style="direction:RTL;"></td>
					</tr>
					<tr>
						<td>Est.Revenue</td>
						<td><input type="text" name="est_revenue" style="direction:RTL;"></td>
					</tr>
					<tr>
						<td>Closed</td>
						<td><input type="checkbox" name="closed" value="yes"></td>
					</tr>
					<tr>
						<td>Forecast Value</td>
						<td><input type="text" name="forecast_value"></td>
					</tr>
					<tr>
						<td colspan="3" align="center">
						<input type="submit" name="save" value="Save"> &nbsp &nbsp &nbsp 
						<input type="reset" value="Cancel">
						</td>
					</tr>
				</table>
			</td>
		</tr>
		
	</table>
</form>
</body>
</html>