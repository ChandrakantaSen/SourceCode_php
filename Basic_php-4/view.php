<?php
$con = mysql_connect('localhost','root','');
if(!$con)
{
	die("Could not connect".mysql_error());
}
mysql_select_db("chandra",$con);		//database name db_formaction
$result = mysql_query("SELECT * FROM `reg`");

echo "<table border='1'>
                    <tr>
                       <th>First_Name</th> <th>Last_Name</th> <th>Age</th> <th>Address</th> <th>City</th>
                    </tr>";

                    
while($row = mysql_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "</tr>";
}
echo"</table>"
?>