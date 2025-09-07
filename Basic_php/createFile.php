<?php

    $ourFileName = "a.txt";
    $ourFileHandle = fopen($ourFileName,'w') or die("can't open file...");
    fclose($ourFileHandle);

?>
