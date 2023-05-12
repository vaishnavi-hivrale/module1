<?php
// This program shows use of parameter used to print the different date, day and year formats 

    // print the name of the day (camelcase i.e. Sunday)
    $day=date("l");
    echo "Today is: $day <br>";

    // print the name of day (camelcase and shortform i. e. Sun)
    echo "Today is:".date("D")."<br>";

    // print the name of the month (i. e. April)
    echo "Name of the month is:".date("F")."<br>";
    

    // print the name of the month in short form
    echo "Name of the month is:".date("M")."<br>";

    //print the date 
    echo "Today date is:".date("d/m/y")."<br>";

    // print the year in 4 digit
    echo "The year is:".date("Y")."<br>";
?>