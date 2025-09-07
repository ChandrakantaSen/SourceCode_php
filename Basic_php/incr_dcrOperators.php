<?php
    $num1 = 5;
    $num2 = $num1++;
    $num3 = ++$num1;
    $num = $num1 + 1;
    
    print "Number is: ".$num1."<br/>";
    print "Incremented Number is (i++): ".$num2."<br/>";
    print "Incremented Number is (++i): ".$num3."<br/>";
    print "Incremented Number is (i=i+1): ".$num."<br/>";

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    
    $num4 =  5;
    $num5 = $num4--;
    $num6 = --$num4;
    $numm = $num4 - 1;

    print "Number is: ".$num4."<br/>";
    print "Decremented Number is (i--): ".$num5."<br/>";
    print "Decremented Number is (--i): ".$num6."<br/>";
    print "Decremented Number is (i=i-1): ".$numm."<br/>";

?>
