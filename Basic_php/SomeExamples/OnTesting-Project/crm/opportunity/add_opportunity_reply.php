<?php
session_start();
require "../include/connection.php";
//variable declaration begin
$title = $_POST['title'];
$customer = $_POST['customer_name'];
$employee = $_POST['employee_name'];
$notes = $_POST['description'];
$rating = $_POST['rating'];
$how_found = $_POST['how_found'];
$open_date = $_POST['open_date'];
$close_date = $_POST['close_date'];
$probability = $_POST['probability'];
$est_revenue = $_POST['est_revenue'];
if(isset($_POST['closed']))
{
	$closed = $_POST['closed'];
}
else
{
	$closed = "no";
}
//end of variable declaration
$insert_query = "insert into opportunities (title, customer, employee, 
				rating, how_found, open_date, est_closed_date,
				probability, est_revenue, closed, description) values 
				('".$title."', '".$customer."', '".$employee."', 
				 '".$rating."', '".$how_found."', '".$open_date."', 
				 '".$close_date."', '".$probability."', '".$est_revenue."', 
				 '".$closed."', '".$notes."')";
$run_query = mysqli_query($connection, $insert_query);
if(!$run_query)
{
	die(mysqli_error($connection));
}
header("location:opportunity_management.php");
?>