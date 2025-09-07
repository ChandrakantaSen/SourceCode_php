<?php

    $numStr = "15.65 Rupees";
    $numDec = "10.54";

    $numInt = (int)$numStr;
    echo "After casting to the Integer: ".$numInt;
    echo "<br/>";

    $numInt = (int)$numDec;
    echo "After casting to the Integer: ".$numInt;
    echo "<br/>";
?>
