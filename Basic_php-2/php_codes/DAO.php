<?php
        $con = mysql_connect('localhost','root','');

        if(!$con){
            die('database connetion error'.mysql_error());              
        }
        else{
            echo 'database successfully connected...';    
        }
        mysql_select_db("php_db",$con);
?>
