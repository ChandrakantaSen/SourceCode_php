<!--This page is used to insert customer's details in to datbaase.-->
<?php
session_start();
require "../include/connection.php";

//variable declaration begin
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email_address = $_POST['email_address'];
$company = $_POST['company'];
$job_title = $_POST['job_title'];
//$attachments = $_POST['image'];
$webpage = $_POST['webpage'];

$business_phone = $_POST['business_phone'];
$notes = $_POST['notes'];
$home_phone = $_POST['home_phone'];
$mobile_phone = $_POST['mobile_number'];
$fax_number = $_POST['fax_number'];

$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$country = $_POST['country'];
//variable declaration end

$insert_query = "insert into customers (company, lastname, firstname, email_address, 
				job_title, business_phone, home_phone, mobile_phone, fax_number, address,
				city, state_province, zip_postalcode, country_region, webpage, notes)
				values ('".$company."', '".$lastname."', '".$firstname."', '".$email_address."', 
						'".$job_title."', '".$business_phone."', '".$home_phone."', '".$mobile_phone."', 
						'".$fax_number."', '".$street."', '".$city."', '".$state."', '".$zip."', 
						'".$country."', '".$webpage."', '".$notes."')";
$run_insert_query = mysqli_query($connection, $insert_query);
if(!$run_insert_query)
{
	die(mysqli_error($connection));
}
header("location:customer_management.php");
?>