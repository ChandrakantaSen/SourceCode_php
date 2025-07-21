<?php
    $a = 400;

    $b = &$a;
    print "value of a: ".$a."<br/>";
    print "value of b: ".$b."<br/>";

    ++$a;
    print "increment value of a: ".$a."<br/>";
    print "increment value of b: ".$b."<br/>";

    ++$b;
    print "increment value of a: ".$a."<br/>";
    print "increment value of b: ".$b."<br/>";

    

?>
