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

    /*************************************/
    /*   Database Connection as DAO.php  */
    /*************************************/
    include_once("DAO.php");
    
    /********************************************/
    /*    Select then Edit Data from database   */
    /********************************************/
    $fn = $_POST['fname'];
    $ln = $_POST['lname'];
    $age = $_POST['age'];
    $add = $_POST['address'];
    $city = $_POST['city'];
    
    $result = mysql_query("SELECT distinct * FROM `reg` WHERE `fname`='$fn'");
    while($row= mysql_fetch_array($result))
    {  
       echo "<form name='form1' method='post' action='Update_View.php'>".
            "<table border='0'>".
            "<tr>".
              "<th width='102' height='34' align='center bgcolor='#FF9966'><h3>Details</h3></th>".
              "<th width='144' align='center' bgcolor='#66CC66'><h3> Insert Data Here</h3></th>".
            "</tr>".
            "<tr>".
              "<td><h4 align='center' class='style6' >First_Name:</h4></td>".
              "<td><input type='text' name='fname' maxlength='50' align='absmiddle' value={$row['fname']}></td>".
            "</tr>".
            "<tr>".
              "<td><h4 align='center'><span class='style6'>Last_Name:</span></h4></td>".
              "<td><input type='text' name='lname' maxlength='50' align='absmiddle' value={$row['lname']}></td>".
            "</tr>".
            "<tr>".
                "<td><h4 align='center' class='style6'>Age:</h4></td>".
                "<td><input type='text' name='age' maxlength='3' align='absmiddle' value={$row['age']}></td>".
            "</tr>".
            "<tr>".
                "<td><h4 align='center' class='style6'>Address:</h4></td>".
                "<td><input type='text' name='address' maxlength='50' align='absmiddle' value={$row['address']}></td>".
            "</tr>".
            "<tr>".
                "<td><h4 align='center' class='style6'>City:</h4></td>".
                "<td><input type='text' name='city' maxlength='30' align='bsmiddle' value={$row['city']}></td>".
            "</tr>".
            "<tr>".
              "<td height='33'></td>".
              "<td><input name='submit' type='submit' value='Submit'/>".
                  "<input name='reset' type='reset' value='Reset' disabled/>".
              "</td>".
            "</tr>".
            "</table>".
            "<hr />".
            "</form>";
    }
    /**********************************/
    /*    Update Data from database   */
    /**********************************/
    $sql = "UPDATE `reg` 
            SET `fname`='$fn'
               ,`lname`='$ln'
               ,`age`='$age'
               ,`address`='$add'
               ,`city`='$city' 
            WHERE `fname`='$fn'";
    
    if (!mysql_query($sql,$con)){
        die("Updation failure".mysql_error());
    }
    else{
        echo("Updated successfully");
    }
    mysql_close($con); 
?>

</body>
</html>