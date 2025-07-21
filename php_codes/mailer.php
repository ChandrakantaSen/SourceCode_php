<?php

    /*************************************/
    /*   Database Connection as DAO.php  */
    /*************************************/
    include_once("DAO.php");
    
    /********************************************/
    /*    Select then Edit Data from database   */
    /********************************************/
    $name = $_POST['name'];
	$city = $_POST['city'];
    
    $result = mysql_query("SELECT distinct * FROM `reg` WHERE `name`='$name'");
    while($row= mysql_fetch_array($result))
    {  
       echo "<form name='form1' method='post' action='update2.php'>".
            "<table border='1'>".
            "<tr>".
              "<td>First_Name:</td>".
              "<td><input type='text' name='name' value={$row['name']}></td>".
            "</tr>".
			"<tr>".
              "<td>City:</td>".
              "<td><input type='text' name='city' value={$row['city']}></td>".
            "</tr>".
            "</table>".
            "</form>";
    }
    /**********************************/
    /*    Update Data from database   */
    /**********************************/
    $sql = "UPDATE `reg` 
            SET `name`='$name'
               ,`city`='$city'
            WHERE `name`='$name'";
    
    if (!mysql_query($sql,$con)){
        die("Updation failure".mysql_error());
    }
    else{
        echo("Updated successfully");
    }
    mysql_close($con); 
?>