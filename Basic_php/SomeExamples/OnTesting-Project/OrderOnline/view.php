<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('could not connect to server:'.mysql_error());
}
mysql_select_db("orderonline",$con);
$result=mysql_query("SELECT * FROM `order` ");
echo "<table border='1'>
<tr>
<th>Sl_No</th>
<th>First Name</th>
<th>Last Name</th>
<th>Company</th>
<th>Address</th>
<th>Email</th>
<th>Contact</th>
<th>City</th>
<th>State</th>
<th>Postal Code</th>
<th>Product</th>
<th>Black</th>
<th>Brown</th>
<th>White</th>
<th>Beige</th>
<th>Silver</th>
<th>Golden</th>
<th>Bronze</th>
<th>Another Colour</th>
</tr>";
while($row= mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['Sl_No']."</td>";
	echo "<td>".$row['First Name']."</td>";
	echo "<td>".$row['Last Name']."</td>";
	echo "<td>".$row['Company']."</td>";
	echo "<td>".$row['Address']."</td>";
	echo "<td>".$row['Email']."</td>";
	echo "<td>".$row['Contact']."</td>";
	echo "<td>".$row['City']."</td>";
	echo "<td>".$row['State']."</td>";
	echo "<td>".$row['Postal Code']."</td>";
	echo "<td>".$row['Product']."</td>";
	echo "<td>".$row['Black']."</td>";
	echo "<td>".$row['Brown']."</td>";
	echo "<td>".$row['White']."</td>";
	echo "<td>".$row['Beige']."</td>";
	echo "<td>".$row['Silver']."</td>";
	echo "<td>".$row['Golden']."</td>";
	echo "<td>".$row['Bronze']."</td>";
	echo "<td>".$row['Another Colour']."</td>";
	echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
</body>
</html>