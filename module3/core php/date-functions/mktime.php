<?php
// This program shows the use of mktime() function in php

    //get past date
    $past_date=mktime(0,0,0,date("m")-2,date("d")-4,date("y")-2);

    // get current date
    $current_date=mktime(0,0,0,date("m"),date("d"),date("y"));

    // get future date
    $future_date=mktime(0,0,0,date("m")+4,date("d")+4,date("y")+2);

    // print past date
    echo "The date before 4 days 2 months and 2 year is:".date("d/m/y",$past_date)."<br>";

    // print current date
    echo "Current date is:".date("d/m/y",$current_date)."<br>";

    //print future date 
    echo "The date after 4 days 4 months and 2 years is:".date("d/m/y",$future_date)."<br>";
?>