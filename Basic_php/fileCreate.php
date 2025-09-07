<?php
    $fileName = "testfile.txt";
    $fileHandle = fopen($fileName,'w') or die("can't open fileName");
    fclose($fileHandle);
?>

