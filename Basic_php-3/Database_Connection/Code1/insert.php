<?php
        include_once("DAO.php");
        $nm = $_POST['t1'];
        $cls = $_POST['t2'];
        $mrks = $_POST['t3'];

        if(isset($_POST['submit']))
        {
            $sql = "INSERT INTO `std_details` 
                            ( `std_id`
                            , `std_name`
                            , `std_class`
                            , `std_marks`
                            , `std_date` ) 
                    VALUES 
                           ( ''
                           , '$nm'
                           , '$cls'
                           , '$mrks'
                           ,  now() )";
        
        $result = mysql_query("Select * from `std_details`");
        
        echo "<table border='0' width='500px' height='200px' align='center' cellpadding='1' cellspacing='1'>";		
		echo "<tr align='center' bgcolor='#002C40' style='color:#FFF'>
				<td>STUDENT NAME</td>
				<td>STUDENT CLASS</td>
                <td>STUDENT MARKS</td>
			  </tr>";
        
        if(mysql_num_rows($result) > 0)
		{
			while($row = mysql_fetch_array($result))
			{
				echo "<tr align='center' bgcolor='#0f7ea3'>
		 				<td>".$row['nm']."</td> 
						<td>".$row['cls']."</td>
                        <td>".$row['mrks']."</td>
					  </tr>" ;
			}
		}
		else
		{
			echo "<tr align='center' bgcolor='#6C0000'>
					<td colspan='5'>No results</td>
				  <tr>";
			echo "</table>";
		}
        
        if(!mysql_query($sql,$con))
        {
                die('Error:'.mysql_error());
        }
        else
        {
                echo "1...record added";
        }
        }
        mysql_close($con);
?>
