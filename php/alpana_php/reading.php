<?php
$abc = "/doc/myfile.txt";
$fp = fopen($abc,"r");
if($fp == false)
{
echo("error in opening file");
exit();
}
$fileSize = fileSize($abc);
$fileData = fread($fp,$fileSize);
?>