<?php

    $ourFileName = "a.txt";
    $fh = fopen($ourFileName,'X') or die("can't open file...");
    fclose($fh);
    
?>
