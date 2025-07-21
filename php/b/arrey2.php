<?php
$matrix = array(
            "row1"=> array("col1"=>"1","col2"=>"4","col3"=>"7"),
            "row2"=> array("col1"=>"2","col2"=>"5","col3"=>"8"),
            "row3"=> array("col1"=>"3","col2"=>"6","col3"=>"9"));
			
echo "Value at row1 and col2 =".$matrix['row1']['col2'];
echo "<br>Printing number through matrix <br>";

foreach($matrix as &$value){
            echo "<br>";
            foreach($value as &$val){
                        echo "  ".$val."  ";
            }
}
?>
