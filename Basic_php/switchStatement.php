<?php
    $m = date("M");

    switch($m){
        case "Jan": print "it is january";      break;
        case "Feb": print "it is february";     break;
        case "Mar": print "it is march";        break;
        case "Apr": print "it is april";        break;
        case "May": print "it is may";          break;
        case "Jun": print "it is june";         break;
        case "Jul": print "it is july";         break;
        case "Aug": print "it is augest";       break;
        case "Sep": print "it is september";    break;
        case "Oct": print "it is october";      break;
        case "Nov": print "it is november";     break;
        case "Dec": print "it is december";     break;
        default:    print "none of the months are valid";
    }

?>
