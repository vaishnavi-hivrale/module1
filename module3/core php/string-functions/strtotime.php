<?php
// This program shows the use of strtotime() function 

    // strtotime() function converts the string into time format
    echo "The current date is:".date("d/m/y")."<br>";
    echo "After 7 days the date is:".date("d/m/y",strtotime("+7 days"));
?>