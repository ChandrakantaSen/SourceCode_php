<!--This Page is dashboard of CRM, display total result-->
<?php
session_start();
if($_SESSION['admin_id']=="")
{
	header("location:index.php");
}
require "include/connection.php";
//admin details fetch
$search_query = "select * from tbl_admin where id = '".$_SESSION['admin_id']."'";
$run_query = mysqli_query($connection, $search_query);
if(!$run_query)
{
	die(mysqli_error($connection));
}
$admin_details = mysqli_fetch_array($run_query);
//end of admin details fetch

//code for count customers
$search_employee = "select count(*) as emplooyee_count from employees";
$run_employee = mysqli_query($connection, $search_employee);
if(!$run_employee)
{
	die(mysqli_error($connection));
}
$employee_result = mysqli_fetch_array($run_employee);
//end of count customers

//code for count customers
$search_customers = "select count(*) as customer_count from customers";
$run_customers = mysqli_query($connection, $search_customers);
if(!$run_customers)
{
	die(mysqli_error($connection));
}
$customer_result = mysqli_fetch_array($run_customers);
//end of count customers
?>
<html>
<head><title><?php echo $_SESSION['admin']; ?></title></head>
<body>
<form name="employee_management" method="post" action="add_customer.php">
<table align="center" border="0" width="50%">
	<tr><td><a href="dashboard.php">Home</a></td><td align="center">Welcome <?php echo $_SESSION['admin']; ?></td><td align="right"><a href="logout.php">Logout</a></td></tr>
	<tr><td colspan="3"><hr></td></tr>
	<tr align="center">
		<td><a href="customer/customer_management.php">Customer Management</a></td>
		<td><a href="employee/employee_management.php">Employee Management</a></td>
		<td><a href="opportunity/opportunity_management.php">Opportunity Management</a></td>
	</tr>
	<tr><td colspan="3"><hr></td></tr>
	<tr>
		<td align="center">Total Customer(s)<br><?php echo $employee_result['emplooyee_count']; ?></td>
		<td align="center">Total Employee(s)<br><?php echo $customer_result['customer_count']; ?></td>
		<td align="center">Total Opportunitie(s)</td>
		
	</tr>
</table>
</form>
</body>
</html>