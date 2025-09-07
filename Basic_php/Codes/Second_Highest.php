<?php

    $a=intval($_POST['t1']);
    $b=intval($_POST['t2']);
    $c=intval($_POST['t3']);    
    $max = 0;
    
    if($a>$b && $a>$c)
    {
        if($b>$c)
        {
            $max = $b;
        }
        else
        {
            $max = $c;
        }
    }
    
    if($b>$a && $b>$c)
    {
        if($a>$c)
        {
            $max = $a;
        }
        else
        {
            $max = $c;
        }
    }
    
    if($c>$a && $c>$b)
    {
        if($a>$b)
        {
            $max = $a;
        }
        else
        {
            $max = $b;
        }
    }
    
    echo "<b>Second Highest is: </b>".$max;
?>