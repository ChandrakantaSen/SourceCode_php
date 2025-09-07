<?php
//initialize
$how_hear = count($_POST['how_hear']) ? $_POST['how_hear'] : array();

//echo out their choices separated by a comma
echo count($how_hear) ? implode(', ',$how_hear) : 'Nothing';
?>