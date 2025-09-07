<?php
$cars=array("Saab","Volvo","BMW","Toyota");
echo $cars[2];


$ages = array("Peter"=>32, "Quagmire"=>30, "Joe"=>34);
echo $ages["Peter"];

$families = array
  (
  "Griffin"=>array
  (
  "Peter",
  "Lois",
  "Megan"
  ),
  "Quagmire"=>array
  (
  "Glenn"
  ),
  "Brown"=>array
  (
  "Cleveland",
  "Loretta",
  "Junior"
  )
  );

  echo "Is " . $families['Griffin'][2] .
" a part of the Griffin family?";



?>