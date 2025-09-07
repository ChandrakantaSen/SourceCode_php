<?php
        $fname = "chandrakanta";
        $lname = "sen";
        $mob = "9432319711";


        $userId = Ucfirst(substr($fname,0,3))."/".substr($lname,-2,3)."/".substr($mob,3,2);
        $pw = str_shuffle($userId);
        print("UserId is: ".$userId);
        print("<br>");
        print("Password is: ".$pw);
?>
