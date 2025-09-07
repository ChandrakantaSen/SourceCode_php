<?php
    include_once("DAO.php");
    $fn = $_POST['fname'];
     
    $sql = ("DELETE FROM `reg` WHERE `fname` = '$fn'");
            
    if(!mysql_query($sql,$con)){
        die('Error:'.mysql_error());
    } 
    else{
        echo 'successfully data deleted...';
    }
?>