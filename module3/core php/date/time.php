<?php
// This program shows how to print he time in php

    // as we print date("H:i:s a"); it will print the universal time so we have to set the time zone 
    date_default_timezone_set("asia/calcutta");

    // get the current time ( H is used for 24 hour format)
    $current_time24=date("H:i:s a");

    //print the time
    echo "Current time is:".$current_time24."<br>";

    // get the current time ( h is used for 12 hour format)
    $current_time12=date("h:i:s a");

    //print the time
    echo "Current time is:".$current_time12."<br>";
?>