<?php
            include_once("DAO.php");    
            
            /*************************************/
            /* View data as HTML Table Code Part */  
            /*************************************/
            $fn = $_POST['fname'];
            $result = mysql_query("SELECT distinct * FROM `reg` WHERE `name`='$name'");
            echo "<table border='1'>
                  <tr>
                     <th>First_Name</th> 
					 <th>City</th>
                  </tr>";              
            while($row = mysql_fetch_array($result)){
                            echo "<tr>";
                            echo "<td>" . $row['name'] . "</td>";
							echo "<td>" . $row['city'] . "</td>";
                            echo "</tr>";
            }
            echo"</table>";
            mysql_close($con);    
?>