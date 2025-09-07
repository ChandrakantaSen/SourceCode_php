<?php

    $number1 = 80;
    $number2 = 90;
    $number3 = '80';

    if($number1 < $number2){
        echo $number1." is less than ".$number2."<br/>";
    }
    elseif($number1 == $number3){
        echo $number1." is equal to ".$number3."<br/>";
    } 
    elseif($number1 === $number3){
        echo $number1." is identical to ".$number3."<br/>";
    }
    elseif($number1 !== $number3){
        echo $number2." is not identical to ".$number3."<br/>";
    }
    else{
        echo " Error: occured ";
    }

?>
