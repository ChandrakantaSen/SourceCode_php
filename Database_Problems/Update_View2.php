<html>
<head>
    <style type="text/css">
        body,td,th {
            color: #FFFFFF;
        }    
    </style>
</head>

<body background="images/346.jpg">
<?php
            include_once("DAO.php");    
            
            /*************************************/
            /* View data as HTML Table Code Part */  
            /*************************************/
            $fn = $_POST['fname'];
            $result = mysql_query("SELECT distinct * FROM `reg` WHERE `fname`='$fn'");
            echo "<table border='1'>
                  <tr>
                     <th>First_Name</th> 
					 <th>Last_Name</th> 
					 <th>Age</th> 
					 <th>Address</th> 
					 <th>City</th>
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
            echo"</table>";
            mysql_close($con);    
?>
</body>
</html>