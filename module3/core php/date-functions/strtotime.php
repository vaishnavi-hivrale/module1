<?php
// This program shows how toconvert the string to date and time format

    // get current date
    $current_date=date("d/m/y");

    // print current date
    echo "Today dayte is: $current_date <br>";
    
    //get the date after 7 days using strtotime() function
    $date=strtotime("+7 days");

    // print future date
    echo "After 7 days the date is:".date("d/m/y",$date);
?>