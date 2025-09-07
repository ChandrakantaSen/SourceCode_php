
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>View Data Document</title>
</style><style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
}
-->
</style></head>

<body background="images/346.jpg">
&nbsp;&nbsp;
		<div align="center">
		  <h2>
		    <?php
             /*********************************/
            /* Database Connection as DAO.php */
            /**********************************/
            
            include_once("DAO.php");
            print '<h2> Data Table Details</h2>';
            /*****************************/
            /* Delete data from database */
            /*****************************/
            
            $fn = $_POST['fname'];
     
            $sql = ("DELETE FROM `reg` WHERE `fname` = '$fn'");
            
            if(!mysql_query($sql,$con)){
                die('Error:'.mysql_error());
            }
           
           /*************************************/
            /* View data as HTML Table Code Part */  
            /*************************************/
            
            $result = mysql_query("SELECT * FROM `reg`");
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
	    </h2>
</div>
&nbsp; &nbsp;
<hr/>
    <form name="buttonlink" method="post" action="SearchRegistration.html">
        <div align = "center">
        <input name="button" type="submit" value="SearchRegistration"/>
        </div>
    </form>
    <!--
<div align="right">
	<a href = "SearchRegistration.html">
	<img src="images/search.ico" alt="No image loaded" width="40" height="40" border="0" align="absmiddle" />
	</a>
</div>
-->
</body>
</html>
