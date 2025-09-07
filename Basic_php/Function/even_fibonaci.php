<?php
    
    $n = 10;
    $a = 0;
    $b = 1;
    $c;
    
    for($i=1;$i<=$n;$i++)
    {
        $c = intval($a + $b);
        $a = $b;
        $b = $c;
        
        if($c % 2 == 0)
        {
            echo " ".$c;
        }
    }
?>