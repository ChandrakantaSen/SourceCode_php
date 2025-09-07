<?php
        $con = mysql_connect('localhost','root','');

        if(!$con)
        {
                die('Error Occured'.mysql_error());
        }
        else
        {
                echo("database successfully connected");
        }
        mysql_select_db("student",$con);
?>
