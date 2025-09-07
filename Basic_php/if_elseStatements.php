<?php
    $month = date("M");

    if($month == "Oct"){
        echo "Month is October"."<br/>";
        echo "Its Diwali";
    }
    else{
        echo "Month is not October"."<br/>";
        echo "It is ".$month;
    }
?>
