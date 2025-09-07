<?php
// connect to the database
$db = mysql_connect("localhost", "user", "pass")
    or die("Connection Error: " . mysql_error());

mysql_select_db("someData") or die("bla bla ...");

// count the Data
$result = mysql_query("SELECT COUNT(*) AS count FROM myTable");
$row = mysql_fetch_assoc($result);
$count = $row['count'];

$query = "SELECT id, name, country, zipcode FROM myTable";

$result = mysql_query($query) or die("SQL Error: " . mysql_error());

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$myFriends[] = array(
		'id' => $row['id'],
		'name' => $row['name'],
		'country' => $row['country'],
		'zipcode' => $row['zipcode']
		);
}

$myData = array('myFriends' => $myFriends, 'totalCount' => $count);

echo json_encode($myData);

mysql_free_result($result);

mysql_close($db);
?>