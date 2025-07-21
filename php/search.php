<?php
            include_once("DAO.php");
     
            print '<h2> Data Table Details</h2>';
            
            $fn = $_POST['fname'];
            $ln = $_POST['lname'];
            $sql = ("SELECT distinct * FROM `reg` WHERE `fname` = '$fn' AND `lname` = '$ln' ");
            
            if(!mysql_query($sql,$con)){
                die('Error:'.mysql_error());
            }
?>