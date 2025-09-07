<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>View Data Document</title>
</style><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
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
            /**********************************/
            /* Database Connection as DAO.php */
            /**********************************/
            
            include_once("DAO.php");
            print '<h2> Data Table Details</h2>';
            /*****************************/
            /* Insert data into database */
            /*****************************/
            
            $fn = $_POST['fname'];
            $ln = $_POST['lname'];
            $age = $_POST['age'];
            $add = $_POST['address'];
            $city = $_POST['city'];
            
            $sql = ("INSERT INTO `reg`(`fname`, `lname`, `age`, `address`, `city`) VALUES ('$fn','$ln','$age','$add','$city')");
            
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
    <form name="buttonlink" method="post" action="DelRegistration.html">
        <div align = "center">
        <input name="button" type="submit" value="DeleteRegistration"/>
        </div>
    </form>
    <!--
<div align="right">
	<a href = "DelRegistration.html">
	<img src="images/abc.ico" alt="No image loaded" width="40" height="40" border="0" align="absmiddle" />
	</a>
</div>
    -->
</body>
</html>
