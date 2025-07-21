<?php
## variable declaration
$nm = $_POST['own_nm'];
$eml = $_POST['own_eml'];
$mbl = $_POST['own_mbl'];
$add = $_POST['own_add'];
$bs_nm = $_POST['bis_nm'];
$bs_add = $_POST['bis_add'];
$prod = $_POST['bis_prod'];
$type = $_POST['bis_type'];

## Mail body
$to = "$eml";
$subject = "Thank You for your co-operation | HCT, HKG";

$message = "
<html>
<head>
<title>Thank you | HexCode Technologies<title>
</head>
<body>
<p>Thank you for contacting Hexcode Technologies Pvt. Ltd.. One of our representative will contact you the soonest. If you have more questions or information needed, please let us know. We are happy to serve you ! </p>
<table border='1'>
<tr>
	<td>Name: </td>
	<td>$nm</td>
</tr>
<tr>
	<td>Email: </td>
	<td>$eml</td>
</tr>
<tr>
	<td>Mobile: </td>
	<td>$mbl</td>
</tr>
<tr>
	<td>Address: </td>
	<td>$add</td>
</tr>
<tr>
	<td>Business Name: </td>
	<td>$bs_nm</td>
</tr>
<tr>
	<td>Business Product: </td>
	<td>$prod</td>
</tr>
<tr>
	<td>Business Type: </td>
	<td>$type</td>
</tr>
<tr>
	<td>Business Address: </td>
	<td>$bs_add</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: noreply@hexcodetechnologies.com' . "\r\n";
$headers .= 'Cc: chandrakanta@hexcodetechnologies.com' . "\r\n";

mail($to,$subject,$message,$headers);

header("location:index.php?Thank You");
?>