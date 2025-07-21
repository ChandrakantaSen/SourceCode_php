<?php
include("connection.php");

$business_name = $_POST['business_name'];
$owner_name = $_POST['owner_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$product_type = $_POST['product_type'];
$target_customer = $_POST['target_customer'];
$card_type = $_POST['card_type'];
$tran_currency = $_POST['tran_currency'];
$currency_prefer = $_POST['currency_prefer'];
$average_amount = $_POST['average_amount'];
$estimated_transactions = $_POST['estimated_transactions'];
$website_launching = $_POST['website_launching'];
$business_plans = $_POST['business_plans'];

$login_time=date('Y-m-d h:i:s a',time());
	
$insert_query="insert into user_details(business_name,owner_name,email,phone,address,product_type,target_customer,card_type,tran_currency,currency_prefer,average_amount,estimated_transactions,website_launching,business_plans,date)
values ('".$business_name."','".$owner_name."', '".$email."','".$phone."','".$address."', '".$product_type."',
'".$target_customer."','".$card_type."','".$tran_currency."','".$currency_prefer."','".$average_amount."','".$estimated_transactions."','".$website_launching."','".$business_plans."', '".$login_time."')";

$run_query = mysqli_query($con, $insert_query);
$emp_id = mysqli_insert_id($con);
if(!$run_query)
{
	echo mysqli_error($con);
	die();
}



?>
<?php
/* subject and email varialbles*/

$emailSbuject = 'New Business Request';
$webMaster = 'd.sahoo@hexcodetechnologies.com';
//$webMaster = 'help@hexcodetechnologies.com';
$emailSbuject2 = 'Thank you for contacting Hexcode Technologies Pvt. Ltd.';
$client = ' $emailFeild\r\n';
/*gathering data variables*/

$business_name = $_POST['business_name'];
$owner_name = $_POST['owner_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$product_type = $_POST['product_type'];
$target_customer = $_POST['target_customer'];
$card_type = $_POST['card_type'];
$tran_currency = $_POST['tran_currency'];
$currency_prefer = $_POST['currency_prefer'];
$average_amount = $_POST['average_amount'];
$estimated_transactions = $_POST['estimated_transactions'];
$website_launching = $_POST['website_launching'];
$business_plans = $_POST['business_plans'];

// admin message body
$body= <<<EOD
Business Details of : $business_name

Business NAME : $business_name\n
Owner Name : $owner_name \n
Email : $email\n
Contact Number : $phone \n
Business Registered Address : $address\n
Product / Service Type : $product_type \n
Targeted Customer Location : $target_customer\n
Payment Card Type : $card_type \n
Transaction Currency(s) : $tran_currency\n
Currency(s) Preference : $currency_prefer \n
Average Amount Per Transaction : $average_amount\n
Estimated Online Transactions Per Month : $estimated_transactions \n
Website Launching Date : $website_launching\n
Details On Your Business Model And Plans : $business_plans \n
EOD;
// Client message body
$body2 = <<<EOD



Dear $owner_name,

	

         <p style="font-family:Calibri">Thank you for contacting Hexcode Technologies Pvt. Ltd.. One of our representative will contact you the soonest. If you have more questions or information needed, please let us know. We are happy to serve you ! </p>
         
        
    <p>Powered by HexCode Technologies</p>
<img src="http://www.hexcodetechnologies.com/images/logo.png" style="width:135px;height:50px">

EOD;
	$headers = "From: $email\r\n";
	$header = "From: noreply@hexcodetechnologies.com\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
	$success = mail($webMaster,$emailSbuject,$body,$headers);
	$success1 = @mail($emailFeild,$emailSbuject2,$body2,$header);
	/*Result*/
	
	
	$theResults = <<<EOD
EOD;

echo  "$theResults";

header("location:index.php?Thank You");
?>