<?php

    $a = $_POST['t1'];
    
    function sum()
    {
        $a = 10;
        $b = 20;
        $sum = $a + $b;
        echo "Sum is: ".$sum;    
    }
    
    function diff()
    {
        $a = 100;
        $b = 20;
        $diff = $a - $b;
        echo "Difference is: ".$diff;    
    }
    
    switch($a)
    {
        case 1:
                sum(); break;
        case 2:
                diff(); break;
        default:
                echo "Wrong Input...";
    }
?>