<?php

    $a = intval($_POST['t1']);
    
    if(($a%7==0)||($a%10==7))
    {
        echo $a." buzz No";
    }
    else
    {
        echo $a." not buzz No";
    }
?>