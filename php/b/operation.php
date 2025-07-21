<?php
$b = "<br/>";
$fno = $_POST['fno'];
$sno = $_POST['sno'];
$ope = $_POST['ope'];

/*
print "<strong>Number 1 : </strong>".$fno.$b; 
print "<strong>Number 2 : </strong>".$sno.$b;
print "<strong>Operation :</sstrong>".$ope.$b;
*/
if($ope=="add")
{
	$output=$fno+$sno;
	
	print "Output is: ".$output;
	
}
else if($ope=="subtract") 
{
	$output=$fno-$sno;
	print "Output is: ".$output;
	
}
else if($ope=="multiply")
{
	$output=$fno*$sno;
	print "Output is: ".$output;
	
}
else if($ope=="divide")
{
	$output=$fno/$sno;
	print "Output is: ".$output;
	
}
else
{
	$output= "error generated";
}

?>