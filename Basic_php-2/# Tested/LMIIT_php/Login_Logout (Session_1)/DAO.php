<?php
        $con = mysql_connect('localhost','root','');

        if(!$con){
            die('database connetion error'.mysql_error());              
        }
        mysql_select_db("alpana",$con);
?>
