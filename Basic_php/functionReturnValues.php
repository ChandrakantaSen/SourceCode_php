<?php

    function mySum($x,$y){
        $total = $x + $y;
        return $total;
    }
    
    $myNumber = 0;

    echo "Before the function, myNumber: ".$myNumber."<br/>";
    
    $myNumber = mySum(3,4);
    
    echo "After the function, myNumber: ".$myNumber."<br/>";
?>

