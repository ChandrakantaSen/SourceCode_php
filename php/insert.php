<?php
            include_once ('DAO.php');
            
            $fn = $_POST['fname'];
            $ln = $_POST['lname'];
            $age = $_POST['age'];
            $add = $_POST['address'];
            $city = $_POST['city'];
            
            $sql = ("INSERT INTO `reg`(`fname`, `lname`, `age`, `address`, `city`) VALUES ('$fn','$ln','$age','$add','$city')");
            
            if(!mysql_query($sql,$con)){
                die('Error:'.mysql_error());
            }
            echo"! record added";
            mysql_close($con);
?>

	
	
	
